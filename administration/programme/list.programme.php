<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06-Mar-18
 * Time: 8:15 AM
 *
 * get_course
 * course($conn)
 */

?>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Add Programme</button>

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
                    <input type="hidden" name="ui" value="programme">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">School:</label>
                        <select name="school" id="form-field-1" class="form-control">
                            <?php cmb_school_data($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Programme Title:</label>
                        <input type="text" name="programme" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Programme Year(s) Duration:</label>
                        <input type="text" name="programme-year" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Programme Prefix:</label>
                        <input type="text" name="programme-prefix" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">School:</label>
                        <select name="status" id="form-field-1" class="form-control">
                            <option value="1">Active</option>
                            <option value="2">Passive</option>
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
                    <th>Serial</th>
                    <th>Programme</th>

                    <th class="hidden-480">
                        School
                    </th>
                    <th class="hidden-480"></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php programme_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>


