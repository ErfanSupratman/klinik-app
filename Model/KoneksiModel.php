<?php
error_reporting(0);
class KoneksiModel {

  protected $koneksi;
  public $nama_database = 'budi_app';
  public $driver_server = 'mysql';
  public $server_database = 'localhost';
  public $port_server = '3306';
  public $username_koneksi = 'root';
  public $password_koneksi = 'mangaps';

  public function KoneksiDatabase() {

    try {
      $this->koneksi = new PDO("$this->driver_server:host=$this->server_database;dbname=$this->nama_database", $this->username_koneksi, $this->password_koneksi);
      return $this->koneksi;
    } catch (Exception $ex) {
      return $ex;
    }
  }

}
