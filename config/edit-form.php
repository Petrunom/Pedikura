<?php

require "db.php";
require "../static/templates/nav.php";
require "../static/templates/head.php";



if(isset($_GET['id'])) {
  $id = $_GET['id'];

  
  $result = mysqli_query($conn, "SELECT * FROM cenik WHERE id = $id");

 
  if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    
    echo "
    <div style='padding-top: 90px'class='container-form'>
        <form action='update.php' method='post'>
        <input type='hidden' name='id' value='$id'>
        <label>Název:</label>
        <input type='text' name='název' value='$row[název]'>
        <label>Cena:</label>
        <input type='number' name='cena' value='$row[cena]'>
        <input type='submit' name='submit' value='Uložit změny'>
        </form>
    </div>
    ";
  }
}

require "../static/templates/footer.php";
?>
