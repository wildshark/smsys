<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 15-May-18
 * Time: 11:35 AM
 */

if ($_GET['submit'] == 'add-note'){

    $date = $_GET['date'];
    $semester = $_GET['calendar'];
    $level = $_GET['level'];
    $lecturer = $_GET['lecturer'];
    $department = $_GET['department'];
    $title = $_GET['title'];
    $file = $_GET['file'];

    $add ="INSERT INTO `lecture_note` (`lect_date`, `staffID`, `departID`, `title`, `calendar`, `levelID`, `file_path`) VALUES ('$date', '$lecturer', '$department','$title', c$semesteralendar, '$level', '$file')";

    $result = $conn->query($add);

}elseif ($_GET['submit'] == 'update-note'){

    $id = $_SESSION['id'];
    $date = $_GET['date'];
    $semester = $_GET['calendar'];
    $level = $_GET['level'];
    $lecturer = $_GET['lecturer'];
    $department = $_GET['department'];
    $title = $_GET['title'];
    $file = $_GET['file'];

    $update =" UPDATE `lecture_note` SET `lect_date`='$date', `staffID`='$lecturer', `departID`='$department', `title`='$title', `calendar`=c$semesteralendar, `levelID`='$level' WHERE (`lectureID`='$id') LIMIT 1";
    $result = $conn->query($update);

}elseif ($_GET['submit'] == 'delete-note'){

    $id = $_GET['detail'];
    $delete ="DELETE FROM `lecture_note` WHERE (`lectureID`='$id')";
    $result = $conn->query($delete);

}elseif ($_GET['submit'] == "add-assignment"){

    $date = $_GET['date'];
    $semester = $_GET['calendar'];
    $level_id = $_GET['level'];
    $lecture = $_GET['lecture'];
    $question = $_GET['question'];
    $submit_date = $_GET['submit-date'];
}

if ($result === TRUE){

    header("location: ".  $_SERVER['HTTP_REFERER']);
}