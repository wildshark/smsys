<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 12-May-18
 * Time: 11:04 AM
 */

$id = $_GET['detail'];
$sql ="SELECT * FROM `get_lecture_note` WHERE lectureID = '$id' ";
$result = $conn->query($sql);
$l = $result->fetch_assoc();


?>

<form class="form-horizontal" method="get" action="model.php"  role="form">
    <input type="hidden" name="ui" value="lecture-note">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date </label>

        <div class="col-sm-9">
            <input type="date" name="date" value="<?php echo $l['lect_date'];?>" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Semester </label>

        <div class="col-sm-9">
            <select name="semester" class="col-xs-10 col-sm-5" id="form-field-select-3">
                <option class="active" value="<?php echo $l['semesterID'];?>"><?php echo $l['calendar'];?></option>
                <?php get_list_semester($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Level </label>

        <div class="col-sm-9">
            <select name="level" class="col-xs-10 col-sm-5" id="form-field-select-3">
                <option class="active" value="<?php echo $l['levelID'];?>"><?php echo $l['levelID'];?></option>
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lecturer </label>

        <div class="col-sm-9">
            <select name="lecturer" class="col-xs-10 col-sm-5" id="form-field-select-3">
                <option class="active" value="<?php echo $l['staffID'];?>"><?php echo $l['f_name'].' '.$l['l_name'];?></option>
                <?php get_staff_lecturer($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Department </label>

        <div class="col-sm-9">
            <select name="department" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $l['departID'];?>"><?php echo $l['department'];?></option>
                <?php department($conn); ?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>

        <div class="col-sm-9">
            <input type="text" name="title" value="<?php echo $l['title'];?>" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> file </label>

        <div class="col-sm-9">
            <input type="file" name="file" value="<?php echo $l['file_path'];?>" id="id-input-file-2"  placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>


    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="update-note">
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

