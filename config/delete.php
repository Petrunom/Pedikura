<?php

require_once('db.php');


$id = $_GET['id'];


$sql = "DELETE FROM cenik WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Záznam úspěšně smazán.";
} else {
    echo "Chyba: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);


header('Location: ../index.php');
exit;
?>