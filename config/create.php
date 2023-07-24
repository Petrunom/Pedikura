<?php

require_once('db.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];

    
    $sql = "INSERT INTO cenik (název, cena) VALUES ('$name', '$price')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php");
    } else {
        echo "Chyba: " . $sql . "<br>" . mysqli_error($conn);
    }

   
    mysqli_close($conn);
}

?>