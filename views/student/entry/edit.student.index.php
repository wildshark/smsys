<?php

$id=$_GET['id'];
//$id = substr($id , 3);
//$id = ($id - 1204)/ date('Y');
$_SESSION['student-id'] = $id;

$sql="SELECT * FROM `get_new_student` WHERE admissionID='$id'";
$result=$conn->query($sql);
$r=$result->fetch_assoc();

$id = $r['admissionID'];
$f_name = $r['f_name'];
$l_name = $r['l_name'];
$admission = $r['serial_no'];
$email = $r['email'];
$mobile1 = $r['mobile1'];
$mobile2 = $r['mobile2'];
$programmeID = $r['progID'];
$programme = $r['programme'];
$nationalityID = $r['nationality'];
$nationality = $r['student_nationality'];
$year = $r['yearID'];
$category = $r['categoryID'];
$stream = $r['streaID'];
$schoolID = $r['attended'];
$examID = $r['exam_index_id'];
$result = $r['exam_result'];
$attend_year = $r['attended_year'];

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
/**
if($campus == 1){
    $campus_type = "On Campus";
}else{
    $campus_type = "Off Campus";
}
**/
?>

<form class="form-horizontal" role="form" method="POST" action="model.php" enctype="multipart/form-data">
    <input type="hidden" name="ui" value="student-admission-entry">
    <input type="hidden" name="student" value="<?php echo $id;?>">

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Serial Number </label>

        <div class="col-sm-9">
            <input type="text" name="admission-number" readonly id="form-field-1" value="<?php echo $admission;?>" placeholder="Admiaaion Number" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Academic Year </label>

        <div class="col-sm-9">
            <select name="academic-year" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $year;?>"><?php echo $year;?></option>
                <?php cmb_academic_session($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">First Name </label>

        <div class="col-sm-9">
            <input type="text" name="first-name" readonly id="form-field-1" value="<?php echo $f_name;?>" placeholder="first name" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surname </label>

        <div class="col-sm-9">
            <input type="text" name="last-name" readonly id="form-field-1" value="<?php echo $l_name;?>" placeholder="surname" class="col-xs-10 col-sm-5" />
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
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile  </label>

        <div class="col-sm-9">
            <input type="text" name="mobile-1" id="form-field-1" value="<?php echo $mobile1;?>" placeholder="mobile 1" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Home Mobile  </label>

        <div class="col-sm-9">
            <input type="text" name="mobile-2" id="form-field-1" value="<?php echo $mobile2;?>" placeholder="Mobile 2" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nationality </label>

        <div class="col-sm-9">
            <select name="nationality" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $nationalityID;?>"><?php echo $nationality;?></option>
                <?php cmb_nationality($conn);?>
            </select>
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
                <option class="active" value="<?php echo $stream;?>"><?php echo $stream_type;?></option>
                <option value="1">Regular</option>
                <option value="2">Weekend</option>
            </select>
        </div>
    </div>

     <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Attended  </label>

        <div class="col-sm-9">
            <input type="text" name="school-attended" id="form-field-1" value="<?php echo $schoolID;?>" placeholder="school attended" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Exam Index ID  </label>

        <div class="col-sm-9">
            <input type="text" name="exam-index-id" id="form-field-1" value="<?php echo $examID;?>" placeholder="Exam Index ID" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Year  </label>

        <div class="col-sm-9">
            <input type="text" name="exam-index-id" id="form-field-1" value="<?php echo $attend_year;?>" placeholder="Exam Index ID" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Result </label>

        <div class="col-sm-9">
            <textarea name="exam-result" id="form-field-1" class="col-xs-10 col-sm-5"><?php echo $result;?></textarea>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="edit-admission.index">
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
