<?php
include_once 'connection.php';

function getGold()
{
    $sql = "SELECT * FROM users WHERE id = '1'";
    $result = mysqli_query(connection(), $sql);
    $row = mysqli_fetch_array($result);
    $totalGold = $row['gold'];

    return $totalGold;
}
