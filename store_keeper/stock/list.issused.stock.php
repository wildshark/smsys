<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Jun-18
 * Time: 9:18 PM
 */

function get_issused_stock($conn){

    $sql = "SELECT * FROM get_stock_issused";
    $result = $conn->query($sql);
    while ($r = $result->fetch_assoc()) {
        if (isset($r['details'])){
            $issused_detail = $r['f_name']." ". $r['l_name']." * ".$r['details'];
        }else{
            $issused_detail = $r['f_name']." ".$r['l_name'];
        }
       
        echo"
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                        {$r['tran_date']}</a>
                    </td>
                    <td>{$r['ref_no']}</td>
                    <td class='hidden-480'>{$r['stock']} - {$r['stock_category']}</td>
                    <td>{$issused_detail} </td>
                    <td class='hidden-480'>{$r['issue_qty']}</td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='green' href='store.php?page=edit-item&token={$_SESSION['user-token']}&detail={$r['stockID']}&box=1&msg=1'>
                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=school&submit=delete&detail={$r['stockID']}'>
                                <i class='ace-icon fa fa-trash-o bigger-130'></i>
                            </a>
                        </div>
                    </td>
                </tr>
        ";
    }
}

?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">New Issue </button>

<div class="modal fade" id="create-school" tabindex="-1" role="dialog" aria-labelledby="create-school" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="get" action="model.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <input type='hidden' name='ui' value='store-keeper'>

                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Date </label>
                        <input type='date' name='date' value='' placeholder="" class='form-control' id='recipient-name'>
                    </div>
            
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'> Staff Name </label>
                        <select name='staff' value='' class='form-control' id='recipient-name'>
                            <?php get_staff_lecturer($conn);?>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Item Name </label>
                        <select name='item' value='' class='form-control' id='recipient-name'>
                            <?php cmb_stock_issused_list($conn);?>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Item Qty </label>
                        <input type='text' name='qty' value='' placeholder="0" class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Ref. No# </label>
                        <input type='text' name='ref' value='<?php echo "IS".date("ymdis")?>' placeholder="Invoice/Ref. No#" class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Comment </label>
                        <input type='text' name='comment' value='' placeholder="0" class='form-control' id='recipient-name'>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add-issused" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">

        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        <div class="table-header">
            Results for "Latest Registered Domains"
        </div>

        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>Date</th>
                    <th class="hidden-480">Department</th>

                    <th>
                        Item Name
                    </th>
                    <th>Unit Price</th>
                    <th>Qty</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_issused_stock($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
