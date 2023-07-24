<?php
require "db.php";


    $sql = "SELECT * FROM cenik";
    $result = mysqli_query($conn,  $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()){
                echo "
                <td class='admin'>$row[název]</td>
                <td class='admin'>$row[cena] kč</td>
                <td class='admin'>
                <a href='/doudis/config/edit-form.php?id=$row[id]' class='create'>Edit</a>
                <a href='/doudis/config/delete.php?id=$row[id]' class='cancel'>Delete</a></td>";
                         
    }}
?>