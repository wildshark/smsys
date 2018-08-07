
function get_library_book($conn){

  $sql="select * from get_lib_book";
    $result=$conn->query($sql);
  while ($r=$result->fetch_assoc()) {
         
    echo"
        <tr>
                <td class='center'>
                    <label class='pos-rel'>
                        <input type='checkbox' class='ace' />
                        <span class='lbl'></span>
                    </label>
                </td>

                <td>
                {$r['Call_No']}
                </td>
                <td>{$r['Book_Title']}</td>
                <td class='hidden-480'>{$r['Author1']}</td>
                <td> {$r['Publication']}</td>
                <td class='hidden-480'>{$r['ISBN']}</td>

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

?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">Upload File </button>

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
                <button type="submit" name="submit" value="backup-file" class="btn btn-primary">Submit</button>
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
                <th>Call No#</th>
                <th class="hidden-480">Book Title</th>

                <th>
                    Author1
                </th>
                <th>Publication</th>
                <th>ISBN</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            <?php get_library_book($conn);?>
            </tbody>
        </table>
    </div>
</div>
</div>