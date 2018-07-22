<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 07-Jun-18
 * Time: 7:38 PM
 */
include_once "dashboard.model.php";

?>

<div class="page-header">
	<h1>
		Hostel Dashboard
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			    overview &amp; stats
		</small>
	</h1>
</div><!-- /.page-header -->
<div class="row">
    <div class="col-sm-12">

        <div class="space-6"></div>

        <div class="infobox-container">

            <div class="infobox infobox-red">
                <div class="infobox-data">
                    <span class="infobox-data-number"><?php echo total_student_summary($conn);?></span>
                    <div class="infobox-content">Student Admission</div>
                </div>
            </div>
            
            <div class="infobox infobox-green">
                <div class="infobox-data">
                    <span class="infobox-data-number"><?php echo total_bed_summary($conn);?></span>
                    <div class="infobox-content">Total Bed(s)</div>
                </div>
            </div>

            <div class="infobox infobox-red">
                <div class="infobox-data">
                    <span class="infobox-data-number"><?php echo total_used_summary($conn);?></span>
                    <div class="infobox-content">Total Bed(s) In Use</div>
                </div>
            </div>

            <div class="infobox infobox-red">
                <div class="infobox-data">
                    <span class="infobox-data-number"><?php echo total_available_summary($conn);?></span>
                    <div class="infobox-content">Total Bed(s) Available </div>
                </div>
            </div>

            <div class="infobox infobox-red">
                <div class="infobox-data">
                    <span class="infobox-data-number"><?php echo total_room_summary($conn);?></span>
                    <div class="infobox-content">Total Room(s)</div>
                </div>
            </div>

            <div class="infobox infobox-red">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-flask"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number"><?php //echo total_issused_summary($conn);?></span>
                    <div class="infobox-content">Total Issued</div>
                </div>
            </div>

            <div class="infobox infobox-red">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-flask"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number"><?php //echo total_issused_summary($conn);?></span>
                    <div class="infobox-content">Total Issued</div>
                </div>
            </div>


            <div class="infobox infobox-red">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-flask"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number"><?php echo total_available_summary($conn);?></span>
                    <div class="infobox-content">Total Bed(s) Available </div>
                </div>
            </div>

            <div class="infobox infobox-red">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-flask"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number"><?php echo total_available_summary($conn);?></span>
                    <div class="infobox-content">Total Bed(s) Available </div>
                </div>
            </div>

            <div class="infobox infobox-red">
                <div class="infobox-icon">
                    <i class="ace-icon fa fa-flask"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number"><?php echo total_available_summary($conn);?></span>
                    <div class="infobox-content">Total Bed(s) Available </div>
                </div>
            </div>

            <div class="space-6"></div>

        </div>
        <div class="col-sm-5">
        
        </div>
    </div><!-- /.col -->

    <div class="col-sm-12">
        <h4>Headings & Paragraphs</h4>
        <hr />
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="green ace-icon fa fa-home bigger-120"></i>
                        Request
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#messages">
                        Messages
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        Dropdown &nbsp;
                        <i class="ace-icon fa fa-caret-down bigger-110 width-auto"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-info">
                        <li>
                            <a data-toggle="tab" href="#dropdown1">@fat</a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#dropdown2">@mdo</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                    <div class="widget-box transparent">
						<div class="widget-header widget-header-flat">
							<h4 class="widget-title lighter">
								<i class="ace-icon fa fa-star orange"></i>
							    <?php echo date("Y-m-d H:i:s")?>
							</h4>

							<div class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
							</div>
					</div>

					<div class="widget-body">
						<div class="widget-main no-padding">
							<table class="table table-bordered table-striped">
								<thead class="thin-border-bottom">
									<tr>
										<th>
											<i class="ace-icon fa fa-caret-right blue"></i>Item 
										</th>

										<th>
											<i class="ace-icon fa fa-caret-right blue"></i>Qty
										</th>

										<th class="hidden-480">
											<i class="ace-icon fa fa-caret-right blue"></i>status
										</th>
									</tr>
								</thead>

								<tbody>
									<tr>
									    <td>internet.com</td>

										<td>
											<small>
												<s class="red">$29.99</s>
											</small>
												<b class="green">$19.99</b>
										</td>

										<td class="hidden-480">
											<span class="label label-info arrowed-right arrowed-in">on sale</span>
										</td>
									</tr>						
								</tbody>
							</table>
						</div><!-- /.widget-main -->
					</div><!-- /.widget-body -->
				</div>

                <div id="messages" class="tab-pane fade">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                </div>

                <div id="dropdown1" class="tab-pane fade">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                </div>

                <div id="dropdown2" class="tab-pane fade">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
                </div>
            </div>
        </div>
    </div><!-- /.col -->
</div>
