<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Pasien | Fuyi Healthouse | Acupuncture</title>
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
          <li><a href="?url=adminjadwaldokter"><i class="glyphicon glyphicon-calendar"></i> Jadwal Dokter</a></li>
          <li class="active"><a href="?url=adminpasien"><i class="glyphicon glyphicon-user"></i> Data Pasien</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a target="_blank" href="?url=admin"><i class="glyphicon glyphicon-log-out"></i> Logout Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="panel panel-info">
        <div class="panel-heading" style="text-align:center">DATA ANTRIAN PASIEN</div>
        <div class="panel-body">
          <table class="table table-responsive">
            <tr>
              <th>ID Pasien</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Umur</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>Edit</th>
            </tr>
            <tr>
              <td>1234567</td>
              <td>Darja</td>
              <td>2 Desember 2016</td>
              <td>20 Tahun</td>
              <td>081688883873</td>
              <td>Jl. Pondok Hidup</td>
              <td><a  type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info" href="#">Edit</a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <form class="form-group" action="" method="post">
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
    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
