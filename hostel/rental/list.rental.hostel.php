<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 20-Jun-18
 * Time: 3:26 PM
 */

function get_hostel_rental_details($conn){

    $sql='SELECT * FROM get_hostel_rental';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        if ($r['proofID'] == 1){
            $color = "";
            $approved = "";
        }elseif ($r['proofID']){
            $color = "red";
            $approved = " <i class='ace-icon red fa fa-check-square-o bigger-130'></i>";
        }

        echo "
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td class='{$color}'>
                        {$r['serial_no']}
                    </td>
                    <td class='{$color}'>{$r['student']}</td>
                    <td class='hidden-480 {$color}'>{$r['mobile']}</td>
                    <td class='{$color}'>{$r['yearID']}</td>

                    <td class='hidden-480 {$color}'>
                        {$r['programme']} | {$r['prefix']} {$approved}
                    </td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='blue' href='page.php?page=view-student-admission&id={$r['admissionID'] }&box=1&msg=1'>
                                <i class='ace-icon fa fa-search-plus bigger-130'></i>
                            </a>

                            <a class='green' href='page.php?page=edit-student-admission&id={$r['admissionID'] }&box=1&msg=1'>
                                <i class='ace-icon fa fa-pencil bigger-130'></i>
                            </a>

                            <a class='red' href='#'>
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
                    <th class="hidden-480"> Admission No#</th>
                    <th>Student Name</th>
                    <th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Room</th>
                    <th>Book In</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_hostel_rental_details($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

