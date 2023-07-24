<?php

require "db.php";


$name = mysqli_real_escape_string($conn, $_POST['name']);
$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$rating = mysqli_real_escape_string($conn, $_POST['rating']);
$review = mysqli_real_escape_string($conn, $_POST['review']);
$date = date("Y-m-d H:i:s");


if (preg_match('/[^\w\s]+/', $name) || preg_match('/[^\w\s]+/', $product_name) || preg_match('/[^\d]/', $rating)) {
    die("Neplatné hodnoty v polích formuláře.");
}


$sql = "INSERT INTO recenze (Jméno, nazev, hodnocení, popis, datum) VALUES ('$name', '$product_name', '$rating', '$review', '$date')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php");
} else {
    echo "Chyba při ukládání recenze: " . mysqli_error($conn);
}

mysqli_close($conn);
?>