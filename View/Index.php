<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fuyi Healthouse | Acupuncture</title>
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
          <li class="active"><a href="?"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
          <li><a href="?url=pendaftaran"><i class="glyphicon glyphicon-user"></i> Pendaftaran Pasien Online</a></li>
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
          <div class="panel-heading">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="Library/images/11.jpg" alt="Louhan Satu" width="100%" style="height:400px">
                  <div class="carousel-caption">
                    <h3>Louhan Satu</h3>
                    <p>Keterangan Louhan Satu</p>
                  </div>
                </div>

                <div class="item">
                  <img src="Library/images/22.jpg" alt="Louhan Dua" width="100%" style="height:400px">
                  <div class="carousel-caption">
                    <h3>Louhan Dua</h3>
                    <p>Keterangan Louhan Dua</p>
                  </div>
                </div>

                <div class="item">
                  <img src="Library/images/33.jpg" alt="Louhan Tiga" width="100%" style="height:400px">
                  <div class="carousel-caption">
                    <h3>Louhan Tiga</h3>
                    <p>Keterangan Louhan Tiga</p>
                  </div>
                </div>

                <div class="item">
                  <img src="Library/images/44.jpg" alt="Louhan Empat" width="100%" style="height:400px">
                  <div class="carousel-caption">
                    <h3>Louhan Empat</h3>
                    <p>Keterangan Louhan Empat</p>
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="panel-body" style="text-align: justify">
            <h3>TENTANG FUYI HEALTHOUSE</h3>
            Ikan Lou Han (bahasa Inggris: Flowerhorn) ikan Louhan merupakan salah
            satu ikan hias terkenal yang dipelihara di dalam akuarium karena warna sisik
            mereka yang hidup serta benjolan kepala mereka yang berbentuk khas berjuluk "benjol kelam".
            Aslinya mereka hanya berhabitat di Malaysia dan Taiwan, namun saat ini banyak dipelihra oleh
            penggemar ikan di seluruh dunia.<br>
            <h3>Asal Mula</h3>
            Progam pengembangbiakan telah dimulai sejak tahun 1993. Orang Malaysia terutama banyak yang
            mengagumi ikan dengan kepala menonjol, yang dikenal sebagai Karoi atau "kapal perang", ditemukan
            di bagian barat negara mereka. Dahi sedikit menonjol dan ekor panjang ikan ini berharga untuk
            para peminat masyarakat Taiwan sebagai tanda pembawa keberuntungan dalam geomansi. Pada tahun
            1994, iblis merah Cichlid (genus Amphilophus) yang diimpor dari Amerika Tengah ke Malaysia dan
            hasil hibrida parrot cichlid yang diimpor dari Taiwan ke Malaysia dan dibesarkan ikan ini secara
            bersamaan, menandai kelahiran ikan lou han tersebut.<br>
            Pada tahun 1995, perkawinan persilangan diadakan lebih lanjut dengan Human Face Red God of
            Fortune, yang menghasilkan jenis baru yang disebut Five-Colors God of Fortune. Karena warnanya
            yang indah, ikan ini menjadi cepat populer. Penyempurnaaan secara selektif terus berlanjut
            hingga tahun 1998, ketika Seven-Colors Blue Fiery Mouth (yang juga disebut sebagai Greenish
            Gold Tiger) yang diimpor dari Amerika Tengah, dan hasil perkawinan silangnya dengan Jin Gang
            Blood Parrot dari Taiwan. Pembelesteran ini akhirnya menghasilkan generasi pertama hibrida
            flowerhorn Hua Luo Han, yang kemudian diikuti dengan perkenalan flowerhorn berikutnya.
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
              <h4><?php echo 'dr.'.ucfirst($jdwDokter['nama'])?></h4>
              <b><?php echo ucfirst($jdwDokter['jadwal'])?></b>
              <hr>
              <?php
            }
            ?>
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
  </div>

  <script src="Library/js/jquery.min.js"></script>
  <script src="Library/js/bootstrap.min.js"></script>
</body>
</html>
