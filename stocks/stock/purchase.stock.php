<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 10-May-18
 * Time: 7:52 PM
 */
?>
<form class="form-horizontal" method="get" action="model.php" role="form">
    <input type="hidden" name="ui" value="store-keeper">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date </label>

        <div class="col-sm-9">
            <input type="date" name="date" id="form-field-1" placeholder="order" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Purchase </label>

        <div class="col-sm-9">
            <select name="purchase" class="col-xs-10 col-sm-5" id="form-field-select-1">
                <?php stock_list($conn)?>
                <select/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Ref# </label>

        <div class="col-sm-9">
            <input type="text" name="ref" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Ref"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Qty </label>

        <div class="col-sm-9">
            <input type="number" name="qty" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Qty"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="add-purchase">
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
