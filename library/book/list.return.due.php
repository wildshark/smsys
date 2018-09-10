<?php
function get_library_book($conn){

    $sql="select * from lib_book_return_due";
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
                {$r['Call_No']}| {$r['ISBN']}
                </td>
                <td>{$r['Book_Title']}</td>
                <td class='hidden-480'>{$r['admissionNo']}|{$r['first_name']} {$r['surname']}</td>
                <td> From {$r['Issuse_Date']} TO {$r['Return_Date']}</td>
                <td class='hidden-480'>{$r['over_due']}</td>

                <td>
                    <div class='hidden-sm hidden-xs action-buttons'>
                        <a class='green' href='library.php?page=book-return-details&token={$_SESSION['user-token']}&detail={$r['IssueID']}&box=1&msg=1'>
                            <i class='ace-icon fa fa-pencil bigger-130'></i>
                        </a>
                        
                        <a class='green' href='library.php?page=edit-book&token={$_SESSION['user-token']}&detail={$r['IssueID']}&box=1&msg=1'>
                            <i class='ace-icon fa fa-pencil bigger-130'></i>
                        </a>

                        <a class='red' href='model.php?ui=library&submit=delete&token={$_SESSION['user-token']}&detail={$r['IssueID']}&box=1&msg=1'>
                            <i class='ace-icon fa fa-trash-o bigger-130'></i>
                        </a>
                    </div>
                </td>
            </tr>
            
            
            <div class='modal fade' id='create-school' tabindex='-1' role='dialog' aria-labelledby='create-school' aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                        <form method='GET' action='model.php' enctype='multipart/form-data'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>New message</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                <input type='hidden' name='ui' value='library'>
                
                                <div class='form-group'>
                                    <label for='recipient-name' class='form-control-label'> Issue Date </label>
                                    <input type='date' name='issue-date' value='' placeholder='Date' class='form-control' id='recipient-name'>
                                </div>
                
                                <div class='form-group'>
                                    <label for='recipient-name' class='form-control-label'> Book Title</label>
                                    <select name='book' value='' placeholder='0' class='form-control' id='recipient-name'>
                                        <?php get_book_isbn_details($conn);?>
                                    </select>
                                </div>
                
                                <div class='form-group'>
                                    <label for='recipient-name' class='form-control-label'> Student</label>
                                    <select name='student' value='' placeholder='0' class='form-control' id='recipient-name'>
                                        <?php  student_index_list($conn);?>
                                    </select>
                                </div>
                
                                <div class='form-group'>
                                    <label for='recipient-name' class='form-control-label'> Return Date </label>
                                    <input type='date' name='return-date' value='' placeholder='Date' class='form-control' id='recipient-name'>
                                </div>
                
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                <button type='submit' name='submit' value='add-issue-book' class='btn btn-primary'>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    ";
    }

}

?>

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
                    <th>Call No/ISBN</th>
                    <th class="hidden-480">Book Title</th>

                    <th>
                        Student
                    </th>
                    <th>Period</th>
                    <th>Over Due</th>
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