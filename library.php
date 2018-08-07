<?php
session_start();

include_once "controls/config.php";
include_once "controls/db.connection.php";
include_once "controls/global.php";
include_once "controls/control.php";
include_once "controls/session.php";
include_once "modules/plugin/barcode.php";
include_once "modules/menu/user.menu.php";
include_once "modules/datasheet/datasheet.module";
include_once "modules/datasheet/profile.datasheet.module";
include_once "msg_box/msg.box.module";

$token = $_GET['token'];
$user_token = $_SESSION['user-token'];
$user_access =  $_SESSION['user-access'];

if ($user_token == $token){
    if ($_GET['page']){
        $page = $_GET['page'];
    }else{
        $page = $_POST['page'];
    }

    if ($page =="login"){
        logout ($conn);
    }else {
        if (!isset($_SESSION['username'])) {
            logout ($conn);
        } else {
            
            $_SESSION['url-page'] = $page;
            switch ($page) {

                case"dashboard";
                    $body = "library/dashboard.php";
                    include_once "template/default.php";
                break;    

                case"all-book" ;
                    $page_title = "Book List";
                    $body = "library/book/list.book.php";
                    include_once "template/table.default.php";
                break;
                
                case"table";
                    include_once "template/table.default.php";
                    break;

                default;
                    $body = "views/error/404.php";
                    include_once "template/default.php";
                    break;
            }
        }
    }
}else{
    logout ($conn);
}    