<?php
    include '../conn.php';

    $url = "../../dashboard/gallery.php";

    $id = $_POST['id'];
    $image = $_POST['image'];  

  
    $sql = "INSERT INTO gallery (id, image) VALUES ('$id', '$image')";

    $result = $mysqli->query($sql);

    
    if ($result) {
        header("Location: $url?success=1");
    } else {
        header("Location: $url?success=0");
    }
    $mysqli->close();
?>