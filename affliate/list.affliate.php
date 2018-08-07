
<?php
function get_affliate_school($conn){

    //$id = $_SESSION['user-id'];

    $sql = "SELECT * FROM get_affliate_school";
    $result = $conn->query($sql);
    while ($r = $result->fetch_assoc()) {

        $affliate_id = $r['affliateID'];
        $serial = md5($r['affliateID']);
        $prefix = $r['affliate_prefix'];

        if ($r['statusID'] == 1){
            $status = "Enable";
        }else{
            $status = "Disable";
        }
        /**
        $school_sql = "SELECT Count(get_school.schoolID) as total, get_school.affliateID FROM get_school
        WHERE get_school.affliateID = '$affliate_id'";
        $result_school = $conn->query($school_sql);
        $row_school = $result->fetch_assoc();

        if (isset($row_school['total'])){
            $total = $row_school['total'];
        }else{
            $total = "0";
        }

        $program_sql = "SELECT Count(get_programme.progID) AS total, get_programme.affliateID FROM get_programme
        WHERE get_programme.affliateID ='$affliate_id'";
        $result_program = $conn->query($program_sql);
        $row_program = $result->fetch_assoc();

        if (isset($row_program['total'])){
            $total_programme = $row_school['total'];
        }else{
            $total_programme = "0";
        }

        **/
        
        echo"
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                       {$r['affliate']}
                    </td>
                    <td>{$prefix}</td>
                    <td class='hidden-480'>{$serial}</td>
                    <td>{$status}</td>
                    <td class='hidden-480'></td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='green' href='#' data-toggle='modal' data-target='#view-school-{$serial}'>
                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=affliate&submit=delete&token={$_SESSION['user-token']}&detail={$r['affliateID']}&box=1&msg=1'>
                                <i class='ace-icon fa fa-trash-o bigger-130'></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <div class='modal fade' id='view-school-{$serial}' tabindex='-1' role='dialog' aria-labelledby='view-school-{$serial}' aria-hidden='true'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <form method='POST' action='model.php' enctype='multipart/form-data'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>New message</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'>
                                    <input type='hidden' name='ui' value='affliate'>
                                    <input type='hidden' name='affliate' value='{$affliate_id}'>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'> University </label>
                                        <input type='text' name='university' value='{$r['affliate']}' placeholder='Name of Affliate' class='form-control' id='recipient-name'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'> Prefix </label>
                                        <input type='text' name='prefix' value='{$prefix}' placeholder='Prefix' class='form-control' id='recipient-name'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'> status</label>
                                        <select name='status' value='' placeholder='0' class='form-control' id='recipient-name'>
                                            <option class='active' value='{$r['statusID']}'>{$status}</option>
                                            <option value='1'>Enable</option>
                                            <option value='2'>Disable</option>
                                        </select>
                                    </div>

                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                    <button type='submit' name='submit' value='edit-affliate' class='btn btn-primary'>Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        ";
    }
}

?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">Add Affliate </button>

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
                <input type='hidden' name='ui' value='affliate'>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> University </label>
                    <input type='text' name='university' value='' placeholder="Name of Affliate" class='form-control' id='recipient-name'>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Prefix </label>
                    <input type='text' name='prefix' value='' placeholder="Prefix" class='form-control' id='recipient-name'>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> status</label>
                    <select name='status' value='' placeholder="0" class='form-control' id='recipient-name'>
                        <option class="active" value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" value="add-affliate" class="btn btn-primary">Submit</button>
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
                <th>Affliate</th>
                <th class="hidden-480">Prefix</th>
                <th>Hash</th>
                <th>Status</th>
                <th>Programme</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            <?php get_affliate_school($conn);?>
            </tbody>
        </table>
    </div>
</div>
</div>