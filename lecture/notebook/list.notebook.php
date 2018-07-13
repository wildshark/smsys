<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 12-May-18
 * Time: 11:03 AM
 */
?>


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">New Note</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="model.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="lecture-note">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Topic:</label>
                        <input type="text" name="topic" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Course:</label>
                        <select name="course" id="form-field-1" class="form-control">
                            <?php cmb_course($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Semester:</label>
                        <select name="semester" id="form-field-1" class="form-control">
                            <?php get_list_semester($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Level:</label>
                        <select name="level" id="form-field-1" class="form-control">
                            <option value ="100">100</option>
                            <option value ="200">200</option>
                            <option value ="300">300</option>
                            <option value ="400">400</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Lecturer:</label>
                        <select name="lecturer" id="form-field-1" class="form-control">
                            <?php get_staff_lecturer($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Attach File:</label>
                        <input type="file" name="attach-file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add-note" class="btn btn-primary">Submit</button>
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
                    <th>Course</th>
                    <th>Topic</th>
                    <th class="hidden-480">level</th>
                    <th>
                        Semester
                    </th>
                    <th>Programme</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php get_lecture_note($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

