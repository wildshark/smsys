<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 11-May-18
 * Time: 12:03 PM
 */
?>


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">New Booking</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="GET" action="model.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="hostel">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Date:</label>
                        <input type="date" name="date" placeholder="Name of Rooom / Room Number"class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Academic Year:</label>
                        <select name="academic-year" class="form-control" id="recipient-name">
                            <?php cmb_academic_session($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Room Label:</label>
                        <select name="room" class="form-control" id="recipient-name">
                            <?php cmb_room_list($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Student:</label>
                        <select name="student" class="form-control" id="recipient-name">
                            <?php student_index_list($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Receipt/Ref. No#:</label>
                        <input type="text" name="ref-no" placeholder="Receipt/Ref. No#"class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Bed Serial Number:</label>
                        <input type="text" name="bed-no" placeholder="Receipt/Ref. No#"class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Arrived Date:</label>
                        <input type="date" name="book-in" placeholder="0" class="form-control" id="recipient-name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add-booking" class="btn btn-primary">Submit</button>
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
                    <th class="hidden-480"> Admission No#</th>
                    <th>Student Name</th>
                    <th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Room</th>
                    <th>Book In</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php get_hostel_book_details($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
