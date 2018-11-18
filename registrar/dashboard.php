<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 16/11/2018
 * Time: 2:23 PM
 */

?>
<h3 class="header smaller lighter green">Dashboard </h3>

<div class="row">
    <div class="col-xs-5">
        <p></p>
        <a href="admin.php?page=new-mail&token=<?php //echo $_SESSION['user-token'];?>&box=1&msg=1" class="btn btn-purple btn-app radius-4">
            <i class="ace-icon fa fa-users bigger-230"></i>
            New Mail
        </a>
        <a href="#" class="btn btn-primary btn-app radius-4">
            <i class="ace-icon fa fa-envelope-o bigger-230"></i>
            Pending
            <span class="badge badge-pink"><?php //echo //total_pending($conn);?></span>
        </a>

        <a href="#" class="btn btn-warning btn-app radius-4">
            <i class="ace-icon fa fa-cogs bigger-230"></i>
            Approved
            <span class="badge badge-pink"><?php //echo //total_approved($conn);?></span>
        </a>

        <a href="#" class="btn btn-success btn-app radius-4">
            <i class="ace-icon fa fa-flag bigger-230"></i>
            Complete
            <span class="badge badge-pink"><?php //echo //total_completed($conn);?></span>
        </a>

        <a href="#" class="btn btn-danger btn-app radius-4">
            <i class="ace-icon fa fa-trash-o bigger-230"></i>
            Tash
        </a>

        <a href="#" class="btn btn-primary btn-app radius-4">
            <i class="ace-icon fa fa-comments-o bigger-230"></i>
            Send SMS
            <span class="badge badge-pink">+3</span>
        </a>

        <a href="#" class="btn btn-info btn-app radius-4">
            <i class="ace-icon fa fa-envelope bigger-230"></i>
            Send Mail
        </a>

        <a href="#" class="btn btn-purple btn-app radius-4">
            <i class="ace-icon fa fa-users bigger-230"></i>
            Create User
        </a>
    </div>
    <div class="col-xs-7 infobox-container">
        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_applicant($conn);?></span>
                <div class="infobox-content">Total Applicant</div>
            </div>
        </div>

        <div class="infobox infobox-green">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_admission($conn);?></span>
                <div class="infobox-content">Total Admission</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_drop_out($conn);?></span>
                <div class="infobox-content">Total Drop-out</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_local_student_summary($conn);?></span>
                <div class="infobox-content">Local Student</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_foreign_student_summary($conn);?></span>
                <div class="infobox-content">Foreign Student</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_continuing_student($conn);?></span>
                <div class="infobox-content">Continuing Student</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_regular_student($conn);?></span>
                <div class="infobox-content">Regular Student</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_weekend_student($conn);?></span>
                <div class="infobox-content">Weekend Student</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_active_staff($conn);?></span>
                <div class="infobox-content">Total Issued</div>
            </div>
        </div>
    </div>
</div>

