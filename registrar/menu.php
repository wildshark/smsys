<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 16/11/2018
 * Time: 2:22 PM
 */

//create.sql
$token = $_SESSION['user-token'];

function register($token){
    echo"
    <li class=''>
        <a href='register.php?page=dashboard&token={$token}&box=1&msg=1'>
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
                <a href='register.php?page=student.admission-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Admission & Enrollment 
                </a>

                <b class='arrow'></b>
            </li>
            
            <li class=''>
                <a href='register.php?page=student-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                     Student Profile
                </a>

                <b class='arrow'></b>
            </li>
            
            <li class=''>
                <a href='register.php?page=enrollment-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Registration
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='register.php?page=student-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Change Programme
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
                <a href='register.php?page=add-course&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Add Course
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='register.php?page=course-list&token={$token}&box=1&msg=1'>
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
                <a href='register.php?page=affiliate-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Affiliate
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='register.php?page=school-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    School
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='register.php?page=school-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    School/Faculty
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='register.php?page=department-list&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Faculty Department
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='register.php?page=programme-list&token={$token}&box=1&msg=1'>
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
                <a href='register.php?page=backup-file&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Backup File
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='register.php?page=send-file&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Send File
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>
    ";
}