<?php
    include '../conn.php';

    $url = "../../dashboard/program.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $des = $_POST['description'];
    $image = $_POST['image'];  
    $link = $_POST['link']; 

  
    $sql = "INSERT INTO program (id, name, description, image, link) VALUES ('$id', '$name', '$des', '$image', '$link')";

    $result = $mysqli->query($sql);

    
    if ($result) {
        header("Location: $url?success=1");
    } else {
        header("Location: $url?success=0");
    }
    $mysqli->close();
?>