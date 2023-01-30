<?php
    include 'conn.php';
    // delete message
    $id = $_GET['id'];
    $sql = "DELETE FROM news WHERE id = '$id'";
    $result = $mysqli->query($sql);
    
    if ($result) {
        header("Location: ../dashboard/news.php?success=1");
    } else {
        header("Location: ../dashboard/news.php?success=0");
    }

    $mysqli->close();
?>