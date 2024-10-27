<?php
require_once 'config/database.php';
require_once 'app/controllers/UserController.php';

// Koneksi ke database
$dbConnection = getDBConnection();

// Mendapatkan parameter dari URL (misalnya: index.php?id=1)
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Membuat instance UserController
$controller = new UserController($dbConnection);

// Menampilkan data pengguna berdasarkan ID
$controller->show($id);

?>