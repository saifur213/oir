<?php
    include '../conn.php';

    $url = "../../dashboard/news.php";

    $id = $_POST['id'];
    $des = $_POST['description'];
    $image = $_POST['image'];  

  
    $sql = "INSERT INTO news (id, description, image) VALUES ('$id', '$des', '$image')";

    $result = $mysqli->query($sql);

    
    if ($result) {
        header("Location: $url?success=1");
    } else {
        header("Location: $url?success=0");
    }
    $mysqli->close();
?>