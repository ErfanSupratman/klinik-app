<?php

include_once 'Model/PasienModel.php';
$pasien = new PasienModel();

if(isset($_POST['submitPendaftaran'])) {
  if(empty($_POST['nama'])||empty($_POST['tanggallahir'])
  ||empty($_POST['jeniskelamin'])||empty($_POST['nomortelepon'])||
  empty($_POST['alamat'])) {
    $pesan = 'Kolom tidak boleh kosong';
  } else {
    $nama = $_POST['nama'];
    $kelahiran = $_POST['tanggallahir'];
    $kelamin = $_POST['jeniskelamin'];
    $telpon = $_POST['nomortelepon'];
    $alamat = $_POST['alamat'];
    $insertPasien = $pasien->insertPasien($nama, $kelahiran, $kelamin, $telpon, $alamat, 1);
    echo var_dump($insertPasien);
  }
}

if(isset($_GET['after_register'])) {
  $id = $_GET['after_register'];
  $getDataById = $pasien->getDataById($id);
}

include_once 'View/Pendaftaran.php';
?>
