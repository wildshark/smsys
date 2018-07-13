<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 12-May-18
 * Time: 11:23 AM
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

$_SESSION['url-page'] = $page;

switch ($page) {

    case"login";
        include_once "template/login.php";
    break;

    case"dashboard";
        $body = "views/form/form.php";
        include_once "template/default.php";
    break;

    case"note-list";
        $page_title="Lecture Note List";
        $body="lecture/notebook/list.notebook.php";
        include_once "template/table.default.php";
    break;

    case"add-note";
        $page_title="Lecture Note List";
        $body="lecture/notebook/add.notebook.php";
        include_once "template/elements.form.php";
    break;

    case"edit-note";
        $page_title="Edit Lecture Note List";
        $body="lecture/notebook/edit.notebook.php";
        include_once "template/elements.form.php";
    break;

    case"create-assignment";
        $page_title="Create Assignment";
        $body="lecture/assignment/add.assignment.php";
        include_once "template/form.element.php";
    break;

    default;
        $body="views/error/404.php";
        include_once "template/default.php";
    break;
}