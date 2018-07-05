<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Mar-18
 * Time: 10:39 PM
 */
?>
<form class="form-horizontal" role="form" method="post" action="model.php" enctype="multipart/form-data">
    <input type="hidden" name="ui" value="student">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">First Name </label>

        <div class="col-sm-9">
            <input type="text" name="first-name" id="form-field-1" placeholder="First Name" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Surname </label>

        <div class="col-sm-9">
            <input type="text" name="surname" id="form-field-1" placeholder="Surname" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admission Number </label>

        <div class="col-sm-9">
            <input type="text" name="admission-number" id="form-field-1" placeholder="Admission Number" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile 1 </label>

        <div class="col-sm-9">
            <input type="text" name="mobile-1" id="form-field-1" placeholder="Mobile 1" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile 2 </label>

        <div class="col-sm-9">
            <input type="text" name="mobile-2" id="form-field-1" placeholder="Mobile 2" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

        <div class="col-sm-9">
            <input type="email" name="email" id="email" placeholder="Email" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Programme </label>

        <div class="col-sm-9">
            <select name="programme" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_programme_data($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Academic Year </label>

        <div class="col-sm-9">
            <select name="year" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_academic_session($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category </label>

        <div class="col-sm-9">
            <select name="category" id="form-field-1" class="col-xs-10 col-sm-5">
                <option value="1">Local Student</option>
                <option value="2">Foreign Student</option>
            </select>

        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stream </label>

        <div class="col-sm-9">
            <select name="stream" id="form-field-1" class="col-xs-10 col-sm-5">
                <option value="1">Regular</option>
                <option value="2">Weekend</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Campus Status </label>

        <div class="col-sm-9">
            <select name="campus-status" id="form-field-1" class="col-xs-10 col-sm-5">
                <option value="1">On Campus</option>
                <option value="2">Off Campus</option>
            </select>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="passport">Add Passport Picture:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="file" name="image"/>
            </div>
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
