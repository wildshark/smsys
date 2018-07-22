<?php

function total_issused_summary($conn){

    $sql = "SELECT Sum(issue) as total FROM get_stock_balance";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    $total = "Issused ". $r['total'];

    return $total;
}

function total_purchase_summary($conn){
    
    $sql = "SELECT Sum(purchase) as total FROM get_stock_balance";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    $total = "Purchase ". $r['total'];

    return $total;
}

function total_available_summary($conn){

    $sql = "SELECT Sum(bal_qty) as total FROM get_stock_balance";
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();

    $total = "Available ". $r['total'];

    return $total;
}

function total_order_summary($conn){

    return "Order 0";
}

?>