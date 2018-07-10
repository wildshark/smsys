<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01/07/2018
 * Time: 9:40 PM
 */

$id = $_GET['id'];
$sql = "SELECT * FROM get_hostel_rental WHERE rentalID = '$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$_SESSION['rental-id'] = $r['rentalID'];
$refNo = $r['refNo'];
$date = $r['tranDate'];
$group = $r['church_name'];
$address = $r['contact_address'];
$mobile1 = $r['mobile1'];
$mobile2 = $r['mobile2'];
$rentalID = $r['rental_typeID'];
$rental_type = $r['rental_type'];
$people = $r['people'];
$amount = $r['amount'];
$discount = $r['discount'];
$s_date = $r['start_date'];
$e_date = $r['end_date'];
$status = $r['statusID'];

if ($status == 1){
    $str_status = "Active";
}else{
    $str_status = "Passive";
}

?>
<form class="form-horizontal" method="post" action="model.php" role="form">
    <input type="hidden" name="ui" value="hostel">

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date</label>

        <div class="col-sm-9">
            <input type="date" name="date" value="<?php echo $date;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder=""/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Ref. Number </label>

        <div class="col-sm-9">
            <input type="text" name="ref-number" value="<?php echo $refNo;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Group Name </label>

        <div class="col-sm-9">
            <input type="text" name="name-of-group" value="<?php echo $group;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Contact Address </label>

        <div class="col-sm-9">
            <input type="text" name="contact-address" value="<?php echo $address;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Mobile 1 </label>

        <div class="col-sm-9">
            <input type="text" name="mobie-1" value="<?php echo $mobile1;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Mobile 2 </label>

        <div class="col-sm-9">
            <input type="text" name="mobile-2" value="<?php echo $mobile2;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Group Name </label>

        <div class="col-sm-9">
            <select name="rental-type" value="<?php echo $group;?>" class="col-xs-10 col-sm-5" id="form-field-1-1">
                <option value="<?php echo $rentalID;?>"><?php echo $rental_type;?></option>
                <?php get_rental_list($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Population </label>

        <div class="col-sm-9">
            <input type="number" name="population" value="<?php echo $people;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Bill Amount </label>

        <div class="col-sm-9">
            <input type="number" name="bill-amount" value="<?php echo $amount;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Discount </label>

        <div class="col-sm-9">
            <input type="number" name="discount" value="<?php echo $discount;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Start Date </label>

        <div class="col-sm-9">
            <input type="date" name="start-date" value="<?php echo $s_date;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> End Date </label>

        <div class="col-sm-9">
            <input type="date" name="end-date" value="<?php echo $e_date;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="00"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Status </label>

        <div class="col-sm-9">
            <select name="status" class="col-xs-10 col-sm-5" id="form-field-1-1">
                <option class="active" value="<?php echo $status;?>"><?php echo $str_status;?></option>
                <option value="1">Active</option>
                <option value="2">Passive</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="edit-rental">
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
