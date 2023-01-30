<?php
    include 'conn.php';
    // delete message
    $id = $_GET['id'];
    $sql = "DELETE FROM staff WHERE id = '$id'";
    $result = $mysqli->query($sql);
    
    if ($result) {
        header("Location: ../dashboard/staffs.php?success=1");
    } else {
        header("Location: ../dashboard/staffs.php?success=0");
    }

    $mysqli->close();
?>