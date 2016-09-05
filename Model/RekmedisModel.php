<?php

require_once 'KoneksiModel.php';

class RekmedisModel {

  public $panggilKoneksi;
  // fungsi yang kepanggil otomatis __contstruct & __destruct

  function __construct() {
    // Construct = fungsi yang otomatis kepanggil
    // Membuat koneksi turunan dari class (file) KoneksiModel.php
    $bukaKoneksi = new KoneksiModel(); // << class dari file KoneksiModel.php
    $this->panggilKoneksi = $bukaKoneksi->KoneksiDatabase();
    return $this->panggilKoneksi;
  }

  public function asasas($username, $status) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM admin_tb WHERE username = ? AND status = ?");
    $data = array($username, $status);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function tambahRekmedis($id_pasien, $tensi, $diagnosa, $status, $sekarang) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO rekmedis_tb (id_pasien,tensi,diagnosa,status,sekarang) VALUES(?,?,?,?,?)");
    $data = array($id_pasien, $tensi, $diagnosa, $status, $sekarang);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function sasas($jabatan) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM admin_tb WHERE jabatan = ?");
    $data = array($jabatan);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }

}
