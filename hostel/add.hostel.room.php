<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 11-May-18
 * Time: 12:02 PM
 */
?>


<form class="form-horizontal" method="get" action="model.php" role="form">
    <input type="hidden" name="ui" value="hostel">

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Block label </label>

        <div class="col-sm-9">
            <select name="block" class="col-xs-10 col-sm-5" id="form-field-select-1">
                <?php hostel_block_list($conn);?>
            <select/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Room label</label>

        <div class="col-sm-9">
            <input type="text" name="room" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Room"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Number of bed </label>

        <div class="col-sm-9">
            <input type="number" name="number-bed" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="add-room">
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