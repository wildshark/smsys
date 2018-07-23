<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-May-18
 * Time: 5:48 PM
 */

 $_SESSION['result-sem-id'] = $_GET['detail'];
 $_SESSION['year-id'] = $_GET['year'];
 $_SESSION['semester-id'] = $_GET['semester'];
 $_SESSION['course-id'] = $_GET['course'];
 $_SESSION['level-id'] = $_GET['level'];
?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Add Result</button>

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
                <input type="hidden" name="ui" value="result">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Student:</label>
                        <select name="student" id="form-field-1" class="form-control">
                        <?php student_index_list($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Case Study:</label>
                        <input type="text" name="case-study" placeholder ="0.00" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Group Work:</label>
                        <input type="text" name="group-work" placeholder ="0.00" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Class Presentation:</label>
                        <input type="text" name="presentation" placeholder ="0.00" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Final Examination:</label>
                        <input type="text" name="examination" placeholder ="0.00" class="form-control" id="recipient-name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add-exam-result" class="btn btn-primary">Submit</button>
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
                    <th>Student</th>
                    <th>Academic Year</th>
                    <th class="hidden-480">Semester</th>

                    <th>
                        Lsevel
                    </th>
                    <th>Examination</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php get_result_details($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
