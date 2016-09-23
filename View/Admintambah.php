<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Tambah Admin | Fuyi Healthouse | Acupuncture</title>
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
          <li class="active"><a href="?url=admintambah"><i class="glyphicon glyphicon-plus"></i> Tambah Admin & Dokter</a></li>
          <li><a href="?url=adminjadwaldokter"><i class="glyphicon glyphicon-calendar"></i> Jadwal Dokter</a></li>
          <li><a href="?url=adminlogout"><i class="glyphicon glyphicon-log-out"></i> Logout Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">PENDAFTARAN ADMIN BARU</div>
          <div class="panel-body">
            <form class="form-group" action="" method="post">
              <label for="namadokter">Nama</label>
              <input class="form-control" type="text" name="nama" placeholder="Ketik Nama">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="namadokter">Status</label>
              <select class="form-control" name="status">
                <option value="1">Admin</option>
                <option value="2">Dokter</option>
              </select>
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="username">Username</label>
              <input class="form-control" type="text" name="username" placeholder="Ketik Username">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" placeholder="Ketik Password">
              <hr style="margin-top:5px; margin-bottom:5px">
              <b style="color:red"><?php if(isset($pesan)) { echo $pesan; } ?></b>
              <b style="color:green"><?php if(isset($_GET['msg'])) { echo $_GET['msg']; } ?></b>
              <hr>
              <input class="btn btn-success" type="submit" name="submitRegAdmin" value="Daftarkan">
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">DATA ADMIN</div>
          <div class="panel-body">
            <?php
            foreach ($getAllAdminData as $dataAdmin) {
              ?>
              <h4><?php echo ucfirst($dataAdmin['nama']); ?> : <?php if($dataAdmin['jabatan'] == 1) { echo 'Administrator'; } elseif($dataAdmin['jabatan'] == 2) { echo 'Dokter'; }; ?>
                <small><a href="?url=admintambah&hapus=<?php echo $dataAdmin['id_admin']; ?>" class="glyphicon glyphicon-trash"></a></small>
              </h4>
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
