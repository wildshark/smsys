<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-May-18
 * Time: 4:03 PM
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
                    <th>Staff ID</th>
                    <th>Staff Name</th>
                    <th class="hidden-480">Gender</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Nationality
                    </th>
                    <th class="hidden-480">Category</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php staff_profile_terminated_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
