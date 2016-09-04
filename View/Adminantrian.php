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
          <li><a href="?url=pendaftaran"><i class="glyphicon glyphicon-user"></i> Data Pasien</a></li>
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
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">JADWAL DOKTER</div>
          <div class="panel-body">
            <h4>Senin</h4>
            <h5>Dr. Aaaaa : <time>07:00 s/d 12:00</time> <a href="#" class="glyphicon glyphicon-trash"></a></h5>

            <hr style="margin-top:5px; margin-bottom:5px">
            <h4>Selas</h4>
            <h5>Dr. Aaaaa : <time>07:00 s/d 12:00</time> <a href="#" class="glyphicon glyphicon-trash"></a></h5>

            <hr style="margin-top:5px; margin-bottom:5px">
            <h4>Rabu</h4>
            <h5>Dr. Aaaaa : <time>07:00 s/d 12:00</time> <a href="#" class="glyphicon glyphicon-trash"></a></h5>

            <hr style="margin-top:5px; margin-bottom:5px">
            <h4>Kamis</h4>
            <h5>Dr. Aaaaa : <time>07:00 s/d 12:00</time> <a href="#" class="glyphicon glyphicon-trash"></a></h5>

            <hr style="margin-top:5px; margin-bottom:5px">
            <h4>Jumat</h4>
            <h5>Dr. Aaaaa : <time>07:00 s/d 12:00</time> <a href="#" class="glyphicon glyphicon-trash"></a></h5>
            <hr style="margin-top:5px; margin-bottom:5px">
            <h4>Sabtu</h4>
            <h5>Dr. Aaaaa : <time>07:00 s/d 12:00</time> <a href="#" class="glyphicon glyphicon-trash"></a></h5>

            <hr style="margin-top:5px; margin-bottom:5px">
            <h4>Minggu</h4>
            <h5>Dr. Aaaaa : <time>07:00 s/d 12:00</time> <a href="#" class="glyphicon glyphicon-trash"></a></h5>

          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
