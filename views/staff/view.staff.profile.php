<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 09-May-18
 * Time: 9:00 PM
 */

$id = $_GET['ui'];
$sql="SELECT * FROM get_staff_profile WHERE token = '$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$profileID = $r['staff_profile_ID'];
$_SESSION['profile-ID'] = $profileID;


if (empty($r['staffID'])){
    $staffID = "No Staff Index Number";
}else{
    $staffID = $r['staffID'];
}

if ($r['genderID'] == 1){
    $gender = "Male";
}elseif ($r['genderID'] == 2){
    $gender = "Female";
}else{
    $gender = "No Gender Type";
}

if (empty($r['countryID'])){
    $country = "No Country";
    $nationality = "No Nationality";
}else{
    $country = $r['country'];
    $nationality = $r['nationality'];
}

if (empty($r['mobile1'])){
    $mobile1 = "No Mobile Number";
}else{
    $mobile1 = $r['mobile1'];
}

if (empty($r['mobile2'])){
    $mobile2 = "No Second Mobile Number";
}else{
    $mobile2 = $r['mobile2'];
}

if (empty($r['email'])){
    $email = "No Email";
}else{
    $email = $r['email'];
}

if (empty($r['positionID'])){
    $position = "No Position";
}else{
    $position = $r['position'];
}

if (empty($r['categoryID'])){
    $category = "No Category";
}else{
    $category = $r['staff_type'];
}

if (empty($r['marital_status'])){
    $marital_status = "No Marital Status";
}else{
    $marital_status = $r['marital'];
}

if (empty($r['statusID'])){
    $status = "No Status";
}else{
    $status = $r['staff_status'];
}



if (empty($r['picture'])){
    $image = "template/assets/images/avatars/profile-pic.jpg";
}else{
   echo $image = "uploads/".$r['picture'];
    //$image = $r['picture'];
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
                            <span class="white"><?php echo $r['f_name'].' '. $r['l_name'] ?></span>
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
                    <div class="profile-info-name"> Staff ID#</div>

                    <div class="profile-info-value">
                        <span class="editable" id="admission-no"><?php echo $staffID;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Staff Name </div>

                    <div class="profile-info-value">
                        <span class="editable" id="full-name"><?php echo $r['f_name'].' '. $r['l_name']; ?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Gender </div>

                    <div class="profile-info-value">
                        <span class="editable" id="email"><?php echo $gender;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Marital Status </div>

                    <div class="profile-info-value">
                        <span class="editable" id="enroll-course"><?php echo $marital_status;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Nationality  </div>

                    <div class="profile-info-value">
                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                        <span class="editable" id="mobile1"><?php echo $nationality;?></span>
                        <span class="editable" id="mobile2"><?php echo $country;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Mobile </div>

                    <div class="profile-info-value">
                        <i class="fa fa-mobile light-orange bigger-110"></i>
                        <span class="editable" id="mobile1"><?php echo $mobile1;?></span>
                        <span class="editable" id="mobile2"><?php echo $mobile2;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Email </div>

                    <div class="profile-info-value">
                        <span class="editable" id="email"><?php echo $email;?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Position </div>

                    <div class="profile-info-value">
                        <span class="editable" id="position"><?php echo $position;?></span>
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
        </div>
    </div>

    <div class="row">
        <div class="hr hr16 dotted"></div>
        <div class="col-xs-12 col-sm-12">
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active">
                        <a data-toggle="tab" href="#qualification">
                            <i class="green ace-icon fa fa-home bigger-120"></i>
                            Qualification
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#promotion-rank">
                            <i class="green ace-icon fa fa-home bigger-120"></i>
                            Promotion & Rank
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#courses-taught">
                            <i class="green ace-icon fa fa-home bigger-120"></i>
                            Courses Taught
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#enrollment">
                            <i class="green ace-icon fa fa-home bigger-120"></i>
                            Promotion & Rank
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#examination">
                            Bank Details
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#fees-payment">
                            Salary History
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#fees-payment">
                            Leave History
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
                    <div id="qualification" class="tab-pane fade in active">
                       <div class="row">
                           <div class="col-sm-12">
                               <h4 class="pink">
                                   <i class="ace-icon fa fa-hand-o-right green"></i>
                                   <a href="#qualification-form" role="button" class="blue" data-toggle="modal"> Form Inside a Modal Box </a>
                               </h4>

                               <div class="hr hr-18 dotted hr-double"></div>
                                    <div class="widget-body">
                                   <div class="widget-main no-padding">
                                       <table class="table table-striped table-bordered table-hover">
                                           <thead class="thin-border-bottom">
                                               <tr>
                                                   <th>
                                                       <i class="ace-icon fa fa-user"></i>
                                                       Day
                                                   </th>

                                                   <th>
                                                       Time
                                                   </th>
                                                   <th class="hidden-480">Subject</th>
                                                   <th></th>
                                               </tr>
                                           </thead>

                                           <tbody>
                                                <?php staff_qualification($conn,$profileID);?>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>

                    <div id="promotion-rank" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pink">
                                    <i class="ace-icon fa fa-hand-o-right green"></i>
                                    <a href="#promotion-rank-form" role="button" class="blue" data-toggle="modal"> Form Inside a Modal Box </a>
                                </h4>

                                <div class="hr hr-18 dotted hr-double"></div>
                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="thin-border-bottom">
                                            <tr>
                                                <th>
                                                    <i class="ace-icon fa fa-user"></i>
                                                    Date
                                                </th>

                                                <th>
                                                    Promotion
                                                </th>
                                                <th class="hidden-480">Approved By</th>
                                                <th></th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <?php staff_promotion($conn,$profileID);?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="courses-taught" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pink">
                                    <i class="ace-icon fa fa-hand-o-right green"></i>
                                    <a href="#courses-taught-form" role="button" class="blue" data-toggle="modal"> Form Inside a Modal Box </a>
                                </h4>

                                <div class="hr hr-18 dotted hr-double"></div>
                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="thin-border-bottom">
                                            <tr>
                                                <th>
                                                    <i class="ace-icon fa fa-user"></i>
                                                    Code
                                                </th>

                                                <th>
                                                    Course
                                                </th>
                                                <th class="hidden-480">semester</th>
                                                <th>Day</th>
                                                <th>Time</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <?php staff_courses_taught($conn,$profileID);?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
