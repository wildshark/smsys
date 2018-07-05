<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Mar-18
 * Time: 5:13 PM
 */
?>

<form class="form-horizontal" method="post" action="model.php" enctype="multipart/form-data">
    <input type="hidden" name="ui" value="staff">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Employ Date:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="date" id="form-field-1" name="employ-date" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Staff ID:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="staff-id" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">First Name:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="first-name" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Surname:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="surname" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Marital Status: </label>

        <div class="col-sm-9">
            <select name="marital-status" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_marital_status($conn);?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gender </label>

        <div class="col-sm-9">
            <select name="gender" id="form-field-1" class="col-xs-10 col-sm-5">
                <?php cmb_gender_status($conn);?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Nationality:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="nationality" class="col-xs-12 col-sm-5">
                    <?php cmb_nationality($conn);?>
                </select>
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Staff Category:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="staff-category" class="col-xs-12 col-sm-5">
                    <?php cmb_staff_category($conn);?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Position:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="position" class="col-xs-12 col-sm-5">
                   <?php position($conn);?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Department:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="department" class="col-xs-12 col-sm-5">
                    <?php department($conn);?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Working Status:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="working-status" class="col-xs-12 col-sm-5">
                    <?php cmb_working_status($conn);?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Area of Specialization:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="aos" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Personal Mobile:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="input-group">
								<span class="input-group-addon">
									<i class="ace-icon fa fa-phone"></i>
								</span>

                <input type="tel" id="phone" name="personal-mobile" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Home Mobile:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="input-group">
								<span class="input-group-addon">
									<i class="ace-icon fa fa-phone"></i>
								</span>

                <input type="tel" id="phone" name="home-mobile" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">SSN :</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="ssn" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Bank Name:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="bank-name" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Account Name:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="account-name" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Account Number:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="account-number" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>
    <h4>Emerge</h4>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Name:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="emerge-name" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Mobile:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="emerge-mobile" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="emerge-email" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Relationship:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="emerge-relation" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Address:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="emerge-address" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Username:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="username" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Password:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="password" name="password" id="form-field-1" class="col-xs-12 col-sm-6" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Access:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="access" class="col-xs-12 col-sm-5">
                    <?php cmb_access_id($conn);?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Status:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="status" class="col-xs-12 col-sm-5">
                    <?php cmb_staff_status($conn);?>
                </select>
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Add Passport Picture:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="file" name="image"/>
            </div>
        </div>
    </div>
    <hr />
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