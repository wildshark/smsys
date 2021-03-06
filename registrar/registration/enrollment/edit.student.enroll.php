<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 19-May-18
 * Time: 10:28 PM
 */

$id = $_GET['detail'];
$sql ="select * from get_student_enrollment WHERE enrollID ='$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$_SESSION['enroll-id'] = $id;

If (empty($r['admissionNo'])){
    $student = "No Index Number-".$r['first_name']." ".$r['surname'];
}else{
    $student = $r['admissionNo']."-".$r['first_name']." ".$r['surname'];
}
?>


<form class="form-horizontal" role="form" method="GET" action="model.php" enctype="multipart/form-data">
    <input type="hidden" name="ui" value="enrollment">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date </label>

        <div class="col-sm-9">
            <input type="date" readonly name="date" value="<?php echo $r['enroll_date'];?>" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Student </label>

        <div class="col-sm-9">
            <select name="student" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $r['studentID'];?>"><?php echo $student;?></option>
                <?php student_index_list($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Semester </label>

        <div class="col-sm-9">
            <select name="semester" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $r['semesterID'];?>"><?php echo $r['semester']?></option>
                <?php get_list_semester($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Academic Year </label>

        <div class="col-sm-9">
            <select name="academic-year" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $r['yearID'];?>"><?php echo $r['yearID'];?></option>
                <?php cmb_academic_session($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course </label>

        <div class="col-sm-9">
            <select name="course" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $r['progID'];?>"><?php echo $r['programme'];?></option>
                <?php cmb_programme_data($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>
    
    <div class="form-group">
        <label for="recipient-name" class="form-control-label">Level:</label>
        <select name="programme-level" id="form-field-1" class="form-control">
            <option class="active" value="<?php echo $r['s_level']?>"><?php echo $r['s_level']?></option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
            <option value="400">400</option>
        </select>
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
