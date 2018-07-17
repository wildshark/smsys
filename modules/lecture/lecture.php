<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 15-May-18
 * Time: 11:35 AM
 */

$url_page = $_SESSION['url-page'];

 if (isset($_POST['submit'])){
    $submit = $_POST['submit'];
 }else{
    $submit = $_GET['submit'];
 }

if ($submit === 'add-note'){

    $date = date("Y-m-d h:i:s");
    $topic = $_POST['topic'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $level = $_POST['level'];
    $lecturer = $_POST['lecturer'];
    
    $file= $_FILES['attach-file'];
    $file_name = $_FILES['attach-file']['name'];
    $file_tmp_name = $_FILES['attach-file']['tmp_name'];
    $file_size = $_FILES['attach-file']['size'];
    $file_error = $_FILES['attach-file']['error'];
    $file_type = $_FILES['attach-file']['type'];
 
    $fileExt = explode('.', $file_name);
    $file_actualExt = strtolower(end($fileExt));
    $allowed =  array ('zip','rar');
    if (in_array($file_actualExt, $allowed)){
        if($file_error === 0){
            if ($file_size < 215154113 ){ //205 MB
                $file_new_name = uniqid('',true).".".$file_actualExt;
                $file_destination = "uploads/lecture/".$file_new_name;
                
                move_uploaded_file($file_tmp_name,$file_destination);

                $add ="INSERT INTO `lecture_note` (`lect_date`, `title`, `courseID`, `semester`, `levelID`, `staffID`, `file_path`) 
    VALUES ('$date', '$topic', '$course', '$semester', '$level', '$lecturer', '$file_destination')";
                $result = $conn->query($add);

                $error_no = "2";
            }else{
                echo"file is to large to upload";
                //header("location: note.php?page=".$url_page."&token={$_SESSION['user-token']}&box=3&msg=2");
            }
        }else{
            echo"there was an error uploading the file";
            //header("location: note.php?page=".$url_page."&token={$_SESSION['user-token']}&box=3&msg=6");
        }
    }else{
        echo"you can nout upload this kind of file";
        //header("location: note.php?page=".$url_page."&token={$_SESSION['user-token']}&box=3&msg=7");
    }

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

}elseif($submit === 'download'){

    $id = $_GET['detail'];
    $data = "SELECT * FROM `get_lecture_note` WHERE lectureID='$id'";
    $result = $conn->query($data);
    $download = $result->fetch_assoc();

    $download = $download['file_path'];
    
    header("location: ". $download);

}
 if ($result === TRUE){
   header("location: ".  $_SERVER['HTTP_REFERER']);
}

