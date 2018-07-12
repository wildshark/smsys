<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 11-May-18
 * Time: 12:21 PM
 */

include_once "controls/config.php";
include_once "controls/db.connection.php";
include_once "controls/global.php";
include_once "controls/control.php";
include_once "modules/datasheet/datasheet.module";
include_once "modules/datasheet/profile.datasheet.module";
include_once "msg_box/msg.box.module";


session_start();

if ($_GET['page']){
    $page = $_GET['page'];
}else{
    $page = $_POST['page'];
}

switch ($page) {

    case"login";
        include_once "template/login.php";
        break;

    case"dashboard";
        $body = "views/form/form.php";
        include_once "template/default.php";
    break;

    case"hostel-list";
        $page_title="Hostel List";
        $body="hostel/list.hostel.book.php";
        include_once "template/table.default.php";
    break;

    case"hostel-room";
        $page_title="Create Room";
        $body="hostel/add.hostel.room.php";
        include_once "template/form.default.php";
    break;

    case"hostel-booking";
        $page_title="Hostel Booking";
        $body="hostel/add.hostel.book.php";
        include_once "template/form.default.php";
    break;

    case"add-booking";
        $page_title="Hostel Room Booking";
        $body="hostel/add.hostel.book.php";
        include_once "template/form.default.php";
    break;

    case"edit-booking";
        $page_title="Update Hostel Room Booking";
        $body="hostel/edit.hostel.book.php";
        include_once "template/form.default.php";
    break;

    case"hostel-rental-list";
        $page_title="Hostel Rental List";
        $body="hostel/rental/list.rental.hostel.php";
        include_once "template/table.default.php";
    break;

    case"edit-hostel-rental";
        $page_title="Hostel Rental List";
        $body="hostel/rental/edit.rental.hostel.php";
        include_once "template/table.default.php";
    break;

    default;
        $body="views/error/404.php";
        include_once "template/default.php";
    break;

}