<?php
session_start();
require_once '../../functions/MY_model.php';
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$posisi = $_POST['posisi'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO pegawai VALUES('', '$nama_pegawai', '$alamat', '$telephone', '$posisi', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=pegawai";</script>';
} else {
  echo mysqli_error($conn);
}
