<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ShiroNeko">

    <title>Lofty Razani</title>
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('include/css/reset.css') ?>">
    <link rel="stylesheet" href="<?= base_url('include/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('include/css/animate.css') ?>">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="<?= base_url('include/css/lightbox.css') ?>">
</head>
<body>
    <header>
        <div class="brand">
            <a class="logo" href="<?= base_url() ?>">P o r t f o l i o</a>
        </div>
        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="sidebar">
            <h1 class="judul-menu">Menu</h1>
            <hr class="garis-menu">

            <ul class="menu">
                <li><a href="<?= base_url('home/about') ?>">About Me</a></li>
                <li><a href="<?= base_url('home/skill') ?>">My Skills</a></li>
                <li><a href="<?= base_url('home/gallery') ?>">Gallery Works</a></li>
                <li><a href="<?= base_url('home/contact') ?>">Contact Me</a></li>
            </ul>
        </div>

        <nav>
            <ul>
                <li><a href="<?= base_url('home/about') ?>">About Me</a></li>
                <li><a href="<?= base_url('home/skill') ?>">My Skills</a></li>
                <li><a href="<?= base_url('home/gallery') ?>">Gallery Works</a></li>
                <li><a href="<?= base_url('home/contact') ?>">Contact Me</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </header>
