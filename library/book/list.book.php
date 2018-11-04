<?php
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
                        <a class='green' href='library.php?page=edit-book&token={$_SESSION['user-token']}&detail={$r['BookID']}&box=1&msg=1'>
                            <i class='ace-icon fa fa-pencil bigger-130'></i>
                        </a>

                        <a class='red' href='model.php?ui=library&submit=delete&token={$_SESSION['user-token']}&detail={$r['BookID']}&box=1&msg=1'>
                            <i class='ace-icon fa fa-trash-o bigger-130'></i>
                        </a>
                    </div>
                </td>
            </tr>
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