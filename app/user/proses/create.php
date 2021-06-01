<?php
session_start();
require_once '../../functions/MY_model.php';
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$created_at = date('Y-m-d H:i:s');
$query = "INSERT INTO users VALUES('', '', '$username', '$password', '', '$created_at')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=user";</script>';
} else {
  echo mysqli_error($conn);
}
