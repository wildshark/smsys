<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 07-Jun-18
 * Time: 10:15 AM
 */

?>

<form class="form-horizontal" role="form" method="POST" action="model.php" enctype="multipart/form-data">
    <input type="hidden" name="ui" value="file-share">
    <input type="hidden" name="student" value="">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date </label>

        <div class="col-sm-9">
            <input type="date" name="date" id="form-field-1" value="" placeholder="date" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Department </label>

        <div class="col-sm-9">
            <select name="department" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php department($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>

        <div class="col-sm-9">
            <input type="text" name="title" id="form-field-1" value="" placeholder="Admiaaion Number" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Note </label>

        <div class="col-sm-9">
            <input type="text" name="note" id="form-field-1" value="" placeholder="mobile 1" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> File </label>

        <div class="col-sm-9">
            <input type="file" name="file" id="form-field-1" value="" placeholder="mobile 1" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="submit">
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

