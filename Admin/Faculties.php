<?
include('../config/db.php');

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 mx-auto" id='sidebar'>

                    <?php include('sidebar.php'); ?>
                </div>
                <div class="col-md-8 mx-auto vh-100">
                    <div class="row">
                        <h1>Faculties</h1>

                          
                    </div>
                    <div class="row">
                        <?php
                        require('../config/db.php');
                        if(isset($_GET['createdep'])){
                            $depname = $_GET['dep'];
                            $sql = "INSERT INTO `faculty` (`facultyname`) VALUES ('$depname')";
                            $q = mysqli_query($conn, $sql);
                            echo 'success';
                        }
                        ?>
                        <form method='GET' action=''>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name='dep' placeholder="Input DepartMent" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-secondary" name='createdep' >Create Dep</button>
                        </div>
                        </form>
                    </div>
                    <div class="row">

                    
                           <table class="table table-dark table-striped">
                           <thead>
                                <tr>
                                
                              
                                <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                      require('../config/db.php');
                      $sql = "SELECT * FROM `faculty` ";
      
                      $result = mysqli_query($conn, $sql);
      
                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
      
                          echo "<tr><td>" . $row["facultyname"] .  "</td></tr>";
                        }
                      } else {
                        echo "0 results";
                      }
                      mysqli_free_result($result);
      
                      ?>
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