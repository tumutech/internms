<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Project</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/e05866854f.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header]>
    <!-- place navbar here -->
    <?php
    include("navbar.php");
    ?>
    </header>
    <main>

     <div class="container-fluid text-white">
      <div class="row">
        <h1 class="text-center">PLACEMENTS</h1>
      </div>
        <div class="row vh-100 bg-gradient">
        <div class="col-md-3 vh-100 bg-dark gap-4 d-flex flex-column">
            <div class="d-flex justify-content-center">
              <i class="fa fa-building fa-8x " aria-hidden="true"></i>
            </div>
            <div class="row sidebar">
              <div class="col justify-content-center">
              <ol class="fs-3 d-flex flex-column gap-2">
                <li class="gap-3 px-3 d-flex align-items-center" >
                  
                  <i class="fa fa-user" aria-hidden="true"></i><a class="text-decoration-none text-success" href="MyInterns.php">My Interns</a> </i>
                </li>
                <li class="gap-3 px-3 d-flex align-items-center">
                  <i class="fa fa-envelope" aria-hidden="true"></i><a class="text-decoration-none text-success" href="Placements.php">PlaceMents </a></i>
                </li>
                <li class="gap-3 px-3 d-flex align-items-center">
                  <i class="fas fa-calendar-days" aria-hidden="true"></i><a class="text-decoration-none text-success" href="Schedule.php">Schedule </a></i>
                </li>
                <li class="gap-3 px-3 d-flex align-items-center">
                  <i class="fa fa-briefcase" aria-hidden="true"></i><a class="text-decoration-none text-success" href="Activities.php">Activities </a></i>
                </li>
                
                
              </ol>
            </div>
            </div>
          </div>
          <div class="col-md-7 mx-auto">
            
            <div class="row">
              <table class="table text-white table-dark table-striped">
                <thead>
                  <tr>
                    
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Company</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    require('db.php');
                    $sql = ("SELECT * FROM `internee` ");
    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while ($row = mysqli_fetch_assoc($result)) {
    
                        echo "<tr><td>" . $row["fname"] . " </td><td>" . $row["lname"] . "</td><td>" . $row["company"] . "</td></tr>";
                      }
                    } else {
                      echo "0 results";
                    }
                    mysqli_free_result($result);
    
                    ?>
                  </tr>
    
    
                </tbody>
              </table>
            </div>
          </div>
        </div>
     </div>

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