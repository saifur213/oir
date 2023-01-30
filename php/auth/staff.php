<?php
    include '../conn.php';

    $url = "../../dashboard/staffs.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $desig = $_POST['designation'];
    $descrip = $_POST['description'];
    $image = $_POST['image'];  

  
    $sql = "INSERT INTO staff (id, name, designation, description, img) VALUES ('$id', '$name', '$desig', '$descrip', '$image')";

    $result = $mysqli->query($sql);

    
    if ($result) {
        header("Location: $url?success=1");
    } else {
        header("Location: $url?success=0");
    }
    $mysqli->close();
?>