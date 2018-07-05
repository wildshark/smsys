<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 16-May-18
 * Time: 7:30 PM
 */
?>


<form class="form-horizontal" role="form" method="GET" action="model.php" enctype="multipart/form-data">
    <input type="hidden" name="ui" value="enrollment">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date </label>

        <div class="col-sm-9">
            <input type="date" name="date" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Student </label>

        <div class="col-sm-9">
            <select name="student" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php student_index_list($conn);?>
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
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Academic Year </label>

        <div class="col-sm-9">
            <select name="academic-year" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_academic_session($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course </label>

        <div class="col-sm-9">
            <select name="course" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_programme_data($conn);?>
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
