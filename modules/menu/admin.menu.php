<?php

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