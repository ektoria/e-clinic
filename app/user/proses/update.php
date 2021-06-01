<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=user";</script>';
} else {
  echo mysqli_error($conn);
}
