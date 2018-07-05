<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 11-Mar-18
 * Time: 1:49 AM
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
                    <th>Staff Name</th>
                    <th class="hidden-480">Nationality</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Position
                    </th>
                    <th class="hidden-480">Department</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php staff_profile_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

