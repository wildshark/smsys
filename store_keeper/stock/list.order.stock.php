<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Jun-18
 * Time: 9:18 PM
 */
function get_stock_order_data($conn){

    $sql = "SELECT * FROM get_stock_details";
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
                        {$r['tran_date']}</a>
                    </td>
                    <td>{$r['stock']}</td>
                    <td class='hidden-480'>{$r['ref_no']}</td>
                    <td>{$r['order_qty']}</td>
                    <td class='hidden-480'>{$r['status']}</td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='green' data-toggle='modal' href='#order-view-{$r['tranID']}'>
                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=school&submit=delete&detail={$r['tranID']}'>
                                <i class='ace-icon fa fa-trash-o bigger-130'></i>
                            </a>
                        </div>
                    </td>
                </tr>
                
                
                <div class='modal fade' id='order-view-{$r['tranID']}' tabindex='-1' role='dialog' aria-labelledby='create-school' aria-hidden='true'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <form method='get' action='model.php'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>New message</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'>
                                    <input type='hidden' name='ui' value='school'>
                                    <input type='hidden' name='school-code' value='{$r['tranID']}'>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'>Order Date:</label>
                                        <input type='text' name='school' value='{$r['tran_date']}' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'>Item </label>
                                        <input type='text' name='prefix' value='{$r['stockID']}' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'>Details </label>
                                        <input type='text' name='prefix' value='{$r['details']}' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'>Ref. No# </label>
                                        <input type='text' name='prefix' value='{$r['ref_no']}' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'>Qty </label>
                                        <input type='text' name='prefix' value='{$r['order_qty']}' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'>Remark </label>
                                        <input type='text' name='prefix' value='{$r['stockID']}' class='form-control' id='recipient-name'>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                    <button type='submit' name='submit' value='update' class='btn btn-primary'>Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        ";
    }
}

?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">Create School/Faculty</button>

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
                    <input type='hidden' name='ui' value='school'>
                    <input type='hidden' name='school-code' value=''>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Order Date:</label>
                        <input type='date' name='school' value='' class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Item </label>
                        <input type='text' name='prefix' value='' class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Details </label>
                        <input type='text' name='prefix' value='' class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Ref. No# </label>
                        <input type='text' name='prefix' value='' class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Qty </label>
                        <input type='text' name='prefix' value='' class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Remark </label>
                        <input type='text' name='prefix' value='' class='form-control' id='recipient-name'>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add" class="btn btn-primary">Submit</button>
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
                    <th>Stock</th>
                    <th class="hidden-480">Ref. No#</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Qty
                    </th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_stock_order_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
