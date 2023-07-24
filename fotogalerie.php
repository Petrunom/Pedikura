<?php
    require "static/templates/head.php";
    require "static/templates/header.php";
    require "static/templates/nav.php";
?>

<hr>
<h1 style="text-align: center; margin-top: 1%;">fotogalire</h1>
<hr>
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<form action="config/upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="my_image">
  <input type="submit" name="upload" value="Upload">
</form>

<div class="gallery-container">
  <?php
    include "config/db.php";

    $sql = "SELECT * FROM images";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
      echo "<div class='gallery-item'>
              <img src='static/uploads/{$row['image_url']}' alt='{$row['image_url']}'>
              <button class='delete-btn' data-img-id='{$row['id']}' data-img-url='{$row['image_url']}'>Odstranit</button>

            </div>";
    }
  ?>
</div>

<script src="static/js/photogalery.js"></script>
<?php
}else{
  ?>



<div class="gallery-container">
  <?php
    include "config/db.php";

    $sql = "SELECT * FROM images";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
      echo "<div class='gallery-item'>
              <a target='_blank' href='static/uploads/{$row['image_url']}'>
              <img src='static/uploads/{$row['image_url']}' alt='{$row['image_url']}'>
              </a>
            </div>";
    }
  ?>
</div><?php }?>

<?php

require "static/templates/footer.php"
?>  