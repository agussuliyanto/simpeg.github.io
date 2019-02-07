<?php
session_start();
if(!isset($_SESSION['login'])){
  header("location:login.php");
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SIMPEG</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/style.css" rel="stylesheet">
   
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Kepegawaian</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="data_admin.php">Data Admin</a></li>
            <li><a href="data_jabatan.php">Data Jabatan</a></li>
            <li><a href="data_golongan.php">Data Golongan</a></li>
            <li><a href="data_pegawai.php">Data Pegawai</a></li>
            <li><a href="data_kehadiran.php">Kehadiran</a></li>
            <li><a href="data_penggajian.php">Gaji Pegawai</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="cetak_lap_pegawai.php">Laporan Data Pegawai</a></li>
                <li><a href="cetak_lap_golongan.php">Laporan Data Golongan</a></li>
                <li><a href="cetak_lap_jabatan.php">Laporan Data Jabatan</a></li>
                <li><a href="lap_kehadiran.php">Laporan Kehadiran Pegawai</a></li>
                <li><a href="lap_lembur.php">Laporan Lembur Pegawai</a></li>
                <li><a href="lap_potongan.php">Laporan Potongan Gaji</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Logout.php">Logout</a></li>
            <img src="assets/img/logorsupa.png"  alt="Logo" width="100px">
          </ul>          
        </div><!--/.nav-collapse -->
      </div>
    </nav>