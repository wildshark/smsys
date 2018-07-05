<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 16-May-18
 * Time: 12:51 AM
 */
?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Add Enrollment</button>

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
                    <input type="hidden" name="ui" value="enrollment">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Date:</label>
                        <input type="date" name="date" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Student:</label>
                        <select name="student" id="form-field-1" class="form-control">
                            <?php student_index_list($conn);?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Semester:</label>
                        <select name="semester" id="form-field-1" class="form-control">
                            <?php get_list_semester($conn)?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Academic Year:</label>
                        <select name="academic-year" id="form-field-1" class="form-control">
                            <?php cmb_academic_session($conn);?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Course:</label>
                        <select name="course" id="form-field-1" class="form-control">
                            <?php cmb_programme_data($conn);?>
                        </select>
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
                    <th>Academic Year(s)</th>
                    <th class="hidden-480">Semester</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Student
                    </th>
                    <th class="hidden-480">Course</th>

                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php student_enrollment_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
