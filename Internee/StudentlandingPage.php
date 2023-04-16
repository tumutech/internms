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
        <?php
       require('sidebar.php');
       ?>
        <div class="col-sm-10 bg-gradient mx-auto">


            <section class="w-100 bg-black text-black">
              <div class="container py-5 ">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col col mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                      <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                              <?php
                          $imageURL = 'uploads/'.$_SESSION["image"];
                          echo '<img src="'.$imageURL.'" style="width:80%x;height:400px;border-radius:5px;padding-top:20px"/>'
                          ?>
                          <form action="upload.php" method="post" enctype="multipart/form-data" class='d-flex'>
   
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
                          <h5><?php echo $_SESSION['user_name'];
                              echo ' ';
                              echo $_SESSION['last_name'];
                              ?></h5>
                          <i class="far fa-edit mb-5"></i>
                        </div>
                        <div class="col-md-8">
                          <div class="card-body p-4">
                            <h6>Information</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                              <div class="col-6 mb-3">
                                <h6>Email</h6>
                                <p class="text-muted"><?php echo $_SESSION['uemail'] ?></p>
                              </div>
                              <div class="col-6 mb-3">
                                <h6>Date of Birth</h6>
                                <p class="text-muted">
                                  <?php echo $_SESSION['dob'] ?>
                              </div>
                            </div>

                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                              <div class="col-6 mb-3">
                                <h6>Course</h6>
                                <p class="text-muted"><?php echo $_SESSION['course']; ?></p>
                              </div>
                              <div class="col-6 mb-3">
                                <h6>Gender</h6>
                                <p class="text-muted"><?php echo $_SESSION['gender']; ?></p>
                              </div>
                            </div>
                            <div class="row pt-1">
                              <div class="col-6 mb-3">
                                <h6>Company</h6>
                                <p class="text-muted"><?php echo $_SESSION['company']; ?></p>
                              </div>
                              <div class="col-6 mb-3">
                                <h6>Supervisor</h6>
                                <h3> UN <p class="text-muted"><?php echo $_SESSION['unsupervisor']; ?></p></h3>
                                <h3 > CP <p class="text-muted"><?php echo $_SESSION['cpsupervisor']; ?></p></h3>
                              </div>
                            </div>
                            <div class="d-flex justify-content-start">
                              <a href="#!"><i class="fa-brands fa-facebook-f fa-lg me-3"></i></a>
                              <a href="#!"><i class="fa-brands fa-twitter fa-lg me-3"></i></a>
                              <a href="#!"><i class="fa-brands fa-instagram fa-lg"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

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