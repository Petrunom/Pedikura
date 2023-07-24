<?php

require "db.php";


if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nazev = $_POST['název'];
  $cena = $_POST['cena'];

  
  $result = mysqli_query($conn, "UPDATE cenik SET název = '$nazev', cena = $cena WHERE id = $id");


  if($result) {
    header("Location: ../index.php");
  } else {
    echo "Chyba při aktualizaci záznamu: " . mysqli_error($conn);
  }
}
?>
