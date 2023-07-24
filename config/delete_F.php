<?php
include "db.php";

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "DELETE FROM images WHERE id='$id'";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "Obrázek byl úspěšně odstraněn z databáze.";
  }else{
    echo "Nepodařilo se odstranit obrázek z databáze.";
  }
}
?>
