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

  public function tambahRekmedis($id_pasien, $tensi, $diagnosa, $status, $sekarang) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO rekmedis_tb (id_pasien,tensi,diagnosa,status,sekarang) VALUES(?,?,?,?,?)");
    $data = array($id_pasien, $tensi, $diagnosa, $status, $sekarang);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function getRekmedis($id) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM rekmedis_tb WHERE id_pasien = ?");
    $data = array($id);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }
}
