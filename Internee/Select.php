<?php
include('db.php');
session_start();
$unid = $_GET['id'];
$regno = $_SESSION['regno'];
$sql = "UPDATE `internee` 
    SET `unsuperv` = '$unid' WHERE  `internee`.`regno` = '$regno'";
$con = mysqli_query($conn, $sql);
if ($conn) {
    $msg = 'Supervisor selected SUCCESSFULLY';
    header("Location: Supervisor.php?msg=$msg");
}
?>