<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06-Mar-18
 * Time: 7:01 AM
 */

$id=$_GET['id'];
$id = substr($id , 3);
$id = ($id - 1204)/ date('Y');
$_SESSION['student-id'] = $id;

$sql="SELECT * FROM `get_student_profile_detail` WHERE studentID='$id'";
$result=$conn->query($sql);
$r=$result->fetch_assoc();

$id = $r['studentID'];
$f_name = $r['first_name'];
$l_name = $r['surname'];
$admission = $r['admissionNo'];
$email = $r['email'];
$mobile1 = $r['mobile1'];
$mobile2 = $r['mobile2'];
$programmeID = $r['progID'];
$programme = $r['programme'];
$year = $r['yearID'];
$category = $r['categoryID'];
$stream = $r['stream'];
$campus = $r['campus_status'];

if ($category == 1){
    $category_type = "Local Student";
}else{
    $category_type = "Foreign Student";
}

if($stream == 1){
    $stream_type = "Regular";
}else{
    $stream_type= "Weekend";
}

if($campus == 1){
    $campus_type = "On Campus";
}else{
    $campus_type = "Off Campus";
}
?>

<form class="form-horizontal" role="form" method="POST" action="model.php" enctype="multipart/form-data">
    <input type="hidden" name="ui" value="student">
    <input type="hidden" name="student" value="<?php echo $id;?>">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">First Name </label>

        <div class="col-sm-9">
            <input type="text" name="first-name" id="form-field-1" value="<?php echo $f_name;?>" placeholder="first name" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surname </label>

        <div class="col-sm-9">
            <input type="text" name="surname" id="form-field-1" value="<?php echo $l_name;?>" placeholder="surname" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admission Number </label>

        <div class="col-sm-9">
            <input type="text" name="admission-number" id="form-field-1" value="<?php echo $admission;?>" placeholder="Admiaaion Number" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile 1 </label>

        <div class="col-sm-9">
            <input type="text" name="mobile-1" id="form-field-1" value="<?php echo $mobile1;?>" placeholder="mobile 1" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile 2 </label>

        <div class="col-sm-9">
            <input type="text" name="mobile-2" id="form-field-1" value="<?php echo $mobile2;?>" placeholder="Mobile 2" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

        <div class="col-sm-9">
            <input type="text" name="email" id="form-field-1" value="<?php echo $email;?>" placeholder="email" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Programme </label>

        <div class="col-sm-9">
            <select name="programme" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $programmeID;?>"><?php echo $programme;?></option>
                <?php cmb_programme_data($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Academic Year </label>

        <div class="col-sm-9">
            <select name="year" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $year;?>"><?php echo $year;?></option>
                <?php cmb_academic_session($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category </label>

        <div class="col-sm-9">
            <select name="category" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $category?>"><?php echo $category_type;?></option>
                <option value="1">Local Student</option>
                <option value="2">Foreign Student</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stream </label>

        <div class="col-sm-9">
            <select name="stream" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $stream?>"><?php echo $stream_type;?></option>
                <option value="1">Regular</option>
                <option value="2">Weekend</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Campus Status </label>

        <div class="col-sm-9">
            <select name="campus-status" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $campus?>"><?php echo $campus_type;?></option>
                <option value="1">On Campus</option>
                <option value="2">Off Campus</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="update">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
            </button>

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </div>
</form>
