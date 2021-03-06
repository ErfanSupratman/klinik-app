<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dokter | Tulis Medis | Fuyi Healthouse | Acupuncture</title>
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
        <marquee style="padding-top:15px">
          <b>
            Halaman ini tidak boleh diclose atau dikeluarkan secara paksa,
            setelah rekam medis selesai ditulis dan dokter selesai memriksa dan mengobati,
            halaman akan kembali ke halaman dokter / antrian pasien.
          </b>
        </marquee>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">
            PEMERIKSAAN PASIEN -  <br>
            <?php echo strtoupper(date('l j F Y')); ?>
          </div>
          <div class="panel-body">
            <form class="form-group" action="" method="post">
              <label for="nama">Tensi Darah</label>
              <input class="form-control" type="text" name="tensi" placeholder="Ketik Tensi Darah">
              <hr style="margin-top:5px; margin-bottom:5px">
              <label for="alamat">Diagnosa / Catatan Medis</label>
              <textarea style="min-height:200px" name="rekmedis" class="form-control" placeholder="Ketik Diagnosa / Catatan Medis"></textarea>
              <hr style="margin-top:5px; margin-bottom:5px">
              <b style="color:red"><?php if(isset($pesan)) { echo $pesan; } ?></b>
              <hr>
              <input class="btn btn-success" type="submit" name="submitRekMedis" value="Arsipkan & Simpan">
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-heading" style="text-align:center">
            REKAM MEDIS PASIEN <br>
            <?php echo strtoupper(date('l j F Y')); ?>
          </div>
          <div class="panel-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            
            <?php foreach($getRekmedis as $rekamMedis) { ?>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $rekamMedis['id_rekmedis']; ?>" aria-expanded="true" aria-controls="collapseOne">
                    <?php echo $rekamMedis['sekarang']; ?>
                  </a>
                </h4>
              </div>
              <div id="collapse<?php echo $rekamMedis['id_rekmedis']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <h4>Tensi Darah : <?php echo $rekamMedis['tensi']; ?></h4>
                  <?php echo $rekamMedis['diagnosa']; ?>.
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
