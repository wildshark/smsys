<?php
include_once "modules/plugin/barcode.php";

if(!isset($_GET['id'])){
     $id = "";
}else{
   $id = $_GET['id'];

   $sql = "SELECT * FROM `get_new_student` WHERE admissionID = '$id'";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    $serial = $r['serial_no'];
    $f_name = $r['f_name'];
    $l_name = $r['l_name'];
    $programme = $r['programme'];
    $prog_yr = $r['prog_year'];
    $mobile1 = $r['mobile1'];
    $mobile2 = $r['mobile2'];
    $nationality = $r['student_nationality'];
    $school = $r['school'];
    $schoolID = $r['schoolID'];
    $year = $r['yearID'];
    $application = $r['application'];
    $affliate = $r['affliate'];
    $affliateID = $r['affliateID'];

    if ($schoolID == 4){
        $section ="<li>The admission is on condition that you successfully register with <b>{$affliate}</b> as its professional student and that you are in 
        a position to financially support your studies at the College and consequently pay your fees as and when they are due.</li>";
    }else{
        $section ="<li>The admission is on condition that our Mentoring Institute <b>{$affliate}</b> confirms it and also that you are in a position to financially support your studies at the College and consequently pay your fees as and when they are due.</li>";
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Admission Letter</title>
    <!--Paper size A2 to A5-->
    <link rel="stylesheet" href="print/css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    </head>

    <body>
        <page size="A4">
            <div class="container">
        
            Date of Admission letter<br>
                Address of Applicant<br>

                Dear <?php echo  $f_name ." ". $l_name;?>.<br>
                <p>
                    <b>OFFER OF ADMISSION LETTER - <?php echo $year;?> ACADEMIC  YEAR</b>
                </P>

                <p>
                    <b>SCHOOL APPLIED FOR ( <?php echo strtoupper($school);?> )</b>
                </P>

                <p>
                    We write on behalf of the President to inform you of your admission to Ghana Christian 
                    University College as <?php echo ucwords($application);?> Student for the <b><?php echo $prog_yr;?>, 
                    <?php echo $programme;?></b> starting from the first/second semester of 2018/2019 
                    academic year which will begin (resumption date).
                </p>
                <h4>1.	Conditions</h4>
                <p>
                    <ul>
                        <li>As part of your registration and orientation programme you will undergo a medical examination to determine your health status.</li>
                        <li>Your Temporary reference number which is to facilitate your registration in is <b><?php echo $serial;?></b> and your mode of study is <b><?php echo $school;?></b>.</li>
                        <?php echo $section;?>
                        <li>The offer is also on condition that all  the academic  credentials given by you are true and can stand any verification that may be conducted by the College in  the course of your studies and that should they turn to be untrue, you will accept to be dealt with in accordance with the College’s Statutes, regulations etc.</li>
                        <li>You will be on probation for the full duration of your studies and may be withdrawn at any time for non-payment of fees, unsatisfactory academic work or any misconduct. The calls for strict adherence to the College’s rules and regulations.</li>
                        <li>You will abide by the Academic Covenant to be given and Student’s undertaking to be completed on the day of Registration.</li>
                        <li>Before the commencement of the course either you or the University shall reserve the right to change it depending on the prevailing circumstances at time.</li>
                    </ul>
                </p>
            </div>
        </page>

        <page size="A4">
            <div class="container">
                <h4>2.	Registration</h4>
                    <p>
                    We are expecting you to report on campus from (date of registration) to undergo the Registration processes and begin classes with following items:
                        <ul>
                            <li>Your admission letter</li>
                            <li>Evidence of Payment of your fees</li>
                        </ul>
                    </p>
                <h4>3.	Lectures</h4>
                    <p>
                    Lectures commences on (date of commencement). We wish you a safe trip and arrival on our campus before lectures commence. Thank you
                    </p>
                    <p>
                    It is our sincere hope that you will enjoy your stay and studies in the University College. You are warmly welcome
                    </p>
                <P>
                Yours faithfully<br>
                    

                Hanson K. Nyame<br>
                Registrar
                </P>
            </div>    
        </page>
    </body>
</html>