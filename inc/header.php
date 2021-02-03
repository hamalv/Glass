<?php
session_start();
error_reporting(E_ALL);
$path = $_SERVER['DOCUMENT_ROOT'];
include( $path . "/inc/global.php");
// setlanguage();
?>

<!DOCTYPE html>
<html lang="lv">
  <head>
    <meta charset="utf-8">
    <title>SIA GLASS - spoguļi, stikls, rūdīts stikls, virtuves paneļi</title>
    <meta name="description" content="SIA Glass ir Latvijā veidots uzņēmums kas nodarbojas ar stikla un spoguļu izstrādi kopš 1994. gada.">
    <meta name="keywords" content="stikls, stikla durvis, stikla sienas, stikla starpsienas, stikla konstrukcijas, stikla apstrāde, stikla rūdīšana, rūdītais stikls, stiklinieka darbi, stikla slīpēšana, stikla pulēšana, stiklu aplīmēšana, stikla urbšana, kamīnstikli, kamīnstiklu izgatavošana, stikla margas, stikla vannas sienas, vannas sienas, dušas sienas, stikla dušas sienas, duškabīnes, dušas durvis, spoguļi, interjera spoguļi, led spoguļi, spoguļi ar apgaismojumu, spoguļu mozaīkas, līmētas spoguļu konstrukcijas, spoguļi ar matējumu, tonēti spoguļi, bronzas spoguļi, grey spoguļi, uzmēram, izgatavojam, piegādājam, uzstādam">

    <meta property="og:title" content="SIA Glass - Stikla un Spoguļu izstrādājumi">
    <meta property="og:description" content="Izstrādājam pēc individuāliem pasūtījumiem">
    <!-- <meta property="og:image" content=""> -->
    <meta property="og:url" content="http://stikls-spogulis.lv">


    <!-- CSS -->
    <link rel="icon" href="/css/icons/glassmini.svg" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

  </head>
  <body>
    <?php include('navbar.php') ?>
