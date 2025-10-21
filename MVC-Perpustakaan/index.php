<?php
require_once "controller/BukuController.php";
// Buat controller
$controller = new BukuController();
// Jalankan method index
$controller->index();