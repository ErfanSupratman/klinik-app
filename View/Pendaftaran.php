<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pendaftaran | Fuyi Healthouse | Acupuncture</title>
  <link href="Library/css/bootstrap.min.css" rel="stylesheet">
  <link href="Library/css/navbar-fixed-top.css" rel="stylesheet">
  <link href="Library/css/jquery-ui.css" rel="stylesheet">
  <style media="screen">
  .modal {
    display:block;
    background-color: black;
  }
  </style>
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
          <li><a href="?"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
          <li class="active"><a href="?url=pendaftaran"><i class="glyphicon glyphicon-user"></i> Pendaftaran Pasien Online</a></li>
          <li><a href="?url=alamatkontak"><i class="glyphicon glyphicon-map-marker"></i> Alamat & Kontak</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a target="_blank" href="?url=admin"><i class="glyphicon glyphicon-user"></i> Login Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">PENDAFTARAN PASIEN BARU</div>
          <div class="panel-body">
            <form class="form-group" action="" method="post">
              <label for="nama">Nama</label>
              <input class="form-control" type="text" name="nama" placeholder="Ketik Nama Anda">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="tanggallahir">Tanggal Lahir</label>
              <input class="form-control" type="text" id="datepicker1" name="tanggallahir" placeholder="Pilih tanggal lahir">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="jeniskelamin">Jenis Kelamin</label>
              <select class="form-control" name="jeniskelamin">
                <option value="1">Pria</option>
                <option value="2">Wanita</option>
              </select>
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="nomortelepon">Nomor Telepon</label>
              <input class="form-control" type="tel" name="nomortelepon" placeholder="Ketik Nomor Telepon Anda">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" placeholder="Ketik Alamat Anda"></textarea>
              <hr style="margin-top:5px; margin-bottom:5px">
              <b style="color:red"><?php if(isset($pesan)) { echo $pesan; } ?></b>
              <hr>
              <input class="btn btn-success" type="submit" name="submitPendaftaran" value="Daftarkan">
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">AMBIL ANTRIAN PASIEN TERDAFTAR</div>
          <div class="panel-body">
            <form class="form-group" action="" method="post">
              <label for="nama">Nomor ID Pasien Fuyi</label>
              <input class="form-control" type="text" name="idpasien" placeholder="Ketik ID Pasien Fuyi Anda">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="tanggalkunjungan">Tanggal Kunjungan / Berobat</label>
              <input class="form-control" type="text" id="datepicker2" name="tanggalkunjungan" placeholder="Pilih tanggal kunjungan">
              <hr style="margin-top:5px; margin-bottom:5px">
              <b style="color:red"><?php if(isset($pesanAntri)) { echo $pesanAntri; } ?></b>
              <hr>
              <input class="btn btn-info" type="submit" name="submitAntrian" value="Ambil Antrian">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="alert alert-info" style="margin-bottom: 0px;">
        <center>
          FUYI HEALTHOUSE INFO : pengobatan alternative
        </center>
      </div>
    </div>

    <?php
    if(isset($_GET['after_register'])) {
      foreach ($getDataById as $pasienData) {
        ?>
        <div class="modal fade in" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">AMBIL ANTRIAN PASIEN TERDAFTAR</h4>
              </div>
              <div class="modal-body">
                <form class="form-group" action="" method="post">
                  <label for="idpasien">Nomor ID Pasien Fuyi</label>
                  <input class="form-control" type="text" name="idpasien" value="<?php echo $pasienData['id_pasien']; ?>">
                  <hr style="margin-top:5px; margin-bottom:5px">
                  <label for="tanggalkunjungan">Tanggal Kunjungan / Berobat</label>
                  <input class="form-control" type="text" id="datepicker3" name="tanggalkunjungan" placeholder="Pilih tanggal kunjungan">
                  <hr style="margin-top:5px; margin-bottom:5px">
                  <b style="color:red"><?php if(isset($pesanModal)) { echo $pesanModal; } ?></b>
                  <hr>
                  <input class="btn btn-info" type="submit" name="submitAntrianModal" value="Ambil Antrian">
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
    } ?>

    <?php
    if(isset($_GET['after_reg_antri'])) {
      foreach ($getDataByIdModal as $pasienDataModal) {
        ?>
        <div id="printableArea" class="modal fade in" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" style="text-align:center">ANTRIAN FUYI HEALTHOUSE</h4>
              </div>
              <div class="modal-body">
                <label>Nomor ID Pasien Fuyi</label>
                <h4><?php echo $pasienDataModal['id_pasien']; ?></h4>
                <hr style="margin-top:5px; margin-bottom:5px">
                <label>Nama</label>
                <h4><?php echo $pasienDataModal['nama']; ?></h4>
                <hr style="margin-top:5px; margin-bottom:5px">
                <label>Nomor Telepon</label>
                <h4><?php echo $pasienDataModal['telpon']; ?></h4>
                <hr style="margin-top:5px; margin-bottom:5px">
                <label>Alamat</label>
                <h4><?php echo $pasienDataModal['alamat']; ?></h4>
                <?php
              }
              ?>
              <?php
              foreach ($getAntriByIdModal as $atr) {
                ?>
                <label style="color: red; font-weight:bold">Antrian</label>
                <h4 style="color: red; font-weight:bold"><?php echo 'Nomor '.$atr['no_antrian'].' pada tanggal <time>'.$atr['tanggal'].' - '.$atr['bulan'].' - '.$atr['tahun'].'</time>'; ?></h4>
              </div>
              <div class="modal-footer">
                <button class="btn btn-info" type="button" onclick="printDiv('printableArea')"><i class="glyphicon glyphicon-print"></i> Print</button>
                <a href="?" class="btn btn-danger" data-dismiss="modal">Selesai</a>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
    }
    ?>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/jquery-ui.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
  <script>
  function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
  }
  </script>
  <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  $( function() {
    $( "#datepicker3" ).datepicker();
  } );
  </script>
</body>
</html>
