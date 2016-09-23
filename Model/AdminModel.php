\<?php

require_once 'KoneksiModel.php';

class AdminModel {

  public $panggilKoneksi;
  // fungsi yang kepanggil otomatis __contstruct & __destruct

  function __construct() {
    // Construct = fungsi yang otomatis kepanggil
    // Membuat koneksi turunan dari class (file) KoneksiModel.php
    $bukaKoneksi = new KoneksiModel(); // << class dari file KoneksiModel.php
    $this->panggilKoneksi = $bukaKoneksi->KoneksiDatabase();
    return $this->panggilKoneksi;
  }

  public function loginCek($username, $password) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM admin_tb WHERE username = ? AND password = ?");
    $data = array($username, $password);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function loginData($username, $password) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM admin_tb WHERE username = ? AND password = ?");
    $data = array($username, $password);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }

  public function cekAdminByUsername($username, $status) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM admin_tb WHERE username = ? AND status = ?");
    $data = array($username, $status);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function tambahAdmin($nama, $username, $password, $jabatan, $status, $sekarang) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO admin_tb (nama,username,password,jabatan,status,sekarang) VALUES(?,?,?,?,?,?)");
    $data = array($nama, $username, $password, $jabatan, $status, $sekarang);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function getAllAdminData($jabatan) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM admin_tb WHERE jabatan = ?");
    $data = array($jabatan);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }

}
