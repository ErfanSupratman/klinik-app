<?php

session_start();
if(isset($_SESSION['admin'])) {
  $sessi = explode('#', $_SESSION['admin']);
  $sessiId = $sessi[0];
  $sessiSt = $sessi[1];

  if($sessiSt == 1) {
    header('location: ?url=adminantrian');
  } else {
    //header('location: ?url=rekammedis');
  }

  include_once 'Model/AntriModel.php';
  $antriModel = new AntriModel();

  include_once 'Model/PasienModel.php';
  $pasienModel = new PasienModel();

  $sekarang = date('Y-m-d');
  $sekarang = explode('-',$sekarang);
  $tanggal = $sekarang[2];
  $bulan = $sekarang[1];
  $tahun = $sekarang[0];

  $dokterGetPasienByHariIni = $antriModel->getPasienOkToday($tanggal, $bulan, $tahun, 2, 1, 1);

  $getPasienOkToday = $antriModel->getPasienOkToday($tanggal, $bulan, $tahun, 2, 2, 2);

  foreach ($dokterGetPasienByHariIni as $pasienId) {
    $getDataById = $pasienModel->getDataById($pasienId['id_pasien']);
    foreach ($getDataById as $value) {
      $nama[] = $value;
    }
  }

  include_once 'View/Rekammedis.php';

} else {
  header('location: ?url=admin');
}
?>
