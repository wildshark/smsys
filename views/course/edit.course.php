<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Mar-18
 * Time: 1:25 PM
 */

$id = $_GET['id'];
$_SESSION['subject-id'] = $id;

$sql ="select * from get_course WHERE courseID = '$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$programmeID = $r['progID'];
$programme = $r['programme'];
$course = $r['course'];
$code = $r['course_code'];
$level = $r['course_level'];
$credit = $r['credit'];
$semester = $r['semesterID'];
$status = $r['statusID'];
if ($semester == 1){
    $semester_type = "1st Semester";
}else{
    $semester_type ="2nd Semester";
}

if ($status == 1){
    $status_type ="Core";
}else{
    $status_type ="Elective";
}





?>
<form class="form-horizontal" role="form" method="get" action="model.php">
    <input type="hidden" name="ui" value="course">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Programme </label>

        <div class="col-sm-9">
            <select name="programme" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $programmeID;?>"><?php echo $programme; ?></option>
                <?php cmb_school_data($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Course Title </label>

        <div class="col-sm-9">
            <input type="text" name="course-name" value="<?php echo $course;?>" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Course Code </label>

        <div class="col-sm-9">
            <input type="text" name="course-code" value="<?php echo $code;?>" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Credit Hours </label>

        <div class="col-sm-9">
            <select name="credit-hours" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $credit;?>"><?php echo $credit;?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Level </label>

        <div class="col-sm-9">
            <select name="level" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $level;?>"> <?php echo $level;?></option>
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Semester </label>

        <div class="col-sm-9">
            <select name="semester" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $semester;?>"><?php echo $semester_type;?></option>
                <?php get_list_semester($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> status </label>

        <div class="col-sm-9">
            <select name="status" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $status;?>"><?php echo $status_type;?></option>
                <option value="1"> Core</option>
                <option value="2"> Elective</option>
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
