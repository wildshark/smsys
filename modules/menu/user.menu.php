<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05-Mar-18
 * Time: 8:53 PM
 */

//create.sql
$token = $_SESSION['user-token'];

function leaturer($token){
    echo"
    <li class=''>
        <a href='page.php?page=dashboard&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-tachometer'></i>
            <span class='menu-text'> Dashboard </span>
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-desktop'></i>
            <span class='menu-text'>
								Student Data
							</span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>

            <li class=''>
                <a href='page.php?page=student-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Student List
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=enrollment-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Enrollment List
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-pencil-square-o'></i>
            <span class='menu-text'> Calendar </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>

            <li class=''>
                <a href='page.php?page=list-academic-calendar&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Academic Calender
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=add-semester&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Semester
                </a>

                <b class='arrow'></b>
            </li>

        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-pencil-square-o'></i>
            <span class='menu-text'> Course </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='page.php?page=add-course&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Add Course
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=course-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Course List
                </a>

                <b class='arrow'></b>
            </li>

        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-desktop'></i>
            <span class='menu-text'>
                Lecture Note
            </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>

            <li class=''>
                <a href='note.php?page=note-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Note List
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='note.php?page=add-note&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Create Lession note
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='note.php?page=create-assignment&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Create Assignment
                </a>

                <b class='arrow'></b>
            </li>

        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-tag'></i>
            <span class='menu-text'> File Sharing </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='page.php?page=dir-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Dir
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=add-file&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Upload File
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-tag'></i>
            <span class='menu-text'> Result & Exam </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='result.php?page=mark-sheet&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Create Marking Sheet
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='result.php?page=mark-sheet-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Marking Sheet List
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='result.php?page=assessment-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Assessment List
                </a>

                <b class='arrow'></b>
            </li>

        </ul>
    </li>
    
    ";
}

function admin($token){
    echo"
    <li class=''>
        <a href='page.php?page=dashboard&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-tachometer'></i>
            <span class='menu-text'> Dashboard </span>
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-desktop'></i>
            <span class='menu-text'>
								Student Data
							</span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>


            <li class=''>
                <a href='page.php?page=student.admission-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Student Admission
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=add-student&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                     Student Profile
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=student-admission-index&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    **Add Student Profile
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=student-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Student List
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=enrollment-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Enrollment List
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-desktop'></i>
            <span class='menu-text'>
                                    Human Resource
                                </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='page.php?page=staff-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Staff List
                </a>

                <b class='arrow'></b>

            </li>

            <li class=''>
                <a href='page.php?page=add-staff-profile&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Add Staff
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='elements.html'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Staff Leave
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=staff-terminated&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Terminated Staff
                </a>

                <b class='arrow'></b>
            </li>

        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-pencil-square-o'></i>
            <span class='menu-text'> Calendar </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>

            <li class=''>
                <a href='page.php?page=list-academic-calendar&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Academic Calender
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=add-semester&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Semester
                </a>

                <b class='arrow'></b>
            </li>

        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-pencil-square-o'></i>
            <span class='menu-text'> Course </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='page.php?page=add-course&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Add Course
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=course-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Course List
                </a>

                <b class='arrow'></b>
            </li>

        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-desktop'></i>
            <span class='menu-text'>
                School Setup
            </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>

            <li class=''>
                <a href='page.php?page=administration.list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Administration
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=school-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    School
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=school-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    School/Faculty
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=department-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Faculty Department
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=position-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Position
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
            <a href='page.php?page=programme-list&token={$token}&box=1&msg=1'>
                <i class='menu-icon fa fa-caret-right'></i>
                Programme
            </a>

            <b class='arrow'></b>
        </li>
        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-tag'></i>
            <span class='menu-text'> File Sharing </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='page.php?page=dir-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Dir
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='page.php?page=add-file&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Upload File
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-tag'></i>
            <span class='menu-text'> Result & Exam </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='result.php?page=mark-sheet&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Create Marking Sheet
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='result.php?page=mark-sheet-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Marking Sheet List
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='result.php?page=assessment-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Assessment List
                </a>

                <b class='arrow'></b>
            </li>

        </ul>
    </li>
    ";
}

function  estate_mgs($token){
    echo"
    <li class=''>
        <a href='hostel.php?page=dashboard&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-tachometer'></i>
            <span class='menu-text'> Dashboard </span>
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='hostel.php?page=total-user&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-tachometer'></i>
            <span class='menu-text'> Hostel Report </span>
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='hostel.php?page=hostel-list&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-tachometer'></i>
            <span class='menu-text'> Hostel Booking </span>
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='hostel.php?page=hostel-rental-list&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-caret-right'></i>
            <span class='menu-text'>  Hostel Rental</span>
               
        </a>

        <b class='arrow'></b>
    </li>


    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-desktop'></i>
            <span class='menu-text'>
								Setup
							</span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>

            <li class=''>
                <a href='' data-toggle='modal' data-target='#add-rental-modal'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Create Rentals
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='' data-toggle='modal' data-target='#create-block'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Create Block
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='hostel.php?page=hostel-room&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                     Create Room
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-tag'></i>
            <span class='menu-text'> File Sharing </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='hostel.php?page=backup-file&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Backup File
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='hostel.php?page=send-file&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Send File
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>

";
}

function store_keeper($token){
    echo"
    <li class=''>
        <a href='store.php?page=dashboard&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-tachometer'></i>
            <span class='menu-text'> Dashboard </span>
        </a>

        <b class='arrow'></b>
    </li>
    
    <li class=''>
        <a href='store.php?page=stock-list&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-caret-right'></i>
            <span class='menu-text'> Stock Summary </span>
                
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='store.php?page=stock-request&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-caret-right'></i>
                Request Form
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='store.php?page=stock-purchase&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-caret-right'></i>
                    Purchase
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='store.php?page=stock-issue&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-caret-right'></i>
                Issue
        </a>

        <b class='arrow'></b>
    </li>
   
    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-desktop'></i>
            <span class='menu-text'>
				Setup
			</span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>

            <li class=''>
                <a href='' data-toggle='modal' data-target='#create-catagory'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Create Category
                </a>

                <b class='arrow'></b>
            </li>
            
            <li class=''>
                <a href='store.php?page=add-stock&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Create Stock
                </a>

                <b class='arrow'></b>
            </li> 

            <li class=''>
                <a href='store.php?page=supplier-contact&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Supplier Contact
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-tag'></i>
            <span class='menu-text'> File Sharing </span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            <li class=''>
                <a href='store.php?page=backup-file&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Backup File
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='store.php?page=send-file&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Send File
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>
";
}
