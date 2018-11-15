<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Mar-18
 * Time: 7:44 PM
 */

if ($_SERVER['HTTP_HOST'] === "localhost"){

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "school_data";

}elseif ($_SERVER['HTTP_HOST'] === "11.1.1.250"){

    $server = "localhost";
    $username = "root";
    $password = "ghanacu@50";
    $database = "school_data";

}else{

    $server = "localhost";
    $username = "ghanacucom";
    $password = "ghanacu@50";
    $database = "ghanacu_portal";
}

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}