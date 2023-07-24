<?php
require "db.php";

// Získání všech recenzí z databáze
$sql = "SELECT * FROM recenze";
$result = mysqli_query($conn, $sql);

// Uložení recenzí do pole
$reviews = array();
while ($row = mysqli_fetch_assoc($result)) {
    $reviews[] = $row;
}

mysqli_close($conn);
?>