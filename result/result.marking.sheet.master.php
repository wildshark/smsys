<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-May-18
 * Time: 4:39 PM
 */

?>

<form class="form-horizontal" role="form" method="get" action="model.php">
    <input type="hidden" name="ui" value="result">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date </label>

        <div class="col-sm-9">
            <input type="date" name="date" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Year </label>

        <div class="col-sm-9">
            <select name="year" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_academic_session($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Semester </label>

        <div class="col-sm-9">
            <select name="semester" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php get_list_semester($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Level </label>

        <div class="col-sm-9">
            <select name="level" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="100">100</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Course </label>

        <div class="col-sm-9">
            <select name="course" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_course($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">School </label>

        <div class="col-sm-9">
            <select name="school" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_school_data($conn); ?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lecture </label>

        <div class="col-sm-9">
            <select name="lecture" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php get_staff_lecturer($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="add">
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
