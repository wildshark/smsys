<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Jun-18
 * Time: 9:18 PM
 */

function get_backup_file($conn){

    $id = $_SESSION['user-id'];

    $sql = "SELECT * FROM get_backup_file WHERE f_userID = '$id'";
    $result = $conn->query($sql);
    while ($r = $result->fetch_assoc()) {
        $file = md5($r['fileID']);
        if (!isset($r['file_type'])){
            $file_size = "Unknow Size";
        }else{
            $file_size = $r['file_type'];
        }
    
        if ($r['f_receiverID'] == 0){
            $receiverID = "Backup File";
        }else{
            //send file to 
            $sendID = $r['f_receiverID'];
            $send_sql ="SELECT * FROM `get_staff_name_list` WHERE staff_profile_ID = '$sendID'";
            $send_result = $conn->query($send_sql);
            $s = $send_result->fetch_assoc();
            $receiverID = "Send to ". $s['f_name']." ".$s['l_name'];

        }
        echo"
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                        {$r['f_date']}</a>
                    </td>
                    <td>{$r['title']}</td>
                    <td class='hidden-480'>{$receiverID}</td>
                    <td> {$file_size}</td>
                    <td class='hidden-480'>{$file}kb</td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='green' href='model.php?ui=cloud-file&submit=download&token={$_SESSION['user-token']}&detail={$r['fileID']}&box=1&msg=1'>
                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=cloud-file&submit=del.file-share&token={$_SESSION['user-token']}&detail={$r['fileID']}&box=1&msg=1'>
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
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">New Issue </button>

<div class="modal fade" id="create-school" tabindex="-1" role="dialog" aria-labelledby="create-school" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="model.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <input type='hidden' name='ui' value='cloud-file'>

                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'> Send to </label>
                        <select name='send-to' value='' class='form-control' id='recipient-name'>
                            <option></option>
                            <?php cmb_all_staff_name_list($conn);?>
                        </select>
                    </div>

                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'> Title </label>
                        <input type='text' name='title' value='' placeholder="0" class='form-control' id='recipient-name'>
                    </div>

                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Attach File </label>
                        <input type='file' name='file' value='' placeholder="" class='form-control' id='recipient-name'>
                    </div>
            
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Comment </label>
                        <input type='text' name='comment' value='' placeholder="0" class='form-control' id='recipient-name'>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="send-file" class="btn btn-primary">Submit</button>
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
                    <th class="hidden-480">Title</th>

                    <th>
                        Status
                    </th>
                    <th>Size</th>
                    <th>File SHA</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_backup_file($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
