<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06-Mar-18
 * Time: 8:12 AM
 */

$id=$_GET['detail'];
//$id = substr($id , 3);
//$id = ($id - 1204)/ date('Y');
$_SESSION['programme-id'] = $id;

$sql="SELECT * FROM `get_programme` WHERE progID='$id'";
$result=$conn->query($sql);
$r=$result->fetch_assoc();

$programme = $r['programme'];
$schoolID = $r['schoolID'];
$school = $r['school'];
$prefix = $r['prog_prefix'];
$duration = $r['prog_year'];
$status = $r['statusID'];

if ($status == 1){
    $status_label = "Active";

}elseif ($status == 2){
    $status_label = "Passive";
}

?>
<form class="form-horizontal" role="form" method="get" action="model.php">
    <input type="hidden" name="ui" value="programme">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">School </label>

        <div class="col-sm-9">
            <select name="school" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $schoolID;?>"><?php echo $school;?></option>
                <?php cmb_school_data($conn);?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Programme Title </label>

        <div class="col-sm-9">
            <input type="text" name="programme" value="<?php echo $programme;?>" id="form-field-1" placeholder="Programme Title" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Programme Prefix </label>

        <div class="col-sm-9">
            <input type="text" name="programme-prefix" value="<?php echo $prefix;?>" id="form-field-1" placeholder="Programme Title" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Programme Year(s) Duration</label>

        <div class="col-sm-9">
            <input type="text" name="programme-year" value="<?php echo $duration;?>" id="form-field-1" placeholder="Programme Year(s) Duration" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Status </label>

        <div class="col-sm-9">
            <select name="status" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $status ?>"><?php echo $status_label;?></option>
                <option value="1">Active</option>
                <option value="2">Passive</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="update">
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
