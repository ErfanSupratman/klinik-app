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

  include_once 'Model/JadwalModel.php';
  $jadwalModel = new JadwalModel();

  if(isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if(empty($_GET['hapus'])) {
      $pesan = 'ID Tidak TErdaftar';
    } else {
      $hapusJadwal = $jadwalModel->hapusJadwal($id);
      if($hapusJadwal > 0) {
        header('location: ?url=adminjadwaldokter&msg=Penghapusan Jadwal Berhasil!');
      } else {
          $pesan = 'Error Query hapus Jadwal';
        }
    }

  }

  include_once 'Model/AdminModel.php';
  $adminModel = new AdminModel();
  if(isset($_POST['submitRegDokter'])) {
    if(empty($_POST['dokter']) || empty($_POST['hari']) || empty($_POST['jadwaljam1']) || empty($_POST['jadwaljam2'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $idDokter = $_POST['dokter'];
      $sekarang = date('Y-m-d h:i:s');
      $jadwal = strtolower($_POST['hari']).' '.$_POST['jadwaljam1'].' Wib s/d '.$_POST['jadwaljam2'].' Wib';

      $cekJadwalById = $jadwalModel->cekJadwalById($idDokter, $jadwal);
      if($cekJadwalById > 0) {
        // Ada
        $pesan = 'Dokter pada jadwal ini sudah terdaftar';
      } else {
        // Belum Ada
        $tambahJadwal = $jadwalModel->tambahJadwal($idDokter, $jadwal, 1, $sekarang);
        if($tambahJadwal > 0) {
          header('location: ?url=adminjadwaldokter&msg=Pendaftaran Dokter Baru Berhasil!');
        } else {
          $pesan = 'Error Query tambahAdmin';
        }
      }
    }
  }

  $jadwalDokter = $jadwalModel->jadwalDokter();

  $getAllAdminData = $adminModel->getAllAdminData(2);

  include_once 'View/Adminjadwaldokter.php';
} else {
  header('location: ?url=admin');
}
?>
