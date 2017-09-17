<?php
include_once 'connection.php';

function passButton() {
// When users press passButton, gain exp and golds, and check if level up.

  $gainExp = 1;
  $gainGold = 3;

  //-------------------------------------------
  // this is to update gold for passbutton
   $sqlGold = "UPDATE users SET gold= gold + '$gainGold' WHERE id = '1'";
   $resultGold = mysqli_query(connection(),$sqlGold);
  //-------------------------------------------

  $sql = "UPDATE users SET exp= exp + '$gainExp' WHERE id = '1';";
  $result = mysqli_query(connection(), $sql);


}
?>
