<?php 
    include "db.php";
     

    $pass = password_hash("admin", PASSWORD_DEFAULT);

    $sql = "INSERT INTO users SET user_name = 'admin', password = '$pass'";
    $result = mysqli_query($conn, $sql);
    

?>