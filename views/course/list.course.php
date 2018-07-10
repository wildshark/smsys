<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Mar-18
 * Time: 12:57 AM
 */

?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Add Course</button>

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
                    <input type="hidden" name="ui" value="course">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Programme:</label>
                        <select name="programme" id="form-field-1" class="form-control">
                            <?php cmb_programme_data($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Course Title:</label>
                        <input type="text" name="course-name" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Course Code:</label>
                        <input type="text" name="course-code" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Credit Hours:</label>
                        <select name="credit-hours" id="form-field-1" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Level:</label>
                        <select name="level" id="form-field-1" class="form-control">
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Semester:</label>
                        <select name="semester" id="form-field-1" class="form-control">
                            <?php get_list_semester($conn);?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Status:</label>
                        <select name="status" id="form-field-1" class="form-control">
                            <option value="1">Core</option>
                            <option value="2">Elective</option>
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
