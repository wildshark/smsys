<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Mar-18
 * Time: 7:42 PM
 */
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
                    $body = "views/dashboard/register/dashboard.register.php";
                    include_once "template/default.php";
                break;    

                case"student.admission-list" ;
                    $page_title = "Student Admission List";
                    $body = "views/student/entry/list.student.index.php";
                    include_once "template/table.default.php";
                break;

                case"add-student-admission";
                    $page_title = "Student Admission";
                    $body = "views/student/entry/add.student.index.php";
                    include_once "template/form.element.php";
                break;

                case"edit-student-admission";
                    $page_title = "Edit Student Admission";
                    $body = "views/student/entry/edit.student.index.php";
                    include_once "template/form.element.php";
                break;

                case"student-confirmation";
                //echo "student-confirmation";
                    include_once "confirmation/new.student.confirmation.php";
                break;

                case"view-student-admission";
                //echo"view-student-admission";
                    $page_title = "Student Admission Profile";
                    $body = "views/student/entry/index.admission.student.php";
                    include_once "template/table.default.php";
                break;

                case"position-list";
                //echo"position-list";
                    $page_title = "Position List";
                    $body = "views/position/list.position.php";
                    include_once "template/table.default.php";
                break;

                case "edit-position";
                //echo"edit-position";
                    $page_title = "Edit Position";
                    $body = "views/position/edit.position.php";
                    include_once "template/form.element.php";
                break;

                case"student-list";
                    $page_title = "Student List";
                    $body = "views/student/list.student.php";
                    include_once "template/table.default.php";
                    break;

                case"add-student";
                    $page_title = "Add New Student";
                    $body = "views/student/add.student.php";
                    include_once "template/form.default.php";
                    break;

                case "edit-student-profile";
                    $page_title = "Edit Student";
                    $body = "views/student/edit.student.php";
                    include_once "template/form.default.php";
                    break;

                case "view-student-profile";
                    $page_title = "View Student's Profile";
                    $body = "views/student/admission/view.student.profile.php";
                    include_once "template/form.profile.php";
                    break;

                case"student-admission-index";
                    $page_title = "Add Student Admission Index";
                    $body = "views/student/admission/list.student.admission.php";
                    include_once "template/table.default.php";
                break;

                case"view-student.admission.index";
                    $page_title = "View Student's Profile";
                    $body = "views/student/admission/view.student.admission.index.php";
                    include_once "template/form.profile.php";
                break;

                case"add-enrollment";
                    $page_title = "Add Enrollment";
                    $body = "views/student/add.student.enroll.php";
                    include_once "template/form.element.php";
                    break;

                case "edit-enrollment";
                    $page_title = "Edit Enrollment";
                    $body = "views/student/edit.student.enroll.php";
                    include_once "template/form.element.php";
                    break;

                case"enrollment-list";
                    $page_title = "Enrollment List";
                    $body = "views/student/list.student.enroll.php";
                    include_once "template/table.default.php";
                    break;

                case"programme-list";
                    $page_title = "Programme List";
                    $body = "views/programme/list.programme.php";
                    include_once "template/table.default.php";
                    break;

                case"add-programme";
                    $page_title = "Add Programme";
                    $body = "views/programme/add.programme.php";
                    include_once "template/form.default.php";
                    break;

                case"edit-programme";
                    $page_title = "Edit Course";
                    $body = "views/programme/edit.programme.php";
                    include_once "template/form.default.php";
                    break;

                case"add-calendar";
                    $page_title = "Add calendar";
                    $body = "views/calendar/add.calendar.php";
                    include_once "template/table.default.php";
                    break;

                case"add-semester";
                    $page_title = "Add semester";
                    $body = "views/calendar/add.semester.php";
                    include_once "template/table.default.php";
                    break;

                case"add-course";
                    $page_title = "Add Course";
                    $body = "views/course/add.course.php";
                    include_once "template/form.default.php";
                    break;

                case"course-list";
                    $page_title = "Course List";
                    $body = "views/course/list.course.php";
                    include_once "template/table.default.php";
                    break;

                case"edit-course-profile";
                    $page_title = "Edit Course";
                    $body = "views/course/edit.course.php";
                    include_once "template/form.default.php";
                    break;

                case"add-staff-profile";
                    $page_title = "Add New Staff";
                    $body = "views/staff/add.staff.profile.php";
                    include_once "template/form.default.php";
                    break;

                case"add-staff-profile-form-b";
                    include_once "modules/datasheet/staff.profile.datasheet.module";
                    $page_title = "Other staff information";
                    $body = "views/staff/view.staff.profile.php";
                    include_once "template/form.default.php";
                    break;

                case"view-staff-profile";
                    include_once "modules/datasheet/staff.profile.datasheet.module";
                    $page_title = "Other staff information";
                    $body = "views/staff/view.staff.profile.php";
                    include_once "template/form.default.php";
                    break;

                case"edit-staff-profile";
                    $page_title = "Edit Staff Profile";
                    $body = "views/staff/edit.staff.profile.php";
                    include_once "template/form.default.php";
                    break;

                case"staff-profile";
                    $page_title = "Edit Course";
                    $body = "views/staff/staff.profile.php";
                    include_once "template/form.default.php";
                    break;

                case"staff-list";
                    $page_title = "Staff Profile";
                    $body = "views/staff/list.staff.profile.php";
                    include_once "template/table.default.php";
                    break;

                case"staff-terminated";
                    $page_title = "Staff Terminated";
                    $body = "views/staff/list.terminated.staff.profile.php";
                    include_once "template/table.default.php";
                    break;

                case"edit-academic-calendar";
                    $page_title = "Edit Academic Calendar";
                    $body = "views/calendar/edit.calendar.php";
                    include_once "template/form.element.php";
                    break;

                case"list-academic-calendar";
                    $page_title = "Academic Calendar";
                    $body = "views/calendar/list.calendar.php";
                    include_once "template/table.default.php";
                    break;

                case"test";
                    $page_title = "Academic Calendar";
                    $body = "views/student/test.php";
                    include_once "template/form.profile.php";
                    break;

                case"school-list";
                    $page_title = "School(s)/Faculty List";
                    $body = "views/school/list.school.php";
                    include_once "template/table.default.php";
                    break;

                case"department-list";
                    $page_title = "Department List";
                    $body = "views/school/list.department.php";
                    include_once "template/table.default.php";
                    break;

                case"dir-list";
                    $page_title = "Department List";
                    $body = "file_share/list.share.php";
                    include_once "template/table.default.php";
                    break;

                case"add-file";
                    $page_title = "Department List";
                    $body = "file_share/add.share.php";
                    include_once "template/table.default.php";
                    break;

                case"administration.list";
                    $page_title = "Administration List";
                    $body = "views/administration/list.administration.php";
                    include_once "template/table.default.php";
                break;

                case"print.admission.letter";
                    $page_title = "Administration List";
                    include_once "print/admission.letter.php";
                break;

                case"mark-sheet";
                    $page_title="Exam Master Sheet";
                    $body="result/master_sheet/result.master.list.php";
                    include_once "template/table.default.php";
                break;

                case"edit-mark-sheet";
                    $page_title="Edit Exam Master Sheet";
                    $body="result/master_sheet/edit.result.master.php";
                    include_once "template/form.element.php";
                break;

                case "add-result.processing";
                    $page_title="Marking Sheet List";
                    $body="result/exam/student.exam.process.php";
                    include_once "template/table.default.php";
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