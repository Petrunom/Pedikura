<?php
require "db.php";


    $sql = "SELECT * FROM items";
    $result = mysqli_query($conn,  $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()){
                echo "
                <td class='user'><h4>$row[nazev]</h4></td>";
                         
    }}
?>