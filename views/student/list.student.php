<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06-Mar-18
 * Time: 6:12 AM
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
                    <th>Student</th>
                    <th>Admission No</th>
                    <th class="hidden-480">Year</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Programme
                    </th>
                    <th class="hidden-480">School</th>

                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php student_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>


