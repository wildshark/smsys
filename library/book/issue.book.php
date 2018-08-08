
<?php
function get_issue_book($conn){

    //$id = $_SESSION['user-id'];

    $sql = "SELECT * FROM get_lib_issue_book";
    $result = $conn->query($sql);
    while ($r = $result->fetch_assoc()) {

        $issue_id = $r['IssueID'];
        $serial = md5($r['IssueID']);
        
        //book details
        $call_no =$r['Call_No'];
        $accessionNo = $r['AccessionNo'];
        $category = $r['cata_no']."-".$r['details'];
        $book = $r['Book_Title'];
        $isbn = $r['ISBN'];

        //student details
        $student = $r['first_name']." ".$r['surname'];
        $admissionNo = $r['admissionNo'];
        $mobile1 = $r['mobile1'];
        $mobile2 = $r['mobile2'];
        $email = $r['email'];
        $program = $r['programme'];
        $school = $r['school'];

        //issuse detail
        $issue_date = $r['Issuse_Date'];
        $return_date = $r['Return_Date'];
        $drop_date = $r['Drop_Date'];
        $days_left = $r['days']; 
                        
        echo"
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                       {$call_no}
                    </td>
                    <td>{$book}</td>
                    <td class='hidden-480'>{$isbn}</td>
                    <td>{$student}-{$admissionNo}</td>
                    <td class='hidden-480'>{$issue_date}</td>
                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='green' href='#' data-toggle='modal' data-target='#view-school-{$serial}'>
                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=affliate&submit=delete&token={$_SESSION['user-token']}&detail={$serial}&box=1&msg=1'>
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
                                    <input type='hidden' name='ui' value='library'>
                                    <input type='hidden' name='serial' value='{$serial}'>
                                    <div class='form-group'>                            
                                        <label for='recipient-name' class='form-control-label'><b>Call No#:</b> {$call_no} </label>
                                        <label for='recipient-name' class='form-control-label'><b>Accession No#:</b> {$accessionNo} </label>                            
                                    </div>
                                    <div class='form-group'>                            
                                        <label for='recipient-name' class='form-control-label'><b>Classification:</b> {$category} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>Book Title:</b> {$book} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>ISBN:</b> {$isbn} </label><br>                                            
                                    </div>
                                    <div class='form-group'> 
                                        <label for='recipient-name' class='form-control-label'><b>Student:</b> {$student} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>Admission No:</b> {$admissionNo} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>Mobile 1:</b> {$mobile1} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>Mobile 2:</b> {$mobile2} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>Email:</b> {$email} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>Programme 1:</b> {$program} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>School:</b> {$school} </label><br>                                            
                                    </div>
                                    <div class='form-group'>
                                        <label for='recipient-name' class='form-control-label'><b>Issue Date:</b> {$issue_date} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>Return Date:</b> {$return_date} </label><br>
                                        <label for='recipient-name' class='form-control-label'><b>Days Left:</b> {$days_left} </label><br>
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
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">Issue Book</button>

<div class="modal fade" id="create-school" tabindex="-1" role="dialog" aria-labelledby="create-school" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="GET" action="model.php" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <input type='hidden' name='ui' value='library'>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Issue Date </label>
                    <input type='date' name='issue-date' value='' placeholder="Date" class='form-control' id='recipient-name'>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Book Title</label>
                    <select name='book' value='' placeholder="0" class='form-control' id='recipient-name'>
                        <?php get_book_isbn_details($conn);?>
                    </select>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Student</label>
                    <select name='student' value='' placeholder="0" class='form-control' id='recipient-name'>
                        <?php  student_index_list($conn);?>
                    </select>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Return Date </label>
                    <input type='date' name='return-date' value='' placeholder="Date" class='form-control' id='recipient-name'>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" value="add-issue-book" class="btn btn-primary">Submit</button>
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
                    <th>ISBN</th>
                    <th>Student</th>
                    <th>Issue Date</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_issue_book($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>