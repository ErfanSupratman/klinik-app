<?php

require_once 'KoneksiModel.php';

class PasienModel {

  public $panggilKoneksi;
  // fungsi yang kepanggil otomatis __contstruct & __destruct

  function __construct() {
    // Construct = fungsi yang otomatis kepanggil
    // Membuat koneksi turunan dari class (file) KoneksiModel.php
    $bukaKoneksi = new KoneksiModel(); // << class dari file KoneksiModel.php
    $this->panggilKoneksi = $bukaKoneksi->KoneksiDatabase();
    return $this->panggilKoneksi;
  }

  public function tambahPasien($nama, $kelahiran, $kelamin, $telpon, $alamat, $status, $sekarang) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO pasien_tb (nama,kelahiran,kelamin,telpon,alamat,status_pasien,sekarang) VALUES(?,?,?,?,?,?,?)");
    $data = array($nama, $kelahiran, $kelamin, $telpon, $alamat, $status, $sekarang);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function getLastId() {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM pasien_tb ORDER BY id_pasien DESC LIMIT 1");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
  }

  public function getDataById($id) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM pasien_tb WHERE id_pasien = ?");
    $data = array($id);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }

  public function getDataPasien() {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM pasien_tb WHERE status_pasien = 1");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
  }

  public function getDataByTelpon($telpon) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM pasien_tb WHERE telpon = ?");
    $data = array($telpon);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function cekDataById($id) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM pasien_tb WHERE id_pasien = ?");
    $data = array($id);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function ubahPasien($nama, $kelahiran, $kelamin, $telpon, $alamat, $id_pasien) {
    $query = $this->panggilKoneksi->prepare("UPDATE pasien_tb SET nama = ?, kelahiran = ?, kelamin = ?, telpon = ?, alamat = ? WHERE id_pasien = ?");
    $data = array($nama, $kelahiran, $kelamin, $telpon, $alamat, $id_pasien);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }
}
