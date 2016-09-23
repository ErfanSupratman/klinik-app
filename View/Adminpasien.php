<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Pasien | Fuyi Healthouse | Acupuncture</title>
  <link href="Library/css/bootstrap.min.css" rel="stylesheet">
  <link href="Library/css/navbar-fixed-top.css" rel="stylesheet">
  <link href="Library/css/jquery-ui.css" rel="stylesheet">
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
          <li class="active"><a href="?url=adminpasien"><i class="glyphicon glyphicon-user"></i> Data Pasien</a></li>
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
      <div class="panel panel-info">
        <div class="panel-heading" style="text-align:center">DATA PASIEN</div>
        <div class="panel-body">
          <table class="table table-responsive">
            <tr>
              <th>ID Pasien</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>Edit</th>
            </tr>
            <?php
            foreach ($getDataPasien as $pasien) {
              ?>
              <tr>
                <td><?php echo $pasien['id_pasien'] ?></td>
                <td><?php echo $pasien['nama'] ?></td>
                <td><?php echo $pasien['kelahiran'] ?></td>
                <td><?php echo $pasien['telpon'] ?></td>
                <td><?php echo $pasien['alamat'] ?></td>
                <td><a  type="button" data-toggle="modal" data-target="#myModal<?php echo $pasien['id_pasien'] ?>" class="btn btn-info" href="#">Edit</a></td>
              </tr>
              <?php
            }
            ?>
          </table>
          <b style="color:red; text-align:center"><?php if(isset($pesan)) { echo $pesan; } ?></b>
        </div>
      </div>
    </div>

    <?php
    foreach ($getDataPasien as $pasienModal) {
      ?>
      <div class="modal fade" id="myModal<?php echo $pasienModal['id_pasien'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Ubah Data Pasien</h4>
            </div>
            <div class="modal-body">
              <form class="form-group" action="" method="post">
                <label for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" value="<?php echo $pasienModal['nama'] ?>">
                <hr style="margin-top:5px; margin-bottom:5px">
                <label for="tanggallahir">Tanggal Lahir</label>
                <input class="form-control" type="text" id="datepicker" name="tanggallahir" value="<?php echo $pasienModal['kelahiran'] ?>">
                <hr style="margin-top:5px; margin-bottom:5px">
                <label for="jeniskelamin">Jenis Kelamin</label>
                <select class="form-control" name="jeniskelamin">
                  <?php
                  if($pasienModal['kelamin'] == 1) {
                    echo '<option value="1" selected>Pria</option><option value="2">Wanita</option>';
                  } else {
                    echo '<option value="1">Pria</option><option value="2" selected>Wanita</option>';
                  }
                  ?>
                </select>
                <hr style="margin-top:5px; margin-bottom:5px">
                <label for="nomortelepon">Nomor Telepon</label>
                <input class="form-control" type="tel" name="nomortelepon" value="<?php echo $pasienModal['telpon'] ?>">
                <hr style="margin-top:5px; margin-bottom:5px">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control"><?php echo $pasienModal['alamat'] ?></textarea>
                <input type="hidden" name="id" value="<?php echo $pasienModal['id_pasien'] ?>">
                <hr>
                <input class="btn btn-info" type="submit" name="submitUbahPasien" value="Ubah Data Pasien">
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
  <script src="Library/js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</body>
</html>
