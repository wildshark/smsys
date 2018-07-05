<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 09-May-18
 * Time: 7:50 PM
 */
?>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Add Activities</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="get" action="model.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="academic-calendar">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Academic Year:</label>
                        <select name="year" id="form-field-1" class="form-control">
                            <?php cmb_academic_session($conn)?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Semester:</label>
                        <select name="semester" id="form-field-1" class="form-control">
                            <?php get_list_semester($conn)?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Activities/Event:</label>
                        <input type="text" name="activities" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Start Date:</label>
                        <input type="date" name="start-date" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">End Date:</label>
                        <input type="date" name="end-date" class="form-control" id="recipient-name">
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
                    <th>Year</th>
                    <th>Semester</th>
                    <th class="hidden-480">Activities</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Start Date
                    </th>
                    <th>End Date</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php academic_calender($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
