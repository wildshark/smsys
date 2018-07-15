<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 23-May-18
 * Time: 5:02 PM
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
    }else {
        $page = $_POST['page'];

    }

    if(!isset($_SESSION['username'])){
        header("location: index.php");
    }else{
        switch ($page){

            case"mark-sheet";
                $page_title="Marking Sheet";
                $body="result/mark_sheet/result.marking.sheet.master.php";
                include_once "template/form.element.php";
            break;

            case "mark-sheet-list";
                $page_title="Marking Sheet List";
                $body="result/mark_sheet/result.master.list.php";
                include_once "template/table.default.php";
            break;

            case"add-assessment";
                $page_title="Marking Sheet List";
                $body="result/mark_sheet/add.marks.sheet.php";
                include_once "template/form.element.php";
            break;

            case "assessment-list";
                $page_title="Assessment List";
                $body="result/mark_sheet/assessment.list.php";
                include_once "template/table.default.php";
            break;
        }
    }
}