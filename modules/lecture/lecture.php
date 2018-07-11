<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 15-May-18
 * Time: 11:35 AM
 */

 if (isset($_POST['submit'])){
    $submit = $_POST['submit'];
 }else{
    $submit = $_GET['submit'];
 }

if ($submit == 'add-note'){

    $date = date("Y-m-d h:i:s");
    $semester = $_POST['calendar'];
    $level = $_POST['level'];
    $lecturer = $_POST['lecturer'];
    $school = $_POST['school'];
    $couser = $_POST['']
    $title = $_POST['title'];
    $file = $_POST['file'];

    $add ="INSERT INTO `lecture_note` (`lect_date`, `staffID`, `departID`, `title`, `calendar`, `levelID`, `file_path`) VALUES ('$date', '$lecturer', '$department','$title', c$semesteralendar, '$level', '$file')";

    $result = $conn->query($add);

}elseif ($submit == 'update-note'){

    $id = $_SESSION['id'];
    $date = $_POST['date'];
    $semester = $_POST['calendar'];
    $level = $_POST['level'];
    $lecturer = $_POST['lecturer'];
    $department = $_POST['department'];
    $title = $_POST['title'];
    $file = $_POST['file'];

    $update =" UPDATE `lecture_note` SET `lect_date`='$date', `staffID`='$lecturer', `departID`='$department', `title`='$title', `calendar`=c$semesteralendar, `levelID`='$level' WHERE (`lectureID`='$id') LIMIT 1";
    $result = $conn->query($update);

}elseif ($submit == 'delete-note'){

    $id = $_GET['detail'];
    $delete ="DELETE FROM `lecture_note` WHERE (`lectureID`='$id')";
    $result = $conn->query($delete);

}elseif ($submit == "add-assignment"){

    $date = $_POST['date'];
    $semester = $_POST['calendar'];
    $level_id = $_POST['level'];
    $lecture = $_POST['lecture'];
    $question = $_POST['question'];
    $submit_date = $_POST['submit-date'];
}

if ($result === TRUE){

    header("location: ".  $_SERVER['HTTP_REFERER']);
}