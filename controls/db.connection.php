<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Mar-18
 * Time: 7:44 PM
 */

if ($_SERVER['HTTP_HOST'] === "localhost"){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "school_data";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}else{

    $servername = "localhost";
    $username = "ghanacucom";
    $password = "ghanacu@50";
    $database = "ghanacu_portal";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

}
