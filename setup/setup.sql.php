<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 20-Jun-18
 * Time: 8:04 AM
 */

?>


<form class="form-horizontal" role="form" method="post" action="model.php" enctype="multipart/form-data">
    <input type="hidden" name="ui" value="sql-setup-text">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">SQL Code </label>
        <div class="col-sm-12">
        <textarea name="sql-code" class="col-xs-12 col-sm-12">
        </textarea>
        </div>
    </div>

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
