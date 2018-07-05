<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-May-18
 * Time: 6:20 PM
 */
?>

<form class="form-horizontal" role="form" method="get" action="model.php">
    <input type="hidden" name="ui" value="result">
    <input type="hidden" name="result" value="<?php echo $_GET['detail'];?>">
    <input type="hidden" name="year" value="<?php echo $_GET['year'];?>">
    <input type="hidden" name="semester" value="<?php echo $_GET['calendar'];?>">
    <input type="hidden" name="course" value="<?php echo $_GET['course'];?>">
    <input type="hidden" name="level" value="<?php echo $_GET['level'];?>">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Student</label>

        <div class="col-sm-9">
            <select name="student" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php student_index_list($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Case Study </label>

        <div class="col-sm-9">
            <input type="text" name="case-study" id="form-field-1" placeholder="0.00" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Group Work </label>

        <div class="col-sm-9">
            <input type="text" name="group-work" id="form-field-1" placeholder="0.00" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Class Presentation </label>

        <div class="col-sm-9">
            <input type="text" name="presentation" id="form-field-1" placeholder="0.00" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Final Examination </label>

        <div class="col-sm-9">
            <input type="text" name="examination" id="form-field-1" placeholder="0.00" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="add-marks">
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