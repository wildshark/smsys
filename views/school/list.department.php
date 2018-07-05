<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 24-May-18
 * Time: 10:56 AM
 */
?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-department">Create Department</button>

<div class="modal fade" id="create-department" tabindex="-1" role="dialog" aria-labelledby="create-school" aria-hidden="true">
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
                    <input type="hidden" name="ui" value="department">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">School/Faculty/Administration Unit:</label>
                        <select name="school" id="form-field-1" class="form-control">
                            <?php cmb_school_data($conn)?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Department:</label>
                        <input type="text" name="department" class="form-control" id="recipient-name">
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
                    <th>Department</th>
                    <th>School</th>
                    <th class="hidden-480">Prefix</th>
                    <th class="hidden-480">Total Staff</th>
                    <th>Total Student</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_schools_department_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
