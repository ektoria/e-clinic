<?php
session_start();
require_once '../../functions/MY_model.php';

$no_transaksi = $_POST['no_transaksi'];
$pasien_id = $_POST['pasien_id'];
$pegawai_id = $_POST['pegawai_id'];
$keluhan = $_POST['keluhan'];
$diagnosa = $_POST['diagnosa'];
$tanggal = $_POST['tanggal'];
$obat_id = $_POST['obat_id'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
$total = 0;
$query = "INSERT INTO tindakan VALUES('', '$no_transaksi', '$pasien_id', '$pegawai_id', '$keluhan', '$diagnosa', '$tanggal', '$created_at', '', '', '$created_by', '', '')";
if (create($query) === 1) {
  $rm_id = mysqli_insert_id($conn);
  foreach ($obat_id as $obat) {
    $save_rmobat = "INSERT INTO rm_obat(obat_id, rm_id) VALUES('$obat', '$rm_id')";
    $harga = get_where("SELECT harga from obat where id = '$obat'");
    $total += $harga['harga'];
    $save_tagihandt = "INSERT INTO tagihandt values('', '$no_transaksi', '$obat', '" . $harga['harga'] . "')";

    if (create($save_tagihandt) > 0) {
    } else {
      echo mysqli_error($conn);
    }
    if (create($save_rmobat) > 0) {
    } else {
      echo mysqli_error($conn);
    }
  }
  $save_tagihanht = "INSERT INTO tagihanht values('', '$no_transaksi', '$pasien_id', '$total')";
  if (create($save_tagihanht) > 0) {
  } else {
    echo mysqli_error($conn);
  }
  echo '<script>document.location.href="../../../?page=tindakan";</script>';
} else {
  echo mysqli_error($conn);
}
