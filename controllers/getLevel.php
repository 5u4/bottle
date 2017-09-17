<?php
include_once 'connection.php';

function getLevel() {
  //-------------------------------------------
  // return users level
  // In total we have three levels
  // Level 2: 3/3 exp
  // Level 3: 7/7 exp
  //-------------------------------------------
  $sql = "SELECT * FROM users WHERE id = '1'";
  $result = mysqli_query(connection(), $sql);
  $row = mysqli_fetch_array($result);
  $totalExp = $row['exp'];

  if($totalExp < 3) {
    return 1;
  }

  if($totalExp >= 3 && $totalExp < 7) {
    return 2;
  }

  if($totalExp >= 7) {
    return 3;
  }
}
?>
