<?php

require_once 'KoneksiModel.php';

class AntriModel {

  public $panggilKoneksi;
  // fungsi yang kepanggil otomatis __contstruct & __destruct

  function __construct() {
    // Construct = fungsi yang otomatis kepanggil
    // Membuat koneksi turunan dari class (file) KoneksiModel.php
    $bukaKoneksi = new KoneksiModel(); // << class dari file KoneksiModel.php
    $this->panggilKoneksi = $bukaKoneksi->KoneksiDatabase();
    return $this->panggilKoneksi;
  }

  public function getLastNoAntri($tanggal, $bulan, $tahun, $status) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM antrian_tb WHERE tanggal = ? AND bulan = ? AND tahun = ? AND status = ? ORDER BY no_antrian DESC LIMIT 1");
    $data = array($tanggal, $bulan, $tahun, $status);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }

  public function tambahAntrian($id_pasien, $no_antrian, $tanggal, $bulan, $tahun, $datang, $periksa, $status, $sekarang) {
    $query = $this->panggilKoneksi->prepare("INSERT INTO antrian_tb (id_pasien,no_antrian,tanggal,bulan,tahun,datang,periksa,status,sekarang) VALUES(?,?,?,?,?,?,?,?,?)");
    $data = array($id_pasien, $no_antrian, $tanggal, $bulan, $tahun, $datang, $periksa, $status, $sekarang);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function getAntriBy($id_pasien, $tanggal, $bulan, $tahun, $status) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM antrian_tb WHERE id_pasien = ? AND tanggal = ? AND bulan = ? AND tahun = ? AND status = ?");
    $data = array($id_pasien, $tanggal, $bulan, $tahun, $status);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }

  public function getAntriByHariIni($tanggal, $bulan, $tahun) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM antrian_tb, pasien_tb WHERE tanggal = ? AND bulan = ? AND tahun = ? AND pasien_tb.`id_pasien` = antrian_tb.`id_pasien`");
    $data = array($tanggal, $bulan, $tahun);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }

  public function getPasienOkToday($tanggal, $bulan, $tahun, $datang, $periksa, $status) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM antrian_tb, pasien_tb WHERE tanggal = ? AND bulan = ? AND tahun = ? AND datang = ? AND periksa = ? AND antrian_tb.`status` = ? AND pasien_tb.`id_pasien` = antrian_tb.`id_pasien`");
    $data = array($tanggal, $bulan, $tahun, $datang, $periksa, $status);
    $query->execute($data);
    $result = $query->fetchAll();
    return $result;
  }

  public function ubahDatang($datang, $tanggalDatang, $id_antrian) {
    $query = $this->panggilKoneksi->prepare("UPDATE antrian_tb SET datang = ?, tanggal_datang = ? WHERE id_antrian = ?");
    $data = array($datang, $tanggalDatang, $id_antrian);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function ubahPeriksa($periksa, $waktuPeriksa, $id_antrian) {
    $query = $this->panggilKoneksi->prepare("UPDATE antrian_tb SET periksa = ?, waktu_periksa = ? WHERE id_antrian = ?");
    $data = array($periksa, $waktuPeriksa, $id_antrian);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function ubahStatus($status, $waktuSelesai, $id_antrian) {
    $query = $this->panggilKoneksi->prepare("UPDATE antrian_tb SET status = ?, waktu_selesai = ? WHERE id_antrian = ?");
    $data = array($status, $waktuSelesai, $id_antrian);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

  public function cekRekMedis($id_pasien, $id_antrian, $tanggal, $bulan, $tahun, $datang, $periksa) {
    $query = $this->panggilKoneksi->prepare("SELECT * FROM antrian_tb WHERE id_pasien = ? AND id_antrian = ? AND tanggal = ? AND bulan = ? AND tahun = ? AND datang = ? AND periksa = ?");
    $data = array($id_pasien, $id_antrian, $tanggal, $bulan, $tahun, $datang, $periksa);
    $query->execute($data);
    $result = $query->rowCount(); // rowCount = untunk mengambil nilai dasar (0 /1)
    return $result;
  }

}
