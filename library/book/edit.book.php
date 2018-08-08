<?php

/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 26-Oct-17
 * Time: 6:59 AM
 */

$id=$_GET['detail'];
$sql="select * from get_lib_book WHERE BookID='$id'";
$result=$conn->query($sql);
$r=$result->fetch_assoc();

$_SESSION['book-id'] = $id;
?>


<form class="form-horizontal" method="get" action="model.php">
    <input type="hidden" name="ui" value="library">
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Call No#:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="call-no" value="<?php echo $r['Call_No'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Accession No#:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="accession-no" value="<?php echo $r['AccessionNo'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Classification:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="catalog" class="col-xs-12 col-sm-5">
                    <option class="active" value=<?php echo $r['CategoryID'];?><?php echo $r['cateno']."-".$r['details'];?></option>
                    <?php get_book_category($conn);?>
                </select>
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Title:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="book-title" value="<?php echo $r['Book_Title'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Subject:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="subject" value="<?php echo $r['Subject'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">ISBN:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="isbn" value="<?php echo $r['ISBN'];?>"  class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">1st Author:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="author1" value="<?php echo $r['Author1'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">2nd Author:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="author2" value="<?php echo $r['Author2'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">3th Author:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="author3" value="<?php echo $r['Author3'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Publication:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="publication" value="<?php echo $r['Publication'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Edition:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="edition" value="<?php echo $r['Edition'];?>"  class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Number of Copies:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="no-of-copies" value="<?php echo $r['No_Of_copies'];?>" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    
    <hr />
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="edit-book">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Update
            </button>

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </div>
</form>


