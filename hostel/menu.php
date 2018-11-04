<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06/09/2018
 * Time: 12:16 AM
 */

function  hostel_menu($token){
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