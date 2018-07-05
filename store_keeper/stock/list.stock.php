<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 10-May-18
 * Time: 2:12 PM
 */

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
                    <?php stock_balance($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>


