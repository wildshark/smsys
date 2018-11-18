<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Jun-18
 * Time: 9:18 PM
 */

function get_supplier_contact($conn){

    $sql = "SELECT * FROM get_supplier_contact";
    $result = $conn->query($sql);
    while ($r = $result->fetch_assoc()) {
       
        echo"
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                        {$r['supplier_name']}</a>
                    </td>
                    <td>{$r['mobile1']}</td>
                    <td class='hidden-480'>{$r['mobile1']}</td>
                    <td>{$r['email']}</td>
                    <td class='hidden-480'></td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='green' href='store.php?page=edit-supplier-contact&token={$_SESSION['user-token']}&detail={$r['supplyID']}&box=1&msg=1'>
                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=school&submit=delete&detail={$r['supplyID']}'>
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
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">New Supplier </button>

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
                        <label for='recipient-name' class='form-control-label'>Name </label>
                        <input type='text' name='supplier-name' value='' placeholder="" class='form-control' id='recipient-name'>
                    </div>
            
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>address </label>
                        <input type='text' name='address' value='' placeholder="0" class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Mobile 1 </label>
                        <input type='text' name='mobile1' value='' placeholder="mobile" class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Mobile 2 </label>
                        <input type='text' name='mobile2' value='' placeholder="0" class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Email </label>
                        <input type='email' name='email' value='' placeholder="" class='form-control' id='recipient-name'>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add-supplier-contact" class="btn btn-primary">Submit</button>
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
                    <th>Name</th>
                    <th class="hidden-480">Mobile 1</th>

                    <th>
                        Mobile 2
                    </th>
                    <th>Email</th>
                    <th>Total Transaction</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_supplier_contact($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
