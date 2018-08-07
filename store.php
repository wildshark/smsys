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
include_once "modules/menu/user.menu.php";
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

$_SESSION['url-page'] = $page;

    switch ($page){

        case"login";
            include_once "template/login.php";
        break;

        case"dashboard";
            $body = "store_keeper/dashboard/dashboard.php";
            include_once "template/default.php";
        break;

        case "add-stock";
            $page_title="Add New Item";
            $body="store_keeper/setup/add.item.name.php";
            include_once "template/table.default.php";
        break;

        case"edit-item";
            $page_title="Edit Item";
            $body="store_keeper/setup/edit.item.name.php";
            include_once "template/form.element.php";
        break;


        case"stock-list";
            $page_title="Stack List";
            $body="store_keeper/stock/list.stock.php";
            include_once "template/table.default.php";
        break;

        case "stock-purchase";
            $page_title="Stock Purchase";
            $body="store_keeper/stock/list.purchase.stock.php";
            include_once "template/table.default.php";
        break;

        case"stock-issue";
            $page_title="Issused Stock";
            $body="store_keeper/stock/list.issused.stock.php";
            include_once "template/table.default.php";
        break;

        case "view-stock-list";
            $page_title="Stock Purchase";
            $body="store_keeper/stock/view.list.stock.detail.php";
            include_once "template/table.default.php";
        break;

        case"supplier-contact";
            $page_title="Supplier's Contact Address";
            $body="store_keeper/setup/supplier.contact.php";
            include_once "template/table.default.php";
        break;

        case"edit-supplier-contact";
            $page_title="Supplier's Contact Address";
            $body="store_keeper/setup/edit.supplier.contact.php";
            include_once "template/table.default.php";
        break;

        case"backup-file";
            $page_title="File Backup";
            $body="data_storage/backup.file.php";
            include_once "template/table.default.php";
        break;

        case"send-file";
            $page_title="File Backup";
            $body="data_storage/send.file.php";
            include_once "template/table.default.php";
        break;


        default;
            $body="views/error/404.php";
            include_once "template/default.php";
        break;
    }
}