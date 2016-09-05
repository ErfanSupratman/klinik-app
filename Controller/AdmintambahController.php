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

  include_once 'Model/AdminModel.php';
  $adminModel = new AdminModel();

  if(isset($_POST['submitRegAdmin'])) {
    if(empty($_POST['nama']) || empty($_POST['username']) || empty($_POST['password'])) {
      $pesan = 'Kolom tidak boleh kosong';
    } else {
      $nama = $_POST['nama'];
      $username = $_POST['username'];
      $password = sha1($_POST['password'], TRUE);
      $sekarang = date('Y-m-d h:i:s');

      $cekAdminByUsername = $adminModel->cekAdminByUsername($username, 1);
      if($cekAdminByUsername > 0) {
        // Ada
        $pesan = 'Username sudah terdaftar';
      } else {
        // Belum Ada
        $tambahAdmin = $adminModel->tambahAdmin($nama, $username, $password, 1, null, 1, $sekarang);
        if($tambahAdmin > 0) {
          header('location: ?url=admintambah&msg=Pendaftaran Admin Baru Berhasil!');
        } else {
          $pesan = 'Error Query tambahAdmin';
        }
      }
    }
  }

  $getAllAdminData = $adminModel->getAllAdminData(1);

  include_once 'View/Admintambah.php';

} else {
  header('location: ?url=admin');
}
?>
