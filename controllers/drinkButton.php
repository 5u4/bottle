<?php
include_once 'connection.php';

function drinkButton() {
// When users press passButton, gain exp and golds, and check if level up.

  $lossExp = -3;
  $gainGold = -3;

  //-------------------------------------------
  // this is to update gold for drinkbutton
  // $sqlGold = "UPDATE users SET gold= gold + '$gainGold' WHERE id = '1'";
  // $resultGold = mysqli_query($con,$sqlGold);
  //-------------------------------------------

  $sql = "UPDATE users SET exp= exp + '$lossExp' WHERE id = '1';";
  $result = mysqli_query(connection(), $sql);
}
?>
