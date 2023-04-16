<?php

require('./Includes/db.php');


//handling the login form, assigning input fields to variable names
if (isset($_POST['log'])) {
  $role = $_POST['btnradio'];
  echo $role;
  $email = $_POST['email'];
  $pass = $_POST['password'];
  //login for internee
  if ($role == 'internee') {
    $sql = ("SELECT * FROM `internee` WHERE email ='$email' and password='$pass'");
    $result = $conn->query($sql);
    //checking if input internee login match any records in the database
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        header("Location: /Internee/StudentLandingPage.php");
        // printf(
        //   $row["dob"]
        // );
        session_start();
        //storing internee variables in a session for easy retrieval
        $_SESSION['user_name'] = $row['fname'];
        $_SESSION['last_name'] = $row['lname'];
        $_SESSION['uemail'] = $row['email'];
        $_SESSION['dob'] = $row['dob'];
        $_SESSION['course'] = $row['Course'];
        $_SESSION['id'] = $row['idInternee'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['regno'] = $row['regno'];
        $_SESSION['company'] = $row['company'];
        $_SESSION['unsupervisor'] = $row['unsuperv'];
        $_SESSION['cpsupervisor'] = $row['cpsuperv'];
        $_SESSION['image'] = $row['image'];
        
        exit();
      }
    } else {
      printf('Invalid username or Password.<br />');
    }
    mysqli_free_result($result);
  }
  if ($role == 'University SuperVisor') {
    // # code...
    // echo 'hello';

    $sql = ("SELECT * FROM `unsupervisor` WHERE email ='$email' and password='$pass'");
    // echo $sql['fname'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        // printf(

        //   $row["dob"]


        // );


        session_start();
        $_SESSION['user_name'] = $row['fname'];
        $_SESSION['last_name'] = $row['lname'];
        $_SESSION['uemail'] = $row['email'];
        $_SESSION['dob'] = $row['dob'];
        $_SESSION['course'] = $row['Course'];
        $_SESSION['id'] = $row['idInternee'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['regno'] = $row['unregno'];
        // header("Location: Internee/StudentLandingPage.php");
        header("Location: /supervisor/SupLandingPage.php");
        //  header("Location: Internee/OtherInterns.php");

        exit();
      }
    } else {
      printf('Invalid username or Password.<br />');
    }
    mysqli_free_result($result);
  }
  else if ($role == 'Company Supervisor') {
    # code...
    echo 'hello';

    $sql = ("SELECT * FROM `cpsupervisor` WHERE email ='$email' and password='$pass'");
    // echo $sql['fname'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        // printf(

        //   $row["dob"]


        // );


        session_start();
        $_SESSION['user_name'] = $row['fname'];
        $_SESSION['last_name'] = $row['lname'];
        $_SESSION['uemail'] = $row['email'];
        $_SESSION['dob'] = $row['dob'];
        $_SESSION['course'] = $row['Course'];
        $_SESSION['id'] = $row['idInternee'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['regno'] = $row['cpregno'];
        // header("Location: Internee/StudentLandingPage.php");
        header("Location: /cpsuperv/SupLandingPage.php");
        //  header("Location: Internee/OtherInterns.php");

        exit();
      }
    } else {
      printf('Invalid username or Password.<br />');
    }
    mysqli_free_result($result);
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="Internee/style.css">
</head>

<body>
  <header>
  </header>
  <main>


    <form method="POST">

      <div class="row text-dark gap-3 p-lg-5">

        <h1 class="text-light text-center">LogIn Form</h1>
        <div class="col-md-6 mx-auto d-flex gap-3 flex-column">
          <img src="https://picsum.photos/id/1/200/300" style="border-radius: 50%;border:10px solid white" height="200" width="200" />
          <p class="text-white fs-3">Welcome to the
          <h2 class="text-white">Internship</h2>
          <p class="text-white fs-4">Management System</p>
          </p>


        </div>

        <div class="col-md-4 mx-auto d-flex gap-3 flex-column">

          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="internee" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Internee</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="University SuperVisor" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">UN supervisor</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" value="Company Supervisor" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">CP Supervisor</label>
          </div>

          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>



          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingInput3" placeholder="Password">
            <label for="floatingInput3">Password</label>
          </div>
          <button name="log" class="btn btn-primary d-flex w-100 justify-content-center">Log In</button>
          <p class="text-white">New here<span>
             <a href="Reg.php">Register</a>
            </span></p>
        </div>
      </div>

    </form>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>