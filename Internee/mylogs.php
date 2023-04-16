<?php

require './commands.php';
OtherInterns($conn);


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
      <div class="row vh-100 ">
        <?php
        require('sidebar.php');
        ?>

        <div class="col-8 text-white mx-auto">
          <h1>Other Intern Students</h1>
          <table class="table text-white table-dark table-striped">
            <thead>
              <tr>
            
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Course</th>
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

                    echo "<tr><td>" . $row["fname"] . " </td><td>" . $row["lname"] . "</td><td>" . $row["Course"] . "</td></tr>";
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
  <script src="js/script.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>