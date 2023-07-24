<?php

    if(isset($_POST['upload']) && isset($_FILES['my_image'])){
        include "db.php";

        echo "<pre>";
        print_r($_FILES['my_image']);
        echo "</pre>";
    
        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];
    
        if ($error === 0) {
            if ($img_size > 1250000) {
                $em = "Omlouváme se ale vaše fotka je příliš velká";
                header("Location: ../fotogalerie.php?error=$em");
            }else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
    
                $allowed_exs = array("jpg", "jpeg", "png"); 

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'C:\123\htdocs\Doudis\static\uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
    
                   
                    $sql = "INSERT INTO images(image_url) 
                            VALUES('$new_img_name')";
                    mysqli_query($conn, $sql);
                    header("Location: ../fotogalerie.php");
                }else {
                    $em = "Soubor tohoto typu nemůžete vložit";
                    header("Location: ../fotogalerie.php?error=$em");
                }
            }
        }else {
            $em = "unknown error occurred!";
            header("Location: ../fotogalerie.php?error=$em");
        }
    
    }else {
        header("Location: ../fotogalerie.php");
    }

?>