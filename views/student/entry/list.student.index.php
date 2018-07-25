<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 19-Jun-18
 * Time: 6:48 PM
 */

?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">New Application</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="model.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="student-admission-entry">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Date:</label>
                        <input type="date" name="date" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Mode of Application:</label>
                        <select name="application-mode" id="form-field-1" class="form-control">
                            <option value="1">Direct Entry</option>
                            <option value="2">Mature Entry</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Academic Year:</label>
                        <select name="academic-year" id="form-field-1" class="form-control">
                            <?php cmb_academic_session($conn);?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">First Name:</label>
                        <input type="text" name="first-name" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Last Name:</label>
                        <input type="text" name="last-name" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Nationality:</label>
                        <select name="nationality" id="form-field-1" class="form-control">
                            <?php cmb_nationality($conn)?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Mobile:</label>
                        <input type="text" name="mobile1" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Home Mobile:</label>
                        <input type="text" name="mobile2" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Programme:</label>
                        <select name="programme" id="form-field-1" class="form-control">
                            <?php cmb_programme_data($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Category:</label>
                        <select name="category" id="form-field-1" class="form-control">
                            <option value="1">Local Student</option>
                            <option value="2">Foreign Student</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Stream:</label>
                        <select name="stream" id="form-field-1" class="form-control">
                            <option value="1">Regular</option>
                            <option value="2">Weekend</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="recipient-name" class="form-control-label">School Attended:</label>
                        <input type="text" name="school-attended" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Year:</label>
                        <input type="text" name="school-year" class="form-control" id="recipient-name">
                    </div>

                     <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Exam Index ID:</label>
                        <input type="text" name="exam-index-id" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Result(s):</label>
                        <textarea name="result" id="form-field-1" class="form-control"></textarea>
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
                    <th>serial #</th>
                    <th class="hidden-480">Year</th>
                    <th>Student</th>
                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Mobile
                    </th>
                    <th class="hidden-480">Program</th>

                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php student_admission_entry($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

