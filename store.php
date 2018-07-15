<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 10-May-18
 * Time: 2:15 PM
 */

session_start(); 

include_once "controls/config.php";
include_once "controls/db.connection.php";
include_once "controls/global.php";
include_once "controls/control.php";
include_once "modules/menu/admin.user.php";
include_once "modules/datasheet/datasheet.module";
include_once "modules/datasheet/profile.datasheet.module";
include_once "msg_box/msg.box.module";

$token = $_GET['token'];
$user_token = $_SESSION['user-token'];

if ($user_token == $token){
    if ($_GET['page']){
        $page = $_GET['page'];
    }else{
        $page = $_POST['page'];
    }

    switch ($page){

        case"login";
            include_once "template/login.php";
        break;

        case"dashboard";
            $body="views/form/form.php";
            include_once "template/default.php";
        break;

        case "add-stock";
            $page_title="Add New Stock";
            $body="views/student/list.student.php";
            include_once "template/table.default.php";
        break;

        case"stock-list";
            $page_title="Stack List";
            $body="store_keeper/stock/list.stock.php";
            include_once "template/table.default.php";
        break;

        case"stock-order";
            $page_title="Stock Order";
            $body="store_keeper/stock/list.order.stock.php";
            include_once "template/table.default.php";
        break;

        case "stock-purchase";
            $page_title="Stock Purchase";
            $body="store_keeper/stock/purchase.stock.php";
            include_once "template/table.default.php";
        break;

        case "view-stock-list";
            $page_title="Stock Purchase";
            $body="store_keeper/stock/view.list.stock.detail.php";
            include_once "template/table.default.php";
        break;

        case"stock-request";
        $page_title="Item Request";
        $body="store_keeper/stock/list.item.request.php";
        include_once "template/table.default.php";
        break;

        default;
            $body="views/error/404.php";
            include_once "template/default.php";
        break;
    }
}