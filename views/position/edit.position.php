<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Mar-18
 * Time: 1:25 PM
 */
$id = $_GET['detail'];
$_SESSION['position-id'] = $id;

$sql ="select * from get_position WHERE positionID = '$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$positionID = $r['positionID'];
$position = $r['position'];
$categoryID = $r['categoryID'];
$category = $r['category_name'];
$status = $r['statusId'];
if ($status == 1){
    $status = "Active";
}else{
    $status ="Passive";
}

?>
<form class="form-horizontal" role="form" method="get" action="model.php">
    <input type="hidden" name="ui" value="operation">

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Position </label>

        <div class="col-sm-9">
            <input type="text" name="position" value="<?php echo $position;?>" id="form-field-1" placeholder="position" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Department </label>

        <div class="col-sm-9">
            <select name="department" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $categoryID;?>"><?php echo $category; ?></option>
                <?php department_unit($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Position </label>

        <div class="col-sm-9">
            <input type="file" name="attach" value="" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="edit-staff-position">
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
