<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 10-May-18
 * Time: 7:52 PM
 */
$id = $_GET['detail'];
$sql = "SELECT * FROM `get_supplier_contact` WHERE supplyID='$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$_SESSION['supplier-id'] = $id;

?>
<form class="form-horizontal" method="get" action="model.php" role="form">
    <input type="hidden" name="ui" value="store-keeper">

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Name </label>

        <div class="col-sm-9">
            <input type="text" name="supplier-name" value="<?php echo $r['supplier_name'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Ref"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Mobile 1 </label>

        <div class="col-sm-9">
            <input type="number" name="mobile1" value="<?php echo $r['mobile1'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Qty"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Mobile 2 </label>

        <div class="col-sm-9">
            <input type="number" name="mobile2" value="<?php echo $r['mobile2'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Qty"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

        <div class="col-sm-9">
            <input type="email" name="email" value="<?php echo $r['email'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Qty"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Address </label>

        <div class="col-sm-9">
            <input type="text" name="address" value="<?php echo $r['address'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Qty"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="edit-supplier-contact">
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
