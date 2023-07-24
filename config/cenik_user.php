<?php
require "db.php";


    $sql = "SELECT * FROM cenik";
    $result = mysqli_query($conn,  $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()){
                echo "
                <td class='user'><h4>$row[název]</h4></td>
                <td class='user'><h4>$row[cena] kč</h4></td>";
                         
    }}
?>