<?php
require 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College LaSalle - Admin Dashboard</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">College LaSalle - Admin Dashboard</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>blog.html">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.html">About us</a></li>
                <li><a href="<?= ROOT_URL ?>services.html">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>admin/dashboard.html">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--====================== END OF NAV ====================-->
