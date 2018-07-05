<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 09-May-18
 * Time: 6:43 PM
 */

$id = $_GET['detail'];
$sql = "SELECT * FROM `get_calendar` WHERE calendarID='$id'";
$result = $conn->query($sql);
$r= $result->fetch_assoc();

$_SESSION['calendar-ID'] = $r['calendarID'];
$year = $r['semester_year'];
$semesterID = $r['semesterID'];
$semester = $r['semester'];
$activities = $r['activities'];
$s_date = $r['start_date'];
$e_date = $r['end_date'];
?>

<form class="form-horizontal" role="form" method="get" action="model.php">
    <input type="hidden" name="ui" value="academic-calendar">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Year </label>

        <div class="col-sm-9">
            <input type="text" name="year" readonly id="form-field-1" placeholder="" value="<?php echo $year;?>" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Semester </label>

        <div class="col-sm-9">
            <select name="semester" id="form-field-1" class="col-xs-10 col-sm-5">
                <option class="active" value="<?php echo $semesterID;?>"><?php echo $semester;?></option>
                <?php cmb_academic_session($conn)?>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Activities </label>

        <div class="col-sm-9">
            <input type="text" name="activities" id="form-field-1" placeholder="Activities" VALUE="<?php echo $activities;?>" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Start Date</label>

        <div class="col-sm-9">
            <input type="date" name="start-date" id="form-field-1" placeholder="" value="<?php echo $s_date;?>" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">End Date </label>

        <div class="col-sm-9">
            <input type="date" name="end-date" value="<?php echo $e_date;?>" id="form-field-1" class="col-xs-10 col-sm-5" />
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


