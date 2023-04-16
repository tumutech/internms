<?php

session_start();
    require('db.php');
    # code...
    $id = $_GET['id'];
    $cpregno = $_SESSION['regno'];
    
echo $id;
   
    $sql = "UPDATE `internee` SET `company` = 'Codinex', `cpsuperv` = '$cpregno' WHERE `internee`.`regno` = '$id';";
    $con = mysqli_query($conn, $sql);
    if ($con) {
        $msg = 'Internee Approved and Registered';
         header("Location: MyInterns.php?id=$id&msg=$msg");
    }

?>