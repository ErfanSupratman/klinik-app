<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Jadwal Dokter | Fuyi Healthouse | Acupuncture</title>
  <link href="Library/css/bootstrap.min.css" rel="stylesheet">
  <link href="Library/css/navbar-fixed-top.css" rel="stylesheet">
</head>
<body style="background-color:#b5b5b5">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">LOHAN APP</a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="?url=adminantrian"><i class="glyphicon glyphicon-user"></i> Antrian Pasien</a></li>
          <li><a href="?url=adminpasien"><i class="glyphicon glyphicon-user"></i> Data Pasien</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?url=admintambah"><i class="glyphicon glyphicon-plus"></i> Tambah Admin & Dokter</a></li>
          <li class="active"><a href="?url=adminjadwaldokter"><i class="glyphicon glyphicon-calendar"></i> Jadwal Dokter</a></li>
          <li><a href="?url=adminlogout"><i class="glyphicon glyphicon-log-out"></i> Logout Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">JADWAL DOKTER</div>
          <div class="panel-body">
            <form class="form-group" action="" method="post">
              <label for="hari">Pilih Hari</label>
              <select class="form-control" name="hari">
                <option value="senin">Senin</option>
                <option value="selasa">Selas</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
                <option value="sabtu">Sabtu</option>
                <option value="minggu">Minggu</option>
              </select>
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="username">Pilih Dokter</label>
              <select class="form-control" name="dokter">
              <?php

              foreach($getAllAdminData as $dokter) {
                echo "<option value='".$dokter['id_admin']."'>".ucfirst($dokter['nama'])."</option>";
              }
              ?>
              </select>
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="jadwaljam">Jadwal Jam</label>
              <input class="form-control" type="time" name="jadwaljam1">
              <hr style="margin-top:5px; margin-bottom:5px">
              sampai
              <hr style="margin-top:5px; margin-bottom:5px">
              <input class="form-control" type="time" name="jadwaljam2">
              <hr style="margin-top:5px; margin-bottom:5px">
              <b style="color:red"><?php if(isset($pesan)) { echo $pesan; } ?></b>
              <b style="color:green"><?php if(isset($_GET['msg'])) { echo $_GET['msg']; } ?></b>
              <hr>
              <input class="btn btn-success" type="submit" name="submitRegDokter" value="Daftarkan">
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">JADWAL DOKTER</div>
          <div class="panel-body">
            <?php
            foreach ($jadwalDokter as $jdwDokter) {
              ?>
              <h5><span style="color: blue"><?php echo ucfirst($jdwDokter['nama']); ?></span> : <time style="color: red"><?php echo ucfirst($jdwDokter['jadwal']); ?></time>
                <small><a href="?url=adminjadwaldokter&hapus=<?php echo $jdwDokter['id_jadwal']; ?>" class="glyphicon glyphicon-trash"></a></small>
              </h5>
              <hr style="margin-top:5px; margin-bottom:5px">
              <?php
            }
            ?>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
