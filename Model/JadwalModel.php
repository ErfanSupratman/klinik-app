<?php

require_once 'KoneksiModel.php';

class JadwalModel {

  public $panggilKoneksi;
  // fungsi yang kepanggil otomatis __contstruct & __destruct

  function __construct() {
    // Construct = fungsi yang otomatis kepanggil
    // Membuat koneksi turunan dari class (file) KoneksiModel.php
    $bukaKoneksi = new KoneksiModel(); // << class dari file KoneksiModel.php
    $this->panggilKoneksi = $bukaKoneksi->KoneksiDatabase();
    return $this->panggilKoneksi;
  }

  public function tambahJadwal($id_dokter, $jadwal, $status_jadwal, $sekarang_jadwal) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO jadwal_dokter_tb (id_dokter,jadwal,status_jadwal,sekarang_jadwal) VALUES(?,?,?,?)");
    $data = array($id_dokter, $jadwal, $status_jadwal, $sekarang_jadwal);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function cekJadwalById($id, $jadwal) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM jadwal_dokter_tb WHERE id_dokter = ? AND jadwal = ?");
    $data = array($id, $jadwal);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function jadwalDokter() {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM jadwal_dokter_tb, admin_tb WHERE jadwal_dokter_tb.`id_dokter` = admin_tb.`id_admin` AND status_jadwal = 1");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
  }

  public function hapusJadwal($idJadwal) {
    $query = $this->panggilKoneksi->prepare("UPDATE jadwal_dokter_tb SET status_jadwal = 2 WHERE id_jadwal = ?");
    $data = array($idJadwal);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

}
