<?php
    session_start(); 
    //make sure you have created the **upload** directory

    $filename    = $_FILES["picture"]["tmp_name"];
    $destination = "upload/" . $_FILES["picture"]["name"]; 
    move_uploaded_file($filename, $destination); //save uploaded picture in your directory

    $_SESSION['picture'] = $destination;

    header('Location: minttest3.php');
    ?>
