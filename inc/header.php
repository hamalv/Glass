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
    <meta name="keywords" content="stikla vitrīnas, triplex, stiklu nomaiņa, stikla ražošana, stikla loksnes cena, stikls interjerā, vēsturiskais stikls, foto stikls, gleznu stikls, stikla plēves, apaļš stikls, stikla dekori, smiļšustrūkla, stikla bloks, stiklu centrs, vitrāžas, dekoratīvais stikls, stikla pakalpojumi, neplīstošs stikls, stikla ražošana, tonēšana, logotips uz stikla, virtuves mēbeles, lūkas, stikls lapenei, kamīnstikls, karstumizturīgs stikls, stikla iekšdurvis, durvis, ārdurvis, bīdāmas durvis, iestiklošana, matēts stikls durvju stikls, durvis skapim, pilnstikls, laminēti stikli, melns stikls, stikla galerija, logu stikls, stikla priekšmeti, stikla barjeras, stikla fabrika, stikla jumtiņi, stikla studija, spoguļu stikls, stiklu piegriešana, stikla produkcija, stikla konstrukcijas, rīgas stikls, izturīgs stikls, starpsienas, rūdīts stikls, stikla nojumes, stikla krāsas, stiklnieku darbi, stikls ar pārklājumu, aizsargstikls, stikla dizains, aizsargplēve stiklam, mēbeļu stikli, pasūtīt stiklu, stikla griešana pēc šablona, stikla paneļi, ķīmiski matēts stikls, stikla dušas, float stikls, dzidrināts stikls, pirts, saunas durvis, armēts stikls, stikla darbi, stikla cena, stikls pie plīts, stikla plaukti, spoguļstikls, spoguļu griešana, spoguļu darbnīca Rīgā, bronza spogulis, tonēts spogulis, spoguļu dekors, mozaīka, Facete, slīpšana, LED spogulis, spogulis ar gaismu, pasūtīt spoguli, caurspīdīgs spogulis, spoguļis ar drošības plēvi, matēts spogulis, spoguļvirsma, spoguļstiklspasūtīt spoguli, vannas istabas spogulis,  spoguļu izstrādājumi,  apaļš spogulis, industruālais spogulis, grīdas spogulis, sienas spogulis, galda spogulis, spogulis pēc pasūtījuma, crystal spogulis, dzidrināts spogulis, auto spoguļi, spoguļgaldiņš, priekšnama spogulis, interjera priekšmeti, spoguļplauktiņi, spogulis ar rāmi, jauns spogulis, spoguļskapis, stikls, stikla durvis, stikla sienas, stikla starpsienas, stikla konstrukcijas, stikla apstrāde, stikla rūdīšana, rūdītais stikls, stiklinieka darbi, stikla slīpēšana, stikla pulēšana, stiklu aplīmēšana, stikla urbšana, kamīnstikli, kamīnstiklu izgatavošana, stikla margas, stikla vannas sienas, vannas sienas, dušas sienas, stikla dušas sienas, duškabīnes, dušas durvis, spoguļi, interjera spoguļi, led spoguļi, spoguļi ar apgaismojumu, spoguļu mozaīkas, līmētas spoguļu konstrukcijas, spoguļi ar matējumu, tonēti spoguļi, bronzas spoguļi, grey spoguļi, uzmēram, izgatavojam, piegādājam, uzstādam">

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
