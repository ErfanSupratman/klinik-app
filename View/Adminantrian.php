<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Antrian Pasien | Fuyi Healthouse | Acupuncture</title>
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
          <li class="active"><a href="?url=adminantrian"><i class="glyphicon glyphicon-user"></i> Antrian Pasien</a></li>
          <li><a href="?url=adminjadwaldokter"><i class="glyphicon glyphicon-calendar"></i> Jadwal Dokter</a></li>
          <li><a href="?url=adminpasien"><i class="glyphicon glyphicon-user"></i> Data Pasien</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a target="_blank" href="?url=admin"><i class="glyphicon glyphicon-log-out"></i> Logout Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">DATA ANTRIAN PASIEN</div>
          <div class="panel-body">
            <table class="table table-responsive">
              <tr>
                <th>No.Antrian</th>
                <th>Nama</th>
                <th>Tanggal Kunjunagn</th>
                <th>Datang</th>
                <th>Periksa</th>
                <th>Selesai</th>
              </tr>
              <tr>
                <th>1</th>
                <th>Darja</th>
                <th>2 Desember 2016</th>
                <th><a class="btn btn-success" href="#">Pasien Datang</a></th>
                <th><i class="glyphicon glyphicon-ok"></i></th>
                <th><i class="glyphicon glyphicon-ok"></i></th>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">PASIEN TERTANGANI</div>
          <div class="panel-body">
            <h5><a href="#">ID:123456</a> - Ibu. Aaaaa : <time>07:00 s/d 12:00</time>></h5>
            <h5><a href="#">ID:123456</a> - Ibu. Aaaaa : <time>07:00 s/d 12:00</time>></h5>
            <h5><a href="#">ID:123456</a> - Ibu. Aaaaa : <time>07:00 s/d 12:00</time>></h5>
            <h5><a href="#">ID:123456</a> - Ibu. Aaaaa : <time>07:00 s/d 12:00</time>></h5>
            <h5><a href="#">ID:123456</a> - Ibu. Aaaaa : <time>07:00 s/d 12:00</time>></h5>
            <h5><a href="#">ID:123456</a> - Ibu. Aaaaa : <time>07:00 s/d 12:00</time>></h5>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
