<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pendaftaran | Fuyi Healthouse | Acupuncture</title>
  <link href="Library/css/bootstrap.min.css" rel="stylesheet">
  <link href="Library/css/navbar-fixed-top.css" rel="stylesheet">
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
            <form class="form-group" action="index.html" method="post">
              <label for="nama">Nama</label>
              <input class="form-control" type="text" name="nama" placeholder="Ketik Nama Anda">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="tanggallahir">Tanggal Lahir</label>
              <input class="form-control" type="date" name="tanggallahir">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="jeniskelamin">Jenis Kelamin</label>
              <select class="form-control" name="jeniskelamin">
                <option>Pria</option>
                <option>Wanita</option>
              </select>
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="nomortelepon">Nomor Telepon</label>
              <input class="form-control" type="tel" name="nomortelepon" placeholder="Ketik Nomor Telepon Anda">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" placeholder="Ketik Alamat Anda"></textarea>
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
            <form class="form-group" action="index.html" method="post">
              <label for="nama">Nomor ID Pasien Fuyi</label>
              <input class="form-control" type="text" name="nama" placeholder="Ketik ID Pasien Fuyi Anda">
              <hr style="margin-top:5px; margin-bottom:5px">
              <center>ATAU</center>
              <label for="nama">Nomor Telepon</label>
              <input class="form-control" type="text" name="nama" placeholder="Ketik Nomor Telepon Yang Pernah DIdaftarkan">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="tanggalkunjungan">Tanggal Kunjungan / Berobat</label>
              <input class="form-control" type="date" name="tanggalkunjungan">
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

    <?php if(isset($_GET['a'])) { ?>
      <div class="modal fade in" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">AMBIL ANTRIAN PASIEN TERDAFTAR</h4>
            </div>
            <div class="modal-body">
              <form class="form-group" action="index.html" method="post">
                <label for="nama">Nomor ID Pasien Fuyi</label>
                <input class="form-control" type="text" name="nama" placeholder="Ketik ID Pasien Fuyi Anda">
                <hr style="margin-top:5px; margin-bottom:5px">
                <center>ATAU</center>
                <label for="nama">Nomor Telepon</label>
                <input class="form-control" type="text" name="nama" placeholder="Ketik Nomor Telepon Yang Pernah DIdaftarkan">
                <hr style="margin-top:5px; margin-bottom:5px">
                <label for="tanggalkunjungan">Tanggal Kunjungan / Berobat</label>
                <input class="form-control" type="date" name="tanggalkunjungan">
                <hr>
                <input class="btn btn-info" type="submit" name="submitAntrian" value="Ambil Antrian">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <?php if(isset($_GET['b'])) { ?>
        <div class="modal fade in" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align:center">ANTRIAN</h4>
              </div>
              <div class="modal-body">
                  <label>Nomor ID Pasien Fuyi</label>
                  <h4>123456</h4>
                  <hr style="margin-top:5px; margin-bottom:5px">
                  <label>Nama</label>
                  <h4>Darja</h4>
                  <hr style="margin-top:5px; margin-bottom:5px">
                  <label>Nomor Telepon</label>
                  <h4>081656777267</h4>
                  <hr style="margin-top:5px; margin-bottom:5px">
                  <label>Alamat</label>
                  <h4>Jl. aksjaskaskaskh</h4>
                  <label style="color: red; font-weight:bold">Antrian</label>
                  <h4 style="color: red; font-weight:bold">Nomor 1 pada tanggal <time>12 Desember 2016</time></h4>
              </div>
              <div class="modal-footer">
                <a href="?" class="btn btn-danger" data-dismiss="modal">Selesai</a>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
  </div>



  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
