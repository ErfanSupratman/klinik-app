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

  $sekarang = date('Y-m-d');
  $sekarang = explode('-',$sekarang);
  $tanggal = $sekarang[2];
  $bulan = $sekarang[1];
  $tahun = $sekarang[0];

  $id_pasien = $_GET['id'];
  $id_antrian = $_GET['periksa'];

  $cekRekMedis = $antriModel->cekRekMedis($id_pasien, $id_antrian, $tanggal, $bulan, $tahun, 2, 2);
  if($cekRekMedis > 0) {

  } else {
    echo "string";
    //header('location: ?url=rekammedis');
  }

  $getPasienOkToday = $antriModel->getPasienOkToday($tanggal, $bulan, $tahun, 2, 2, 2);

  if(isset($_POST['submitRekMedis'])) {
    if(empty($_POST['tensi']) || empty($_POST['rekmedis'])) {
      $pesan = 'Kolom tidak boleh dikosongkan';
    } else {
      include_once 'Model/RekmedisModel.php';
      $rekmedisModel = new RekmedisModel();

      $id_pasien = $_GET['id'];
      $tensi = $_POST['tensi'];
      $diagnosa = $_POST['rekmedis'];
      $skrng = date('Y-m-d h:i:s');

      $tambahRekmedis = $rekmedisModel->tambahRekmedis($id_pasien, $tensi, $diagnosa, 1, $skrng);
      if($tambahRekmedis > 0) {
        $id_antrian = $_GET['periksa'];
        $time_skrng = date('h:i:s');
        $ubahStatus = $antriModel->ubahStatus(2, $time_skrng, $id_antrian);
        if($ubahStatus > 0) {
          header('location: ?url=rekammedis');
        } else {
          $pesan = 'Error Query ubahStatus';
        }
      } else {
        $pesan = 'Error Query tambahRekmedis';
      }
    }
  }

  if(isset($_GET['cek'])) {
    if(empty($_GET['cek'])) {
      echo 'Pengecekan Error';
    } else {
      if($_GET['cek'] == TRUE) {
        $id_antrian = $_GET['periksa'];
        $id = $_GET['id'];
        $waktuPeriksa = date('h:i:s');
        $ubahPeriksa = $antriModel->ubahPeriksa(2, $waktuPeriksa, $id_antrian);
        if($ubahPeriksa > 0) {
          header('location: ?url=tulismedis&id='.$id.'&periksa='.$id_antrian);
        } else {
          $pesan = 'Error Query ubahPeriksa';
        }
      }
    }
  }

  include_once 'View/Tulismedis.php';

} else {
  header('location: ?url=admin');
}
?>
