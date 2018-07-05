<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 07-Jun-18
 * Time: 10:14 AM
 */
function file_share_list($conn){

    $sql = "select * from get_data_bank";
    $result = $conn->query($sql);
    while ($r = $result->fetch_assoc()) {
        echo"
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                        <a href='#'>{$r['date']}'</a>
                    </td>
                    <td>{$r['title']}</td>
                    <td class='hidden-480'>{$r['departID']}</td>
                    <td>{$r['file_seize']}</td>
                  
                    <td class='hidden-480'>
                        <span class='label label-sm label-warning'>{$r['departID']}</span>
                    </td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='blue' href='{$r['file_path']}'>
                                <i class='ace-icon fa  fa-cloud-download bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=file-share&submit=del.file-share&file={$r['shareID']}'>
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
                    <th>Date</th>
                    <th class="hidden-480"> Title</th>
                    <th>File Type</th>
                    <th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>File Size</th>
                    <th>DepartID</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?php file_share_list($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

