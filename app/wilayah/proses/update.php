<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$nama_wilayah = $_POST['nama_wilayah'];
$keterangan = $_POST['keterangan'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE wilayah SET nama_wilayah = '$nama_wilayah', keterangan = '$keterangan', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=wilayah";</script>';
} else {
  echo mysqli_error($conn);
}
