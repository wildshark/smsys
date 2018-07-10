<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 02/07/2018
 * Time: 8:50 AM
 */

function get_id_number(){

    $id=$_GET['id'];
    $id = substr($id , 3);
    $id = ($id - 1204)/ date('Y');
    $_SESSION['student-id'] = $id;
}
function student_admission_index_generator($conn){

    if (isset($_GET['year'])){
        $year = $_GET['year'];
    }else{
        $year = $_POST['year'];
    }

    if (isset($_GET['programme'])){
        $programme = $_GET['programme'];
    }else{
        $programme = $_POST['programme'];
    }

    if(isset($_GET['stream'])){
        $stream = $_GET['stream'];
    }else{
        $stream = $_POST['stream'];
    }


   echo $count_student = "SELECT * FROM get_total_student WHERE yearID='$year' AND progID='$programme'";
    $result_count = $conn->query($count_student);
    $count_total = $result_count->fetch_assoc();

    $student_total = $count_total['total_student'];

    if (!isset($student_total) || empty($student_total) || $student_total == 0){
        $student_total =  1;
        $serial = "ST".$programme."".$year."".$stream."0000".$student_total;
    }else{
        $student_total = $count_total['total_student'] + 1;
        $unit = strlen($student_total);
        switch ($unit){
            case 1:
                $serial = "ST".$programme."".$year."".$stream."000".$student_total;
                break;
            case 2:
                $serial = "ST".$programme."".$year."".$stream."00".$student_total;
                break;
            case 3:
                $serial = "ST".$programme."".$year."".$stream."0".$student_total;
                break;
            case 4:
                $serial = "ST".$programme."".$year."".$stream."".$student_total;
                break;
        }
    }
    return $serial;
}

