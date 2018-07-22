<?php

function total_student_summary($conn){

   $yearID = $_SESSION['academic-year'];

    $sql = "SELECT Count(studentID) as total,yearID FROM get_student_index_list WHERE yearID = '".$yearID."' GROUP BY yearID";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    if (!isset($r['total'])){
        $total = "0";
    }else{
       $total =  $r['total']; 
    }
    return $total;
}

function total_bed_summary($conn){
    
    $sql = "SELECT Sum(bed) as total FROM get_hostel_room";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    if (!isset($r['total'])){
        $total = "0";
    }else{
       $total =  $r['total']; 
    }

    return $total;
}

function total_available_summary($conn){

    $yearID = $_SESSION['academic-year'];

    $sql = "SELECT Sum(bal_user) as total FROM get_hostel_total_bed WHERE yearID = '".$yearID."' GROUP BY yearID";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    if (!isset($r['total'])){
        $total = "0";
    }else{
       $total =  $r['total']; 
    }

    return $total;
}

function total_used_summary($conn){

    $yearID = $_SESSION['academic-year'];

    $sql = "SELECT Sum(total_user) as total FROM get_hostel_total_bed  WHERE yearID = '".$yearID."' GROUP BY yearID";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();
    
    if (!isset($r['total'])){
        $total = "0";
    }else{
       $total =  $r['total']; 
    }
    
    return $total;
}

function total_room_summary($conn){

    $sql = "SELECT Count(room) as total FROM get_hostel_room";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    $total =  $r['total'];

    return $total;   
}

?>