<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 09-Mar-18
 * Time: 11:34 PM
 */


$id=$_GET['id'];
$id = substr($id , 3);
$id = ($id - 1204)/ date('Y');
$_SESSION['staff-id'] = $id;

$sql = "select * from get_staff_profile WHERE `staff_profile_ID`='$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$date = $r['employDate'];
$staffID = $r['staffID'];
$f_name = $r['f_name'];
$l_name = $r['l_name'];
$marital = $r['marital_status'];
$gender = $r['genderID'];
$nationality = $r['nationality'];
$category = $r['categoryID'];
$position = $r['positionID'];
$department = $r['departmentID'];
$email = $r['email'];
$mobile1 = $r['mobile1'];
$mobile2 = $r['mobile2'];
$ssn = $r['ssn'];
$bank = $r['bankID'];
$accName = $r['acctName'];
$acctNumber = $r['acctNumber'];
$emerge_name = $r['emerge_name'];
$emerge_phone = $r['emerge_phone'];
$emerge_email = $r['emerge_email'];
$emerge_relation = $r['emerge_relation'];
$emerge_address = $r['emerge_address'];

?>

<form class="form-horizontal" method="get" action="model.php">
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
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Marital Status:</label>

        <div class="col-xs-12 col-sm-9">
            <div>
                <label>
                    <input name="marital-status" value="1" type="checkbox" class="ace" />
                    <span class="lbl"> Single</span>
                </label>
            </div>

            <div>
                <label>
                    <input name="marital-status" value="2" type="checkbox" class="ace" />
                    <span class="lbl"> Married</span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Gender:</label>

        <div class="col-xs-12 col-sm-9">
            <div>
                <label>
                    <input name="gender" value="1"  type="checkbox" class="ace" />
                    <span class="lbl"> Male</span>
                </label>
            </div>

            <div>
                <label>
                    <input name="gender" value="2" type="checkbox" class="ace" />
                    <span class="lbl"> Female</span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Nationality:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="nationality" class="col-xs-12 col-sm-5">
                    <option class="active" value="<?php echo $nationality;?>"><?php echo $nationality;?></option>
                    <?php nationality($conn)?>
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
                    <option class="active" value="1">Teaching Staff</option>
                    <option value="2">Non-Teaching Staff</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Position:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="position" class="col-xs-12 col-sm-5">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Department:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="department" class="col-xs-12 col-sm-5">
                    <option>Male</option>
                    <option>Female</option>
                </select>
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
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Account Number:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="account-number" id="form-field-1" class="col-xs-12 col-sm-6" />
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
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Add Passport Picture:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="file" name="file" id="id-input-file-2" />
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
