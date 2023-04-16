<?php
require('./Includes/db.php');

if (isset($_POST['register'])) {
  $email = $_POST['email'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $regno = $_POST['regno'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $role = $_POST['role'];
  $course = $_POST['course'];

  if ($role == 'Internee') {
    
    $sql = "INSERT INTO `internee` (`fname`, `lname`, `regno`, `dob`, `gender`, `status`, `image`, `Course`, `password`, `company`, `unsuperv`, `cpsuperv`, `datejoined`, `email`)
     VALUES ('$fname', '$lname', '$regno', '$dob', '$gender', '1', NULL, '$course', '$password', NULL, NULL, NULL, current_timestamp(), '$email')";


    $con = mysqli_query($conn, $sql);
    if (!$con) {
      echo "Error: " . mysqli_error($conn);
  }
  }

  if ($role == 'University Supervisor') {
    $sql = "INSERT INTO `unsupervisor` ( `fname`, `lname`, `password`, `email`, `dob`, `gender`, `status`, `datejoined`, `unregno`, `department_departmentname`) 
    VALUES ( '$fname', '$lname', '$password', '$email', '$dob', '$gender', '1', current_timestamp(), '$regno', '$course');";


    $con = mysqli_query($conn, $sql);
    if ($con) {
      echo "Account created";
    } else {
      echo "error ";
    }
  }
  if ($role == 'Company Supervisor') {
    $sql = "INSERT INTO `cpsupervisor` ( `fname`, `lname`, `password`, `email`, `dob`, `gender`, `status`, `datejoined`, `cpregno`) 
    VALUES ( '$fname', '$lname', '$password', '$email', '$dob', '$gender', '1', current_timestamp(), '$regno');";


    $con = mysqli_query($conn, $sql);
    if ($con) {
      echo "Account created";
    } else {
      echo "error ";
    }
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Internship Management System</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="Internee/style.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
    <!-- <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: white;" href="#">Elian PortFolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PortFolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Skills</a>
            </li>


          </ul>

        </div>
      </div>
    </nav> -->
  </header>
  <main>
    <form method="POST">
      <div class="row text-dark gap-3 p-lg-5">

        <h1 class="text-light text-center">Registration Form</h1>
        <div class="col-md-4 mx-auto d-flex gap-3 flex-column">
          <div class="form-floating">
            <input type="email" required name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating">
            <input type="text" required name="fname" class="form-control" id="floatingInput2" placeholder="First Name">
            <label for="floatingInput2">First Name</label>
          </div>
          <div class="form-floating">
            <input type="text" required name="lname" class="form-control" id="floatingInput8" placeholder="Last Name">
            <label for="floatingInput8">Last Name</label>
          </div>


          <div class="form-floating">
            <input type="password" required name="password" class="form-control" id="floatingInput3" placeholder="Password">
            <label for="floatingInput3">Password</label>
          </div>
          <div class="form-floating">
            <input type="password" required name="cpassword" class="form-control" id="floatingPassword2" placeholder="Password">
            <label for="floatingPassword2">Confirm Password</label>
          </div>
        </div>


        <div class="col-md-4 mx-auto d-flex gap-3 flex-column">
          <div class="form-floating">
            <input type="text" required name="regno" class="form-control" id="floatingInput5" placeholder="Registration Number">
            <label for="floatingInput5">Reg No</label>
          </div>
          <div class="form-floating">
            <input type="date" required name='dob' class="form-control" id="floatingInput7" placeholder="User Name">
            <label for="floatingInput7">Date of Birth</label>
          </div>


          <div class="form-floating">
            <select class="form-select" required name="gender" id="floatingSelect1" aria-label="Floating label select example">
              <option selected>Select your Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            <label for="floatingSelect1">Gender</label>
          </div>
          <div class="form-floating">
            <select class="form-select" name="role" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Select Role</option>
              <option value="Internee">Internee</option>
              <option value="University Supervisor">University SuperVisor</option>
              <option value="Company Supervisor">Company SuperVisor</option>
            </select>
            <label for="floatingSelect">Role</label>
          </div>
          <!-- <div class="form-floating">
            <select class="form-select" name="role" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Select Course</option>
              <?php
                 require('./config/db.php');
                $sql = "SELECT * FROM `faculty` ";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while ($row = mysqli_fetch_assoc($result)) {

                    echo '<option class="text-dark" value=.row["facultyname"].>'.$row["facultyname"].'</div>';
                  }
                } else {
                  echo '<div class="text-white">0 results</div>';
                }
            
      
                      ?>
             
            </select>
            <label for="floatingSelect">Role</label>
          </div> -->
          
          <div class="form-floating">
            <input type="text" required name="course" class="form-control" id="floatingInput6" placeholder="Courses leave empty if not internee">
            <label for="floatingInput6">Course</label>
          </div>
        </div>

        <div class="row">
          <div class="col-8 mx-auto">
            <button name="register" class="btn btn-primary d-flex w-100 justify-content-center">Register</button>
          </div>
        </div>

        <div class="row">
          <div class="col-8 mx-auto text-white">
            Already have an account? <a href="LogIn.php">Log in</a>
          </div>
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