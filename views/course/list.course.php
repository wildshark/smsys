<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Mar-18
 * Time: 12:57 AM
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
                    <th>Code</th>
                    <th>Course Title</th>
                    <th class="hidden-320">level</th>

                    <th>
                        Credits
                    </th>
                    <th class="hidden-480">Semester</th>
                    <th class="hidden-480"></th>
                </tr>
                </thead>

                <tbody>
                <?php course_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
