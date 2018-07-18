<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Mar-18
 * Time: 7:43 PM
 */

date_default_timezone_set('UTC');

$now = date("Y-m-d H:i:s");

$template =new stdClass();

$template->page_header ="e4school";
$template->page_title ="e4school ver 3.0.1";
$template->version ="";
$template->copyright ="";
$template->developer = "iQuipe Digital";

$template->twitter ="#";
$template->facebook ="#";
$template->google ="#";

$template->body ="";
$template->username ="";

$template->dashboard ="template/default.php";
$template->table = "template/table.default.php";
$template->form = "template/form.default.php"; 

