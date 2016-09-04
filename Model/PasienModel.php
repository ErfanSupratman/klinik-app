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

  public function insertPasien($nama, $kelahiran, $kelamin, $telpon, $alamat, $status) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO pasien_tb (nama,kelahiran,kelamin,telpon,alamat,status) VALUES(?,?,?,?,?,?)");
    $data = array($nama, $kelahiran, $kelamin, $telpon, $alamat, $status);
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

  //

  public function updatePenyakit($nama_penyakit, $penyebab, $keterangan, $photo, $solusi, $id) {
    $query = $this->panggilKoneksi->prepare("UPDATE penyakit_tb SET nama_penyakit = ?, penyebab = ?, keterangan = ?, photo = ?, solusi = ? WHERE id_penyakit = ?");
    $data = array($nama_penyakit, $penyebab, $keterangan, $photo, $solusi, $id);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function hapusPenyakit($id_penyakit) {
    $query = $this->panggilKoneksi->prepare("DELETE FROM penyakit_tb WHERE id_penyakit = ?");
    $data = array($id_penyakit);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function dataPenyakit() {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM penyakit_tb");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
  }

  public function dataPenyakitBy($id_penyakit) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM penyakit_tb WHERE id_penyakit = ?");
    $data = array($id_penyakit);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }
}
