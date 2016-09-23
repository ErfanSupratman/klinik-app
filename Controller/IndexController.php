<?php

include_once 'Model/JadwalModel.php';
$jadwalModel = new JadwalModel();

$jadwalDokter = $jadwalModel->jadwalDokter();

include_once 'View/Index.php';
?>
