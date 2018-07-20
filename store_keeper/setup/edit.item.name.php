<?php

$id = $_GET['detail'];

$sql = "SELECT * FROM get_stock_list WHERE stockID='$id'";
$result = $conn->query($sql);
$r = $result->fetch_assoc();

$_SESSION['item-id'] = $id;
$category = $r['categoryID'];
$item = $r['stock'];
$code = $r['code_no'];
$category_name = $r['category_name'];

?>

<form class="form-horizontal" method="get" action="model.php" role="form">
    <input type="hidden" name="ui" value="store-keeper">

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category</label>

        <div class="col-sm-9">
            <select name="category" class="col-xs-10 col-sm-5" id="form-field-select-1">
                <option class='active' value='<?php echo $category;?>'><?php echo $category_name;?></option>
                <?php cmb_stock_category($conn);?>
            <select/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Item Code </label>

        <div class="col-sm-9">
            <input type="text" name="item-code" value='<?php echo $code;?>' class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Ref"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Item Name </label>

        <div class="col-sm-9">
            <input type="text" name="item-name" value="<?php echo $item;?>" class="col-xs-10 col-sm-5" id="form-field-1-1" placeholder="Qty"/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Status </label>

        <div class="col-sm-9">
            <select name="status" class="col-xs-10 col-sm-5" id="form-field-select-1">
                <option  value='1'>Enable</option>
                <option  value='2'>Disable</option>
            <select/>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="edit-item-name">
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
