<?php

session_start();
require('../config/db.php');


function OtherInterns($conn)
{
    if (isset($_POST['log'])) {
        $sql = ("SELECT * FROM `internee`");
        // echo $sql['fname'];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                printf(

                    $row["dob"]


                );

                echo "Logged in!";
                session_start();
                $_SESSION['user_name'] = $row['fname'];
                $_SESSION['last_name'] = $row['lname'];
                $_SESSION['uemail'] = $row['email'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['course'] = $row['Course'];
                $_SESSION['id'] = $row['idInternee'];
                $_SESSION['gender'] = $row['gender'];

                header("Location: Internee/OtherInterns.php");

                exit();
            }
        } else {
            printf('Invalid username or Password.<br />');
        }
        mysqli_free_result($result);
    }
}
OtherInterns($conn);
