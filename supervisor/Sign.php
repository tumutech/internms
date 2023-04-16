<?php

session_start();
    require('db.php');
    # code...
    $id = $_GET['id'];
   
    $sql = "UPDATE `logs` SET `unsignstate` = 'signed' WHERE  `logs`.`logId` = '$id'";
    $con = mysqli_query($conn, $sql);
    if ($con) {
        $msg = 'Log signed SUCCESSFULLY';
        header("Location: Activity.php?id=$id&msg=$msg");
    }

?>