<?php
    include 'conn.php';
    // delete message
    $id = $_GET['id'];
    $sql = "DELETE FROM gallery WHERE id = '$id'";
    $result = $mysqli->query($sql);
    
    if ($result) {
        header("Location: ../dashboard/gallery.php?success=1");
    } else {
        header("Location: ../dashboard/gallery.php?success=0");
    }

    $mysqli->close();
?>