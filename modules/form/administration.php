<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Jun-18
 * Time: 12:54 PM
 */


$url_page = $_SESSION['url-page'];
$error_no = "2";

if ($_GET['submit'] == "add"){

    $department = $_GET['department'];
    $administration = $_GET['administration'];
    $add_department = "INSERT INTO `department` (`department`,`schoolID`, `statusID`,`catID`) VALUES ('$department','$administration','1','2')";
    $result = $conn->query($add_department);

}elseif ($_GET['submit'] == "status"){

    $id=$_GET['detail'];
    $status = $_GET['status'];
    $update="UPDATE `department` SET `statusID`='$status' WHERE (`departID`='$id') LIMIT 1";
    $result = $conn->query($update);

}elseif ($_GET['submit'] == "delete"){

    $id = $_GET['detail'];
    $delete = "DELETE FROM `department` WHERE (`departID`='$id')";
    $result = $conn->query($delete);

}elseif ($_GET['submit'] == "update"){

    $id = $_GET['department-code'];
    $department = $_GET['department'];
    $update = "UPDATE `department` SET `department`='$department' WHERE (`departID`='$id') LIMIT 1";
    $result = $conn->query($update);
}

if (!isset($result)){
    header("location: page.php?page=".$url_page."&box=4&msg=9");
}else{
    if ($result === TRUE){
        header("location: page.php?page={$url_page}&box=2&msg={$error_no}");
    }else{
        header("location: page.php?page=".$url_page."&box=4&msg=9");
    }
}

