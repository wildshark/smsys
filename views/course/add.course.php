<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Mar-18
 * Time: 12:20 AM
 */

?>

<form class="form-horizontal" role="form" method="get" action="model.php">
    <input type="hidden" name="ui" value="course">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Programme </label>

        <div class="col-sm-9">
            <select name="programme" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_programme_data($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Course Title </label>

        <div class="col-sm-9">
            <input type="text" name="course-name" id="form-field-1" placeholder="Course Title" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Course Code </label>

        <div class="col-sm-9">
            <input type="text" name="course-code" id="form-field-1" placeholder="Course Code" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Credit Hours </label>

        <div class="col-sm-9">
            <select name="credit-hours" id="form-field-1" class="col-xs-10 col-sm-5">
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
                <?php get_list_semester($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Status </label>

        <div class="col-sm-9">
            <select name="status" id="form-field-1" class="col-xs-10 col-sm-5">
                <option value="1"> Core</option>
                <option value="2"> Elective</option>
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

