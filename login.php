<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 09-May-18
 * Time: 8:33 AM
 */

include_once 'controls/config.php';
include_once 'controls/db.connection.php';

if (isset($_POST)){
    if(empty($_POST['username'])){
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit();
    }else{
        $username =$_POST['username'];
    }

    if(empty($_POST['password'])){
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0);
    }else{
        $password = $_POST['password'];
    }
}elseif (isset($_GET)){
    if(empty($_GET['username'])){
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0);
    }else{
        $username =$_GET['username'] ;
    }

    if(empty($_GET['password'])){
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0);
    }else{
        $password =$_GET['password'];
    }
}

session_start();
$_SESSION['username'] = $username;

function login($conn,$username,$password){

    $sql = "SELECT * FROM get_admin WHERE username = '$username' AND  password = '$password'";
    $result = $conn->query($sql);
    $admin = $result->fetch_assoc();

    if ($admin > 0){

        $token = uniqid();

        header("location: page.php?page=dashboard&box=1&msg=1");
    }else{
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0);
    }
}
login($conn,$username,$password);
