<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 11-May-18
 * Time: 7:15 PM
 */

$id = $_GET['detail'];

$edit ="SELECT * FROM `get_hostel_booking` WHERE userID = '$id'";
$result = $conn->query($edit);
$r = $result->fetch_assoc();

$_SESSION['row-id']= $id;

?>
<form class="form-horizontal" method="get" action="model.php" role="form">
    <input type="hidden" name="ui" value="hostel">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date </label>

        <div class="col-sm-9">
            <input type="text" readonly name="date" VALUE="<?php echo $r['date'];?>" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Room </label>

        <div class="col-sm-9">
            <select name="room" class="col-xs-10 col-sm-5" id="form-field-select-1">
                <option value="<?php echo $r['roomID'];?>"><?php echo $r['room'];?></option>
                <?php stock_list($conn);?>
                <select/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Student</label>

        <div class="col-sm-9">
            <input type="text" name="name" readonly value="<?php echo $r['first_name']." ".$r['surname'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder=""/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Receipt Ref-No# </label>

        <div class="col-sm-9">
            <input type="text" name="ref-no" value="<?php echo $r['ref_no'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Ref-No"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Book In </label>

        <div class="col-sm-9">
            <input type="date" name="book-in"  value="<?php echo $r['book_in'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder=""/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Book Out </label>

        <div class="col-sm-9">
            <input type="date" name="book-out"  value="<?php echo $r['book_out'];?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder=""/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="update-booking">
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
