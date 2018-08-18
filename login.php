<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 09-May-18
 * Time: 8:33 AM
 */

include_once 'controls/config.php';
include_once 'controls/db.connection.php';

session_start();

if ($_POST['submit'] ==="login"){
   
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
    $_SESSION['username'] = $username;

    $sql = "SELECT * FROM get_admin WHERE username = '$username' AND  password = '$password'";
    $result = $conn->query($sql);
    $admin = $result->fetch_assoc();

    if ($admin > 0){
        $user_id = $admin['userID'];
        $user_access = $admin['access'];
        $token = uniqid();
        $token = md5($user_access."".date('h-i-s')."".$token);

        if ($user_access == 1){
            $pg = "page.php";
        }elseif($user_access == 2){
             $pg = "page.php";
        }elseif($user_access == 3){
            $pg = "register.php";
        }elseif($user_access == 4){
            $pg = "hostel.php";
        }elseif($user_access == 5){
            $pg = "store.php";
        }elseif($user_access == 6){
            $pg = "library.php";
        }

        $_SESSION['user-token'] = $token;
        $_SESSION['user-access'] = $user_access;
        $_SESSION['user-id'] = $user_id;
        $_SESSION['user-page-url'] = $pg;

        header("location: {$pg}?page=dashboard&token={$token}&box=1&msg=1");

    }else{
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0);
    }

}elseif($_POST['submit'] === "register"){

    if (isset($_POST['username'])){
         $sernuame = $_POST['username'];
    }else{
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0); 
    }
   
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0);
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }else{
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0);
    }
    
    $check = "SELECT * FROM `get_admin` WHERE email ='".$email."'";
    $check_result = $conn->query($check);
    //$chk = $check_result->fetch_assoc();

    if ($check_result->num_rows > 0){
        echo "user email already exist";
    }else{
        
        if ($_POST['agreement'] === "user-agreement" && $password === $_POST['password1']){
            $sql ="INSERT INTO `get_admin` (`username`, `password`, `email`,`access`,`status`) VALUES ('$username', '$password', '$email','0','0')";
            $result=$conn->query($sql);
            //$record = $result->fetch_assoc();
            header("location: ".  $_SERVER['HTTP_REFERER']);
            exit(0);
        }else{
            echo"check password and agreement policy";
        }
    }
    
}elseif($_POST['submit'] === "email-recovery"){
    
    if (isset()){
        $email = $_POST['email'];
    }else{
        header("location: ".  $_SERVER['HTTP_REFERER']);
        exit(0);
    }
   

    $sql ="SELECT * FROM `get_admin` WHERE email ='".$email."'";
    $result=$conn->query($sql);
    $record = $result->fetch_assoc();
    
    if($record > 0){

        $username = $record['username'];
        $password = $record['password'];
        
        $subject = "GhanaCUC Portal Login";
        $message = "Your login Detail<br> Username :".$username."<br> Password :".$password."<p>";
        
        mail($email,$subject,$message);

    }else{
        echo"Username Email do not exist";
    }

   
}

