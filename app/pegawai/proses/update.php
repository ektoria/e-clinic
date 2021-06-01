<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$posisi = $_POST['posisi'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE pegawai SET nama_pegawai = '$nama_pegawai', alamat = '$alamat', telephone = '$telephone', posisi = '$posisi', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=pegawai";</script>';
} else {
  echo mysqli_error($conn);
}
