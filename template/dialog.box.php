<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06-Mar-18
 * Time: 4:54 PM
 */
?>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="get" action="model.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Staff Position</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="operation">
                    <input type="text" id="form-field-1" name="position" />
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="staff-position" class="btn btn-default" >Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Start Create Stock-->
<div class="modal fade" id="create-stock" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="get" action="model.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Item</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="store-keeper">
                    <input type="text" class='form-control' id="form-field-1" name="stock-name" placeholder="Item Name" />

                </div>

                <div class="modal-footer">
                    <button type="submit" name="submit" value="create-stock" class="btn btn-primary" >Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Create Stock-->

<!--Start Create category-->
<div class="modal fade" id="create-catagory" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="get" action="model.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New category</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="store-keeper">
                    <input type="text" class='form-control' id="form-field-1" name="category-name" placeholder="Category Name" />

                </div>

                <div class="modal-footer">
                    <button type="submit" name="submit" value="add-category" class="btn btn-primary" >Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Create cataegory-->

<!--New Order Start-->
<div class='modal fade' id='add-new-order' tabindex='-1' role='dialog' aria-labelledby='create-school' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <form method='get' action='model.php'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>New message</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <input type='hidden' name='ui' value='school'>
                    <input type='hidden' name='school-code' value='{$r['schoolID']}'>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>School/Faculty Name:</label>
                        <input type='text' name='school' value='{$r['school']}' class='form-control' id='recipient-name'>
                    </div>
                    <div class='form-group'>
                        <label for='recipient-name' class='form-control-label'>Prefix:</label>
                        <input type='text' name='prefix' value='{$r['prefix']}' class='form-control' id='recipient-name'>
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='submit' name='submit' value='update' class='btn btn-primary'>Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End New Order-->

<!--Start Create Hostel Block -->
<div class="modal fade" id="create-block" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="get" action="model.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Block Name</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="hostel">
                    <input type="text" id="form-field-1" name="name" />
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="add-block" class="btn btn-default" >Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Create hostel block-->

<!--Start Form Qualification-->
<div id="qualification-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Please fill the following form fields</h4>
            </div>
            <form method="get" action="model.php" enctype="multipart/form-data">
                <input type="hidden" name="ui" value="staff-qualification">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">

                            <div class="form-group">
                                <label for="form-field-username">Year </label>

                                <div>
                                    <input type="text" name="year" id="form-field-username" placeholder="2000" value="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">

                            <div class="form-group">
                                <label for="form-field-username">School</label>

                                <div>
                                    <input type="text" name="school" id="form-field-username" placeholder="school" value="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">

                            <div class="form-group">
                                <label for="form-field-username">Qualification</label>

                                <div>
                                    <input type="text" name="qualification" id="form-field-username" placeholder="Qualification" value="" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="add" class="btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-check"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Form Qualification-->

<!--Start Form Courses Taught-->
<div id="courses-taught-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Please fill the following form fields</h4>
            </div>
            <form method="get" action="model.php" enctype="multipart/form-data">
                <input type="hidden" name="ui" value="course">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-xs-6 col-sm-6">

                            <div class="form-group">
                                <label for="form-field-select-3">Day </label>

                                <div>
                                    <select name="day">
                                        <option value="">&nbsp;</option>
                                        <?php cmb_day_list($conn);?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="form-field-select-3">Course </label>

                                <div>
                                    <select name="course">
                                        <option value="">&nbsp;</option>
                                        <?php cmd_course_list($conn);?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="form-group">
                                <label for="form-field-username">time</label>

                                <div>
                                    <input type="time" name="time" id="form-field-username" placeholder="" value="" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="add-courses-taught" class="btn btn-sm btn-primary">
                        <i class="ace-icon fa fa-check"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Form Courses Taught-->

<!-- hostel rental list-->
<div class="modal fade" id="add-rental-modal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="get" action="model.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Rental Name</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="operation">
                    <input type="text" id="form-field-1" name="rental-item" />
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="rental-item" class="btn btn-default" >Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Stop hostel rental list-->



