<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Mar-18
 * Time: 7:44 PM
 */

//get the academic year

$a_year = "SELECT academic_yr FROM get_academic_session ORDER BY yearID DESC";
$result = $conn->query($a_year);
$y = $result->fetch_assoc();

 $acad_yr = $y['academic_yr'];
if (!empty($acad_yr)){
   $_SESSION['academic-year'] = $acad_yr;
}else{
    exit(0);
}

