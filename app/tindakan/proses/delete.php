<?php
require_once 'app/functions/MY_model.php';

$no_transaksi = $_GET['no_transaksi'];
delete("DELETE from tagihandt where no_transaksi = '$no_transaksi'");
delete("DELETE from tagihanht where no_transaksi = '$no_transaksi'");
if (delete("DELETE FROM tindakan WHERE no_transaksi = '$no_transaksi'") > 0) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=tindakan';</script>";
} else {
  echo mysqli_error($conn);
}
