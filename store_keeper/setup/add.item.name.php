<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Jun-18
 * Time: 9:18 PM
 */

function get_item_name($conn){

    $sql = "SELECT * FROM get_stock_list";
    $result = $conn->query($sql);
    while ($r = $result->fetch_assoc()) {
        if ($r['status'] == 1){
            $status = "Enable";
        }else{
            $status = "Disable";
        }

        $stock_id = $r['stockID'];

        $stock_qty ="SELECT Sum(get_stock_details.purchase_qty) AS total, get_stock_details.stockID
        FROM get_stock_details WHERE get_stock_details.stockID = '$stock_id' GROUP BY get_stock_details.stockID";
        $result_qty = $conn->query($stock_qty);
        $qty = $result_qty->fetch_assoc();

        if (!isset($qty['total'])){
             $total_qty="0";
        }else{
            $total_qty = $qty['total'];
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
                        {$r['category_name']}</a>
                    </td>
                    <td>{$r['stock']}</td>
                    <td class='hidden-480'>{$r['code_no']}</td>
                    <td>{$status}</td>
                    <td class='hidden-480'>{$total_qty}</td>

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
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">New Item </button>

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
                        <label for='recipient-name' class='form-control-label'>Category </label>
                        <select name='category' value='' class='form-control' id='recipient-name'>
                            <?php cmb_stock_category($conn);?>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Item Name </label>
                        <input type='text' name='item-name' value='' placeholder="Item Name" class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Item code </label>
                        <input type='text' name='item-code' value='' placeholder="e.g. Ele-201" class='form-control' id='recipient-name'>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add-new-item" class="btn btn-primary">Submit</button>
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
                    <th>Code No#</th>
                    <th class="hidden-480">Item Name</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Category
                    </th>
                    <th>Status</th>
                    <th>Total Qty</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_item_name($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
