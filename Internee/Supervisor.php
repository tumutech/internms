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
  <script src="https://kit.fontawesome.com/e05866854f.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header]>
    <!-- place navbar here -->
    <?php
    include('navbar.php');
    ?>
    </header>
    <main>

      <div class="container-fluid mx-auto">
        <div class="row vh-100">
          <div class="col-2 bg-black vh-100 d-none flex-column align-items-center gap-3 d-md-flex " id="sidecol">
          <?php
           $imageURL = 'uploads/'.$_SESSION["image"];
           echo '<img src="'.$imageURL.'" style="width:100px;height:100px;border-radius:50%"/>'
           ?>
            <ul class="list-unstyled gap-3 flex-column d-flex fs-3">
              <a class="text-decoration-none text-white" href="StudentlandingPage.php">Profile</a>
              <li>
                <a class="text-decoration-none text-white" href="Supervisor.php">SuperVisors</a>
              </li>
              <li>
                <a class="text-decoration-none text-white" href="LogBook.php">Log Book</a>
              </li>
              <li>
                <a class="text-decoration-none text-white" href="OtherInterns.php">OtherInterns</a>
              </li>

            </ul>
          </div>

          <div class="col-sm-10 bg-gradient mx-auto">
          <?php
          if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          } 
          ?>

          <table class="table text-white table-dark table-striped">
                <thead>
                  <tr>
              
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">SELECT</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    require('db.php');
                    $sql = ("SELECT * FROM `unsupervisor` ");
    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while ($row = mysqli_fetch_assoc($result)) {
    
                        echo "<tr><td>" . $row["fname"] . " </td><td>" . $row["lname"] . "</td><td>" . "<a href='Select.php?id=$row[unregno]' class='btn btn-primary'>Select</a>" . "</td></tr>";
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