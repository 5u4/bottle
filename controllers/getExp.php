<?php
include 'connection.php';

function getExp() {
  $sql = "SELECT * FROM users WHERE id = '1'";
  $result = mysqli_query(connection(), $sql);
  $row = mysqli_fetch_array($result);
  $totalExp = $row['exp'];

  return $totalExp;
}
?>
