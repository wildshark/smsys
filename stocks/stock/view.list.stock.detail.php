<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 10-May-18
 * Time: 8:32 PM
 */

function get_stock_details($conn){
    //get_calendar
    $id = $_GET['detail'];

    $sql="SELECT * FROM `get_stock_details` WHERE  stockID ='$id'";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo "
                <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>
                    <td>{$r['stock']}</td>
                    <td>{$r['ref_no']}</td>
                    <td>{$r['order_qty']}</td>
                    <td>{$r['purchase_qty']}</td>
                    <td>{$r['issue_qty']}</td>
                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='blue' href='store.php?ui=view-stock-list&&detail={$r['stockID']}&token={$_SESSION['user-token']}&box=1&msg=1'>
                                <i class='ace-icon fa fa-search-plus bigger-130'></i>
                            </a>

                            <a class='green' href='#'>
                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                            </a>

                            <a class='red' href='#'>
                                <i class='ace-icon fa fa-trash-o bigger-130'></i>
                            </a>
                        </div>
                    </td>
                </tr>
        ";
    }

}

?>
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
                    <th>Item Details</th>
                    <th>Qty Request</th>
                    <th>Qty Purchased</th>
                    <th class="hidden-480">Qty Issued</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Available Qty
                    </th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_stock_details($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
