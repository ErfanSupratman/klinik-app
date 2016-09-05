<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dokter | Periksa Pasien | Fuyi Healthouse | Acupuncture</title>
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
          <li class="active"><a href="?url=rekammedis"><i class="glyphicon glyphicon-bookmark"></i> Rekam Medis</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?url=adminlogout"><i class="glyphicon glyphicon-log-out"></i> Logout Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">
            DATA ANTRIAN PASIEN <br>
            <?php echo strtoupper(date('l j F Y')); ?>
          </div>
          <div class="panel-body">
            <table class="table table-responsive">
              <tr>
                <th>No.Antrian</th>
                <th>Nama</th>
                <th>Datang</th>
                <th>Periksa</th>
                <th>Selesai</th>
              </tr>
              <?php
              foreach ($dokterGetPasienByHariIni as $antriHArian) {
                ?>
                <tr>
                  <th><?php echo  $antriHArian['no_antrian']?></th>
                  <th><?php echo  ucfirst($antriHArian['nama'])?></th>
                  <th><i style="font-size:30px; color: blue;" class="glyphicon glyphicon-ok"></i></th>
                  <th>
                    <?php
                    if($antriHArian['periksa'] == 1) {
                      echo '<a class="btn btn-warning" href="?url=tulismedis&id='.$antriHArian['id_pasien'].'&periksa='.$antriHArian['id_antrian'].'&cek=true">Periksa Pasien</a>';
                    } else {
                      echo '<a href="?url=tulismedis&id='.$antriHArian['id_pasien'].'&periksa='.$antriHArian['id_antrian'].'"><img src="Library/images/default.gif"></a>';
                    }
                    ?>
                  </th>
                  <th>
                    <?php
                    if($antriHArian['status'] == 1) {
                      echo '<i style="font-size:30px; color: red" class="glyphicon glyphicon-thumbs-down"></i>';
                    } else {
                      echo '<i style="font-size:30px; color: blue;" class="glyphicon glyphicon-thumbs-up">';
                    }?>
                  </th>
                </tr>
                <?php
              }
              ?>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">
            PASIEN TERTANGANI HARI INI <br>
            <?php echo strtoupper(date('l j F Y')); ?>
          </div>
          <div class="panel-body">
            <?php
            foreach ($getPasienOkToday as $todayPas) {
              ?>
              <h5><a href="#">ID:<?php echo  $todayPas['id_pasien']?></a> - <?php echo  $todayPas['nama']?> : <time><?php echo  $todayPas['waktu_periksa']?> s/d <?php echo  $todayPas['waktu_selesai']?></time>></h5>
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
