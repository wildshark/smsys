<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Mar-18
 * Time: 7:44 PM
 */


if (file_exists("db.server.php")){
    include_once "db.server.php";

}else{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "school_data";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
