<?php
function get_room_list($conn){

    $yearID =  $_SESSION['academic-year'];

    $sql='SELECT * FROM get_hostel_room';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        $bed = $r['bed'];
        $roomID = $r['roomID'];

        echo "
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                        {$r['block_name']}
                    </td>
                    <td>{$r['room']}</td>
                    <td class='hidden-480'>{$r['bed']}</td>
                    <td></td>

                    <td class='hidden-480'>
                        
                    </td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='blue' href='hostel.php?page=edit-hostel-rental&token={$_SESSION['user-token']}&id={$r['roomID'] }&box=1&msg=1'>
                                <i class='ace-icon fa fa-search-plus bigger-130'></i>
                            </a>

                            <a class='green' href='model.php?ui=hostel&submit=status-rental&token={$_SESSION['user-token']}&id={$r['roomID']}&box=1&msg=1'>
                                <i class='ace-icon fa fa-flag bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=hostel&submit=del-rental&token={$_SESSION['user-token']}&id={$r['roomID'] }&box=1&msg=1'>
                                <i class='ace-icon fa fa-trash-o bigger-130'></i>
                            </a>
                        </div>                   
                    </td>
                </tr>
        ";
    }
}
?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Create Room</button>

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
                    <input type="hidden" name="ui" value="hostel">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Block Label:</label>
                        <select name="block" class="form-control" id="recipient-name">
                            <?php hostel_block_list($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Room Label:</label>
                        <input type="text" name="room" placeholder="Name of Rooom / Room Number"class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Number of Bed:</label>
                        <input type="text" name="number-bed" placeholder="0" class="form-control" id="recipient-name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add-room" class="btn btn-primary">Submit</button>
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
                    <th>Block</th>
                    <th class="hidden-480">Room Label</th>
                    <th>Total Bed</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php  get_room_list($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>