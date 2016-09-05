<?php
session_start();
if(isset($_SESSION['admin'])) {
  $sessi = explode('#', $_SESSION['admin']);
  $sessiId = $sessi[0];
  $sessiSt = $sessi[1];

  if($sessiSt == 1) {
    header('location: ?url=adminantrian');
  } else {
    header('location: ?url=rekammedis');
  }
} else {
  if(isset($_POST['submitLogin'])) {
    if(empty($_POST['username']) || empty($_POST['password'])) {
      $pesan = 'Harap isi username dan password';
    } else {
      include_once 'Model/AdminModel.php';
      $adminModel = new AdminModel();
      $username = $_POST['username'];
      $password = sha1($_POST['password']);

      $loginCek = $adminModel->loginCek($username, $password);
      if($loginCek > 0) {
        $loginData = $adminModel->loginData($username, $password);
        foreach ($loginData as $dataAdmin) {
          $_SESSION['admin'] = $dataAdmin['id_admin'].'#'.$dataAdmin['status'];
          if($dataAdmin['status'] == 1) {
            header('location: ?url=adminantrian');
          } else {
            echo "string";
            //header('location: ?url=rekammedis');
          }
        }
      } else {
        $pesan = 'Usernam & Password Salah';
      }
    }
  }
  include_once 'View/Admin.php';
}
?>
