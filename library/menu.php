<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 05/09/2018
 * Time: 10:57 PM
 */

function library_side_bar_menu($token){
    echo"
    <li class=''>
        <a href='library.php?page=dashboard&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-tachometer'></i>
            <span class='menu-text'> Dashboard </span>
        </a>

        <b class='arrow'></b>
    </li>

    <li class=''>
        <a href='#' class='dropdown-toggle'>
            <i class='menu-icon fa fa-desktop'></i>
            <span class='menu-text'>
				Books
			</span>

            <b class='arrow fa fa-angle-down'></b>
        </a>

        <b class='arrow'></b>

        <ul class='submenu'>
            
            <li class=''>
                <a href='library.php?page=all-book&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Book List
                </a>

                <b class='arrow'></b>
            </li> 

            <li class=''>
                <a href='library.php?page=add-book&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Add New Book
                </a>

                <b class='arrow'></b>
            </li>

            <li class=''>
                <a href='library.php?page=issue-book&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Issue Book
                </a>

                <b class='arrow'></b>
            </li>
            <li class=''>
                <a href='library.php?page=return-due&token={$token}&box=1&msg=1'>
                    <i class='menu-icon fa fa-caret-right'></i>
                    Return Due
                </a>

                <b class='arrow'></b>
            </li>
        </ul>
    </li>

    <li class=''>
        <a href='library.php?page=classification&token={$token}&box=1&msg=1'>
            <i class='menu-icon fa fa-tachometer'></i>
            <span class='menu-text'> Classification </span>
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