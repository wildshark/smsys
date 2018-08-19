<?php
include_once "modules/plugin/barcode.php";

if(!isset($_GET['detail'])){
     $id = "";
}else{
   $id = $_GET['detail'];

   $sql = "SELECT * FROM `get_student_enrollment` WHERE enrollID = '$id'";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    $date = $r['enroll_date'];
    $year = $r['yearID'];
    $admission = $r['admissionNo'];
    
    $studentID = $r['studentID'];
    $f_name = $r['first_name'];
    $l_name = $r['surname'];
    
    $programmeID = $r['progID'];
    $programme = $r['programme'];

    $semesterID = $r['semesterID'];
    $semester = $r['semester'];

    $schoolID = $r['schoolID'];
    $school = $r['school'];
    
    $level = $r['s_level'];
}

function programme_list($conn,$programmeID,$semesterID,$level){

    $sql = "SELECT * FROM `get_course` WHERE progID='$programmeID' AND semesterID='$semesterID' AND course_level='$level'";
    $result = $conn->query($sql);
    while($r = $result->fetch_assoc()){
        if ($r['statusID'] == 1){
            $css = "active";
        }elseif($r['statusID'] == 2){
            $css = "Danger";
        }
        echo"
                <tr class='{$css}'>
                    <td>{$r['course_code']}</td>
                    <td>{$r['course']}</td>
                    <td class='center'>{$r['credit']}</td>
                    <td></td>
                </tr>      
            
            ";
    }

}


?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Admission Letter</title>
        <meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="print/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="print/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="print/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="print/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="print/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="print/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="print/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    <!--Paper size A2 to A5-->
    <link rel="stylesheet" href="print/css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    </head>

    <body>
        <page size="A4">
            <div class="container">
                <div class="col-sm-9">
                    <div class="col-xs-6">
                        <div>
                            <ul class="list-unstyled  spaced">
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Student Name:</b> <?php echo $l_name ." ". $f_name;?>
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>School:</b> <?php echo $school;?>
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Programme:</b> <?php echo $programme;?>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                Contact Info
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div>
                            <ul class="list-unstyled  spaced">
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Date:</b> <?php echo $date;?>
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Academc Year:</b> <?php echo $year;?>
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Semester/Trimester:</b> <?php echo $semester;?>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                Contact Info
                                </li>
                            </ul>
                        </div>
                    </div>					
				</div>
                <div class="col-sm-8">
                    <h5>B. FINANCE OFFICE</h5>
                    <div class="col-xs-6">
                        <div>
                            <ul class="list-unstyled  spaced">
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Previous Balance on Hand:</b>
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Amount Paid#:</b> 
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Balance To Pay:</b> <?php echo $programme;?>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                Contact Info
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div>
                            <ul class="list-unstyled  spaced">
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Date:</b> <?php echo $date;?>
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Bank:</b> <?php echo $year;?>
                                </li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                    <b>Date of Payment:</b> <?php echo $semester;?>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="ace-icon fa fa-caret-right green"></i>
                                Contact Info
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                 <h5>C. SCHOOL/DEPARTMENT: COURSE REGISTRATION</h5>
                    <div class="row">                    
                        <table <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="center">Course Code</th>
                                    <th class="center">Course Title</th>
                                    <th class="center">Credit</th>
                                    <th class="center">Tick</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php programme_list($conn,$programmeID,$semesterID,$level);?>
                            </tbody>
                        </table>
                    </div>
                    <small>
                        <b>NB:</b>
                        <ul>
                            <li>I. All trailed course must be registred first.</li>
                            <li>II. Total credit should not be more than eighteen.</li>
                        </ul>
                    </small>      
                </div>
            </div> 
        </page>

        <page size="A4">
            <div class="container">
                
            </div>    
        </page>
    </body>
</html>