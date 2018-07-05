<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 11-May-18
 * Time: 12:03 PM
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
                    <th>Date</th>
                    <th class="hidden-480"> Admission No#</th>
                    <th>Student Name</th>
                    <th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Room</th>
                    <th>Book In</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php get_hostel_book_details($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
