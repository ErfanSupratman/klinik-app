<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alamat & Kontak | Fuyi Healthouse | Acupuncture</title>
  <link href="Library/css/bootstrap.min.css" rel="stylesheet">
  <link href="Library/css/navbar-fixed-top.css" rel="stylesheet">
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
  function initialize() {
    var mapProp = {
      center:new google.maps.LatLng(51.508742,-0.120850),
      zoom:5,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
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
          <li><a href="?url=pendaftaran"><i class="glyphicon glyphicon-user"></i> Pendaftaran Pasien Online</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a target="_blank" href="?url=admin"><i class="glyphicon glyphicon-user"></i> Login Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div id="googleMap" src="" width="100%" height="300px"></div>
        </div>
        <div class="panel-body" style="text-align: justify">
          <h3>ALAMAT</h3>
          <i class="glyphicon glyphicon-map-marker"></i> Jalan Bumi Serpong Damai. 1 Nomor 1<br>
          <h3>TELEPON</h3>
          <i class="glyphicon glyphicon-phone"></i> (021) 747 00 3232
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
