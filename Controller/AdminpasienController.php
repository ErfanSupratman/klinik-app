<?php

session_start();
if(isset($_SESSION['admin'])) {
  $sessi = explode('#', $_SESSION['admin']);
  $sessiId = $sessi[0];
  $sessiSt = $sessi[1];

  if($sessiSt == 1) {
    //header('location: ?url=adminantrian');
  } else {
    header('location: ?url=rekammedis');
  }

  include_once 'Model/PasienModel.php';
  $pasienModel = new PasienModel();

  $getDataPasien = $pasienModel->getDataPasien();

  if(isset($_POST['submitUbahPasien'])) {
    if(empty($_POST['id']) || empty($_POST['nama']) || empty($_POST['tanggallahir']) || empty($_POST['jeniskelamin'])
    || empty($_POST['nomortelepon']) || empty($_POST['alamat'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $id_pasien = $_POST['id'];
      $nama = $_POST['nama'];
      $kelahiran = $_POST['tanggallahir'];
      $kelamin = $_POST['jeniskelamin'];
      $telpon = $_POST['nomortelepon'];
      $alamat = $_POST['alamat'];

      $ubahPasien = $pasienModel->ubahPasien($nama, $kelahiran, $kelamin, $telpon, $alamat, $id_pasien);
      if($ubahPasien > 0) {
        header('location: ?url=adminpasien&ok');
      } else {
        $pesan = 'Error Query ubahPasien';
      }
    }
  }

  include_once 'View/Adminpasien.php';
} else {
  header('location: ?url=admin');
}
?>
