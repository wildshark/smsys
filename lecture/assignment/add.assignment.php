<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 20-May-18
 * Time: 9:37 PM
 */
?>

<form class="form-horizontal" method="get" action="model.php"  role="form">
    <input type="hidden" name="ui" value="lecture-note">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date </label>

        <div class="col-sm-9">
            <input type="date" name="date" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Semester </label>

        <div class="col-sm-9">
            <select name="semester" class="col-xs-10 col-sm-5" id="form-field-select-3">
                <?php get_list_semester($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Level </label>

        <div class="col-sm-9">
            <select name="level" class="col-xs-10 col-sm-5" id="form-field-select-3">
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
                <?php get_staff_lecturer($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Question </label>

        <div class="col-sm-9">
            <textarea name="question" class="col-xs-10 col-sm-5" data-provide="markdown" data-iconlibrary="fa" rows="7" >**Markdown Editor**
            </textarea>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="add-note">
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
