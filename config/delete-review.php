<?php
require "db.php";


$review_id = mysqli_real_escape_string($conn, $_POST['review_id']);


if (!is_numeric($review_id)) {
    die("Neplatné ID recenze.");
}


$sql = "DELETE FROM recenze WHERE id = $review_id";

if (mysqli_query($conn, $sql)) {
    header("Location: ../recenze.php");
} else {
    echo "Chyba při mazání recenze: " . mysqli_error($conn);
}

mysqli_close($conn);
?>