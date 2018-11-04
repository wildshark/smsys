<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 07-Jun-18
 * Time: 7:38 PM
 */
include_once "model/dashboard.module";
?>
<h3 class="header smaller lighter green">Dashboard </h3>

<div class="row">
    <div class="col-xs-5">
        <p></p>
        <a href="admin.php?page=new-mail&token=<?php //echo $_SESSION['user-token'];?>&box=1&msg=1" class="btn btn-purple btn-app radius-4">
            <i class="ace-icon fa fa-users bigger-230"></i>
            New Mail
        </a>
        <a href="#" class="btn btn-primary btn-app radius-4">
            <i class="ace-icon fa fa-envelope-o bigger-230"></i>
            Pending
            <span class="badge badge-pink"><?php //echo //total_pending($conn);?></span>
        </a>

        <a href="#" class="btn btn-warning btn-app radius-4">
            <i class="ace-icon fa fa-cogs bigger-230"></i>
            Approved
            <span class="badge badge-pink"><?php //echo //total_approved($conn);?></span>
        </a>

        <a href="#" class="btn btn-success btn-app radius-4">
            <i class="ace-icon fa fa-flag bigger-230"></i>
            Complete
            <span class="badge badge-pink"><?php //echo //total_completed($conn);?></span>
        </a>

        <a href="#" class="btn btn-danger btn-app radius-4">
            <i class="ace-icon fa fa-trash-o bigger-230"></i>
            Tash
        </a>

        <a href="#" class="btn btn-primary btn-app radius-4">
            <i class="ace-icon fa fa-comments-o bigger-230"></i>
            Send SMS
            <span class="badge badge-pink">+3</span>
        </a>

        <a href="#" class="btn btn-info btn-app radius-4">
            <i class="ace-icon fa fa-envelope bigger-230"></i>
            Send Mail
        </a>

        <a href="#" class="btn btn-purple btn-app radius-4">
            <i class="ace-icon fa fa-users bigger-230"></i>
            Create User
        </a>
    </div>
    <div class="col-xs-7 infobox-container">

        <div class="infobox infobox-green">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_book($conn);?></span>
                <div class="infobox-content">Total Book</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_book_issued($conn);?></span>
                <div class="infobox-content">Total Book Issued</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_book_return($conn);?></span>
                <div class="infobox-content">Total Book return</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo due_for_return($conn);?></span>
                <div class="infobox-content">Due for Return</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo over_due_for_return($conn);?></span>
                <div class="infobox-content">Over Due for Return</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_student_admission($conn);?></span>
                <div class="infobox-content">Total Applicant</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php echo total_categories($conn);?></span>
                <div class="infobox-content">Classification</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php //echo total_weekend_student($conn);?></span>
                <div class="infobox-content">Weekend Student</div>
            </div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-data">
                <span class="infobox-data-number"><?php //echo total_active_staff($conn);?></span>
                <div class="infobox-content">Total Issued</div>
            </div>
        </div>
    </div>
</div>

<hr />
<div class="vspace-6-sm"></div>

<div class="row">
    <div class="col-sm-12">
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#book-issued">
                        <i class="green ace-icon fa fa-home bigger-120"></i>
                        Book Issued
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#due-for-return">
                        Due for Return
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#over-due-for-return">
                        Over Due for Return
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="book-issued" class="tab-pane fade in active">
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th class="detail-col">Details</th>
                            <th>Domain</th>
                            <th>Price</th>
                            <th class="hidden-480">Clicks</th>

                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                Update
                            </th>
                            <th class="hidden-480">Status</th>

                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">ace.com</a>
                            </td>
                            <td>$45</td>
                            <td class="hidden-480">3,330</td>
                            <td>Feb 12</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning">Expiring</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">base.com</a>
                            </td>
                            <td>$35</td>
                            <td class="hidden-480">2,595</td>
                            <td>Feb 18</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-success">Registered</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">max.com</a>
                            </td>
                            <td>$60</td>
                            <td class="hidden-480">4,400</td>
                            <td>Mar 11</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning">Expiring</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">best.com</a>
                            </td>
                            <td>$75</td>
                            <td class="hidden-480">6,500</td>
                            <td>Apr 03</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">pro.com</a>
                            </td>
                            <td>$55</td>
                            <td class="hidden-480">4,250</td>
                            <td>Jan 21</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-success">Registered</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="due-for-return" class="tab-pane fade">
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th class="detail-col">Details</th>
                            <th>Domain</th>
                            <th>Price</th>
                            <th class="hidden-480">Clicks</th>

                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                Update
                            </th>
                            <th class="hidden-480">Status</th>

                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">ace.com</a>
                            </td>
                            <td>$45</td>
                            <td class="hidden-480">3,330</td>
                            <td>Feb 12</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning">Expiring</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">base.com</a>
                            </td>
                            <td>$35</td>
                            <td class="hidden-480">2,595</td>
                            <td>Feb 18</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-success">Registered</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">max.com</a>
                            </td>
                            <td>$60</td>
                            <td class="hidden-480">4,400</td>
                            <td>Mar 11</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning">Expiring</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">best.com</a>
                            </td>
                            <td>$75</td>
                            <td class="hidden-480">6,500</td>
                            <td>Apr 03</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">pro.com</a>
                            </td>
                            <td>$55</td>
                            <td class="hidden-480">4,250</td>
                            <td>Jan 21</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-success">Registered</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="over-due-for-return" class="tab-pane fade">
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th class="detail-col">Details</th>
                            <th>Domain</th>
                            <th>Price</th>
                            <th class="hidden-480">Clicks</th>

                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                Update
                            </th>
                            <th class="hidden-480">Status</th>

                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">ace.com</a>
                            </td>
                            <td>$45</td>
                            <td class="hidden-480">3,330</td>
                            <td>Feb 12</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning">Expiring</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">base.com</a>
                            </td>
                            <td>$35</td>
                            <td class="hidden-480">2,595</td>
                            <td>Feb 18</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-success">Registered</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">max.com</a>
                            </td>
                            <td>$60</td>
                            <td class="hidden-480">4,400</td>
                            <td>Mar 11</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning">Expiring</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">best.com</a>
                            </td>
                            <td>$75</td>
                            <td class="hidden-480">6,500</td>
                            <td>Apr 03</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                <div class="action-buttons">
                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                        <span class="sr-only">Details</span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="#">pro.com</a>
                            </td>
                            <td>$55</td>
                            <td class="hidden-480">4,250</td>
                            <td>Jan 21</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-success">Registered</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="detail-row">
                            <td colspan="8">
                                <div class="table-detail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="text-center">
                                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                <br />
                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a class="user-title-label" href="#">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-7">
                                            <div class="space visible-xs"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Username </div>

                                                    <div class="profile-info-value">
                                                        <span>alexdoe</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands, Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>38</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>3 hours ago</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> About Me </div>

                                                    <div class="profile-info-value">
                                                        <span>Bio</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                </fieldset>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                    </label>

                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="dropdown2" class="tab-pane fade">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
                </div>
            </div>
        </div>
    </div><!-- /.col -->
</div>

