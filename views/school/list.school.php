<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 18-May-18
 * Time: 2:03 PM
 */
?>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">Create School/Faculty</button>

<div class="modal fade" id="create-school" tabindex="-1" role="dialog" aria-labelledby="create-school" aria-hidden="true">
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
                    <input type="hidden" name="ui" value="school">
                    <input type="hidden" name="cat" value="1">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">School/Faculty Name:</label>
                        <input type="text" name="school" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Prefix:</label>
                        <input type="text" name="prefix" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Affliate:</label>
                        <select name="affliate" class="form-control" id="recipient-name">
                            <?php cmb_affliate($conn);?>
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
                    <th>School/faculty</th>
                    <th>Prefix</th>
                    <th class="hidden-480">Affliate</th>
                    <th class="hidden-480">Total Student</th>
                    <th>Total Student</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php school_data($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
