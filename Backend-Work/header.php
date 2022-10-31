<?php 
session_start();
include "connectdb.php"; 
$body='';
if($page=='Home'){$class1='<u>Home</u>';$class2='Gallery';$class3='Info Lomba';$class4='Kegiatan';}
elseif($page=='Gallery'){
    $class1='Home';$class2='<u>Gallery</u>';$class3='Info Lomba';$class4='Kegiatan';
    $body='gallerysec';
}
elseif($page=='Info Lomba'){$class1='Home';$class2='Gallery';$class3='<u>Info Lomba</u>';$class4='Kegiatan';}
elseif($page=='Kegiatan'){$class1='Home';$class2='Gallery';$class3='Info Lomba';$class4='<u>Kegiatan</u>';}
elseif($page=='Feedback'){
    $class1='Home';$class2='Gallery';$class3='Info Lomba';$class4='Kegiatan';
    $body='feedsec';
}
else{$class1='Home';$class2='Gallery';$class3='Info Lomba';$class4='Kegiatan';}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css">

    <title>ERP Study Group</title>
  </head>
  <body class="<?=$body;?>">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
    </style>
    <!---Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="./assets/img/keprof erp.png" alt="" width="86" height="43" style="margin-left: 0.8cm;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end p-2" id="navbarSupportedContent">
          <ul class="navbar-nav" > 
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="margin-left: 1cm;margin-right: 0.25cm;color: black;"><b><?= $class1; ?></b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php" style="margin-left: 0.5cm;margin-right: 0.25cm;color: black;"><b><?= $class2; ?></b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="info_lomba.php" style="margin-left: 0.25cm;margin-right: 0.25cm;color: black;"><b><?= $class3; ?></b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kegiatan.php" style="margin-left: 0.25cm;margin-right: 0.3cm;color: black;"><b><?= $class4; ?></b></a>
            </li>
          </ul>
          <a href="contact_us.php">
            <button class="btn-contact" style="margin-right: 0.8cm; margin-left: 0.25cm;"><b>Contact Us</b></button>
          </a>
        </div>
      </div>
    </nav>
