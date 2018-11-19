<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06-Mar-18
 * Time: 12:37 AM
 */

session_start();

include_once "controls/config.php";
include_once "controls/db.connection.php";
include_once "controls/global.php";
include_once "controls/control.php";
include_once "controls/session.php";


if (isset($_GET['ui'])){
    $page = $_GET['ui'];
}else{
    $page = $_POST['ui'];
}

switch ($page){

    case"sql-setup-text";
     include_once "modules/create.sql.module";
    break;

    case "student-admission-entry";
        include_once "registrar/modules/student.admission.entry.module";
    break;

    case"student";
       // echo"student admission and indexing";
        if ($_POST['stamp'] == 1){
            include_once "registrar/modules/student.no.picture.module";
        }elseif($_POST['stamp'] == 2){
             include_once "registrar/modules/student.module";
        }
    break;

    case "programme";
        include_once "modules/form/programme.module";
    break;

    case "course";
        //echo "course";
        include_once "modules/form/course.module";
    break;

    case "calendar";
        require_once "modules/form/semester.module";
    break;

    case"academic-calendar";
        include_once "modules/form/academic.calendar.module";
    break;

    case"staff";
        include_once "modules/form/staff.module";
    break;

    case"operation";
        //echo "operation";
        include_once "modules/operation/staff.operation.module";
    break;

    case"department";
        include_once "modules/form/department.module";
    break;

    case"school";
        include_once "modules/form/school.module";
    break;

    case "store-keeper";
        //echo "store-keeper";
        include_once "stocks/modules/stock.module";
    break;

    case "hostel";
        include_once "modules/hostel/hostel.module";
    break;

    case "lecture-note";
        include_once "modules/lecture/lecture.php";
    break;

    case"enrollment";
        include_once "modules/form/enrollment.module";
    break;

    case"staff-qualification";
        include_once "modules/form/staff.qualification.module";
    break;

    case "staff-promotion-rank";
        include_once "modules/form/staff.promotion.module";
    break;

    case"result";
        require_once "modules/result/result.marking.sheet.module";
    break;

    case"cloud-file";
        require_once "data_storage/model/file.share.module";
    break;

    case"administration";
        require_once "modules/form/administration.php";
    break;

    case"affliate";
        require_once "affiliate/module/school.affiliate.module";
    break;

    case"library";
        require_once "library/model/library.module";
    break;

    default;
        $body="views/error/404.php";
        include_once "template/default.php";
    break;
}
