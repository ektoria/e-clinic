<?php
session_start();
require_once '../../functions/MY_model.php';
$nama_wilayah = $_POST['nama_wilayah'];
$keterangan = $_POST['keterangan'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$query = "INSERT INTO wilayah VALUES('', '$nama_wilayah', '$keterangan', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=wilayah";</script>';
} else {
  echo mysqli_error($conn);
}
