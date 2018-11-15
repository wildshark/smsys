<?php

?>

<form class="form-horizontal" method="get" action="model.php">
    <input type="hidden" name="ui" value="library">
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Call No#:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="call-no" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Accession No#:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="accession-no" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Classification:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="catalog" class="col-xs-12 col-sm-5">
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
                <input type="text" id="form-field-1" name="book-title" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Subject:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="subject" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">ISBN:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="isbn" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">1st Author:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="author1" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">2nd Author:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="author2" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">3th Author:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="author3" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="hr hr-dotted"></div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Publication:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="publication" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Edition:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="edition" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1">Number of Copies:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="form-field-1" name="no-of-copies" class="col-xs-12 col-sm-5" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Collection:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select id="form-field-1" name="collection" class="col-xs-12 col-sm-5">
                    <?php cmb_library_collection($conn);?>
                </select>
            </div>
        </div>
    </div>

    
    <hr />
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit" name="submit" value="add-book">
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
