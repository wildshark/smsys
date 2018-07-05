<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 11-May-18
 * Time: 12:03 PM
 */
?>

<form class="form-horizontal" method="get" action="model.php" role="form">
    <input type="hidden" name="ui" value="hostel">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date </label>

        <div class="col-sm-9">
            <input type="date" name="date" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Room </label>

        <div class="col-sm-9">
            <select name="room" class="col-xs-10 col-sm-5" id="form-field-select-1">
                <?php stock_list($conn);?>
                <select/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Student</label>

        <div class="col-sm-9">
            <select name="student" class="col-xs-10 col-sm-5" id="form-field-select-1">
                <?php student_index_list($conn);?>
                <select/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Receipt Ref-No# </label>

        <div class="col-sm-9">
            <input type="text" name="ref-no" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Ref-No"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Book In </label>

        <div class="col-sm-9">
            <input type="date" name="book-in" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder=""/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="add-booking">
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

