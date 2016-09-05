<?php

include_once 'Model/PasienModel.php';
$pasienModel = new PasienModel();

include_once 'Model/AntriModel.php';
$antriModel = new AntriModel();

if(isset($_POST['submitPendaftaran'])) {
  if(empty($_POST['nama']) || empty($_POST['tanggallahir']) ||
  empty($_POST['jeniskelamin']) || empty($_POST['nomortelepon']) ||
  empty($_POST['alamat'])) {
    $pesan = 'Kolom tidak boleh kosong';
  } else {
    $nama = $_POST['nama'];
    $kelahiran = $_POST['tanggallahir'];
    $kelamin = $_POST['jeniskelamin'];
    $telpon = $_POST['nomortelepon'];
    $alamat = $_POST['alamat'];
    $sekarang = date('Y-m-d h:i:s');

    $getDataByTelpon = $pasienModel->getDataByTelpon($telpon);
    if($getDataByTelpon > 0) {
      $pesan = 'Data sudah ada dengan nomor telpon'.$telpon;
    } else {
      $insertPasien = $pasienModel->tambahPasien($nama, $kelahiran, $kelamin, $telpon, $alamat, 1, $sekarang);
      if($insertPasien > 0) {
        $getLastId = $pasienModel->getLastId();
        $lastId = $getLastId[0]['id_pasien'];
        header('location: ?url=pendaftaran&after_register='.$lastId);
      } else {
        $pesan = 'Error Query insertPasien';
      }
    }
  }
}

if(isset($_GET['after_register'])) {
  $id = $_GET['after_register'];
  $getDataById = $pasienModel->getDataById($id);
}

if(isset($_POST['submitAntrianModal'])) {
  if(empty($_POST['idpasien']) || empty($_POST['tanggalkunjungan'])) {
    $pesanModal = 'Form tidak boleh kosong';
  } else {
    $id_pasien = $_POST['idpasien'];
    $kunjungan = $_POST['tanggalkunjungan'];
    $kunjungan = explode('/',$kunjungan);
    $bulan = $kunjungan[0];
    $tanggal = $kunjungan[1];
    $tahun = $kunjungan[2];
    $sekarang = date('Y-m-d h:i:s');

    $getLastNoAntri = $antriModel->getLastNoAntri($tanggal, $bulan, $tahun, 1);
    if(empty($getLastNoAntri)) {
      $no_antrian = 1;
    } else {
      $no_antrian = $getLastNoAntri[0]['no_antrian']+1;
    }

    $tambahAntrian = $antriModel->tambahAntrian($id_pasien, $no_antrian, $tanggal, $bulan, $tahun, 1, 1, 1, $sekarang);
    if($tambahAntrian > 0) {
      header('location: ?url=pendaftaran&after_reg_antri='.$id_pasien.'&tanggal='.$tanggal.'&bulan='.$bulan.'&tahun='.$tahun);
    } else {
      echo $pesan = 'Error Query tambahAntrian';
    }
  }
}

if(isset($_GET['after_reg_antri'])) {
  $id_pasien = $_GET['after_reg_antri'];
  $bulan = $_GET['bulan'];
  $tanggal = $_GET['tanggal'];
  $tahun = $_GET['tahun'];

  $getDataByIdModal = $pasienModel->getDataById($id_pasien);

  $getAntriByIdModal = $antriModel->getAntriBy($id_pasien, $tanggal, $bulan, $tahun, 1);
}

if(isset($_POST['submitAntrian'])) {
  if(empty($_POST['idpasien']) || empty($_POST['tanggalkunjungan'])) {
    $pesanAntri = 'Form tidak boleh kosong';
  } else {
    $id_pasien = $_POST['idpasien'];
    $kunjungan = $_POST['tanggalkunjungan'];
    $kunjungan = explode('/',$kunjungan);
    $bulan = $kunjungan[0];
    $tanggal = $kunjungan[1];
    $tahun = $kunjungan[2];

    $cekDataById = $pasienModel->cekDataById($id_pasien);
    if($cekDataById > 0) {
      $getLastNoAntri = $antriModel->getLastNoAntri($tanggal, $bulan, $tahun, 1);
      $no_antrian = $getLastNoAntri[0]['no_antrian']+1;

      $tambahAntrian = $antriModel->tambahAntrian($id_pasien, $no_antrian, $tanggal, $bulan, $tahun, 1, 1, 1, $sekarang);
      if($tambahAntrian > 0) {
        header('location: ?url=pendaftaran&after_reg_antri='.$id_pasien.'&tanggal='.$tanggal.'&bulan='.$bulan.'&tahun='.$tahun);
      } else {
        $pesan = 'Error Query tambahAntrian';
      }
    } else {
      $pesanAntri = 'ID Belum Terdaftar, silahkan daftar dahulu pada tab sebelah kiri.';
    }
  }
}

include_once 'View/Pendaftaran.php';
?>
