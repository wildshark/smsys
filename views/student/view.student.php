<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 15-May-18
 * Time: 3:30 PM
 */

$id=$_GET['id'];
$id = substr($id , 3);
$id = ($id - 1204)/ date('Y');
$_SESSION['student-id'] = $id;

$sql = "SELECT * FROM `get_student_profile_detail` WHERE studentID = '$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

if (empty($r['admissionNo'])){
    $admission_no = "No Index Number";
}else{

    $admission_no = $r['admissionNo'];
}

if ($r['mobile1'] == 0){
    $mobile_1 = "No mobile line";
}elseif (empty($r['mobile1'])){
    $mobile_1 = "No mobile line";
}else{
    $mobile_1 =$r['mobile1'];
}

if ($r['mobile2'] == 0){
    $mobile_2 = "No mobile line";
}elseif (empty($r['mobile2'])){
    $mobile_2 = "No mobile line";
}else{
    $mobile_2 =$r['mobile2'];
}

if (empty($r['email'])){
    $email = "No email";
}else{
    $email = $r['email'];
}

if (empty($r['admissionYr'])){
    $year = "No Academic Year";
}else{
    $year = $r['admissionYr'];
}

if (empty($r['course'])){
    $course ="No Course";
}else{
    $course = $r['course'];
}

if (empty($r['categoryID'])){
    $category = "No Student Category";
}elseif ($r['categoryID'] == 1){
    $category = "Rec";
}else{
    $category = "weekend";
}

if(empty($r['statusID'])){
    $status = "No Status";
}else{
    $status = $r['statusID'];
}

if (empty($r['picture'])){
    $image = "template/assets/images/avatars/profile-pic.jpg";
}else{
    //$image = "uploads/".$r['picture'];
    $image = $r['picture'];
}

?>
<div>
    <div id="user-profile-1" class="user-profile row">
        <div class="col-xs-12 col-sm-3 center">
            <div>
				<span class="profile-picture">
                    <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo $image;?>" />
				</span>

                <div class="space-4"></div>

                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                    <div class="inline position-relative">
                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                            <i class="ace-icon fa fa-circle light-green"></i>
                            &nbsp;
                            <span class="white"><?php echo $r['first_name'].' '. $r['surname'] ?></span>
                        </a>

                        <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                            <li class="dropdown-header"> Change Status </li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle green"></i>
                                    &nbsp;
                                    <span class="green">Available</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle red"></i>
                                    &nbsp;
                                    <span class="red">Busy</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle grey"></i>
                                    &nbsp;
                                    <span class="grey">Invisible</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-9">
            <div class="profile-user-info profile-user-info-striped">
                <div class="profile-info-row">
                    <div class="profile-info-name"> Student Name </div>

                    <div class="profile-info-value">
                        <span class="editable" id="full-name"><?php echo $r['first_name'].' '. $r['surname']; ?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Admission No </div>

                    <div class="profile-info-value">
                        <span class="editable" id="admission-no"><?php echo $admission_no;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Mobile </div>

                    <div class="profile-info-value">
                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                        <span class="editable" id="mobile1"><?php echo $mobile_1;?></span>
                        <span class="editable" id="mobile2"><?php echo $mobile_2;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Email </div>

                    <div class="profile-info-value">
                        <span class="editable" id="email"><?php echo $email;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Academic Year </div>

                    <div class="profile-info-value">
                        <span class="editable" id="academic"><?php echo $year;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Enroll Course </div>

                    <div class="profile-info-value">
                        <span class="editable" id="enroll-course"><?php echo $course;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Student Category  </div>

                    <div class="profile-info-value">
                        <span class="editable" id="student-category"><?php echo $category;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Student Status  </div>

                    <div class="profile-info-value">
                        <span class="editable" id="student-category"><?php echo $status;?></span>
                    </div>
                </div>

            </div>


            <div class="center">
                <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                    <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                    <span class="bigger-110">View more activities</span>

                    <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="hr hr16 dotted"></div>
        <div class="col-xs-12 col-sm-12">
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active">
                        <a data-toggle="tab" href="#enrollment">
                            <i class="green ace-icon fa fa-home bigger-120"></i>
                            Enrollment
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#examination">
                           Examination Result
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#fees-payment">
                            Fees Payment
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#medical-report">
                            Medical Report
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#messages">
                            Complain & Cases
                        </a>
                    </li>


                </ul>

                <div class="tab-content">
                    <div id="enrollment" class="tab-pane fade in active">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>Date</th>
                                <th>Academic Year(s)</th>
                                <th class="hidden-480">Semester</th>

                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Student
                                </th>
                                <th class="hidden-480">Course</th>

                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php student_profile_enrollment($conn,$id);?>
                            </tbody>
                        </table>
                    </div>

                    <div id="examination" class="tab-pane fade">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>Date</th>
                                <th>Academic Year</th>
                                <th class="hidden-480">Semester</th>

                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    GP
                                </th>
                                <th class="hidden-480">Remark</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php //enrollment($conn,$id);?>
                            </tbody>
                        </table>
                    </div>

                    <div id="fees-payment" class="tab-pane fade">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>Academic Year</th>
                                <th class="hidden-480">Semester</th>

                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Fees
                                </th>
                                <th class="hidden-480">Total Payment</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php //enrollment($conn,$id);?>
                            </tbody>
                        </table>
                    </div>

                    <div id="medical-report" class="tab-pane fade">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>Academic Year</th>
                                <th class="hidden-480">Semester</th>

                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Type
                                </th>
                                <th class="hidden-480">Treatment status</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php //enrollment($conn,$id);?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
