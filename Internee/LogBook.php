<?php
require('./commands.php');

  if (isset($_POST['dailylog'])) {
    
   $regno = $_SESSION['regno'];
   $name = $_SESSION['user_name'];
   $message = $_POST['dailyprob'];
   $sol =$_POST['dailysoln'];
   $regno = $_SESSION['regno'];


   $sql="INSERT INTO `logs` (`logId`,  `problem`, `solution`, `unsignstate`, `cpsignstate`, `dateuploaded`, `internee_regno`) 
   VALUES (NULL,  '$message', '$sol', NULL, NULL, current_timestamp(), '$regno')";

     $con = mysqli_query($conn, $sql);
     if ($con) {
       echo "Log created";
     } else {
       echo "error ";
     }
   }
  //  echo $sql;
  if (isset($_POST['weekly'])) {
    
    $regno = $_SESSION['regno'];
    $name = $_SESSION['user_name'];
    $message = $_POST['weeklyprob'];
    $sol =$_POST['weeklysoln'];
    $regno = $_SESSION['regno'];
 
 
    $sql="INSERT INTO `logs`(
      `regno`,
     `problem`,
     `solution`
       )
 VALUES('$regno','$message','$sol');";
 
      $con = mysqli_query($conn, $sql);
      if ($con) {
        echo "Log created";
      } else {
        echo "error ";
      }
    }
   
  
  

?>

<!doctype html>
<html lang="en">

<head>
  <title>Project</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
    <?php
    include('navbar.php');
    ?>
  </header>
  <main>

    <div class="container-fluid mx-auto">
      <div class="row vh-100">
       <?php
       require('sidebar.php');
       ?>
        <div class="col-sm-10 mx-auto">
        <form method="post">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item bg-dark text-white">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Daily Log
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row bg-gradient gap-2">
                    <h1 class="text-white d-flex justify-content-center align-content-center">Daily Log Book</h1>
                    <div class="col d-flex flex-column ">
                      <div class="form-floating ">
                        <input type="date" required name='doe' class="form-control bg-dark text-white" id="floatingInput" >
                        <label for="floatingInput">Date</label>
                      </div>
                      <h3>Problem</h3>
                      <div class="form-floating ">
                        <textarea class="form-control bg-dark text-white" name='dailyprob' placeholder="Brief description of Work" id="floatingTextarea" style="height: 200px;"></textarea>
                        <label for="floatingTextarea">Brief description of Work Carried out</label>
                      </div>


                      <h3>Solutions</h3>
                      <div class="form-floating">
                        <textarea class="form-control text-black bg-dark" name='dailysoln' placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px;"></textarea>
                        <label for="floatingTextarea">Problem encountered and solutions found</label>
                      </div>

                      <input type='submit' name='dailylog' class="btn btn-primary text-uppercase fw-bold" >

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>
            <!-- weekly log -->
            <form method='post' >
            <div class="accordion-item bg-dark text-white">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Weekly Log
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row bg-gradient">
                    <h1 class="text-white d-flex justify-content-center">Weekly Log Book</h1>
                    <div class="col d-flex flex-column ">
                      <div class="form-floating ">
                        <input type="date" required name='doe2' class="form-control bg-dark text-white" id="floatingInput" >
                        <label for="floatingInput">Date</label>
                      </div>
                      <h3>Problem</h3>
                      <div class="form-floating ">
                        <textarea class="form-control bg-dark text-white" name='weeklyprob' placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px;"></textarea>
                        <label for="floatingTextarea">Brief description of Work Carried out throughout the week</label>
                      </div>


                      <h3>Solutions</h3>
                      <div class="form-floating">
                        <textarea class="form-control text-black bg-dark" name='weeklysoln' placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px;"></textarea>
                        <label for="floatingTextarea">Problem encountered and solutions found</label>
                      </div>

                      <input class="btn btn-primary text-uppercase fw-bold" type='submit' value='Add to Weekly Logs' name='weekly' />

                    </div>
                  </div>
                </div>
              </div>
            </div>
  </form>

          </div>

        </div>

      </div>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <script src="js/script.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>