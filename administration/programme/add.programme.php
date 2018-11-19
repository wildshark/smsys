<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06-Mar-18
 * Time: 8:12 AM
 */

?>
<form class="form-horizontal" role="form" method="get" action="model.php">
    <input type="hidden" name="ui" value="programme">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">School </label>

        <div class="col-sm-9">
            <select name="school" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5">
                <?php cmb_school_data($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Programme Title </label>

        <div class="col-sm-9">
            <input type="text" name="programme" id="form-field-1" placeholder="Programme Title" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Status </label>

        <div class="col-sm-9">
            <select name="status" id="form-field-1" class="col-xs-10 col-sm-5">
                <option value="1">Active</option>
                <option value="2">Passive</option>
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
