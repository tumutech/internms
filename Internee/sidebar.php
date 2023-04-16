<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="col-2 bg-black vh-100 d-none flex-column align-items-center gap-3 d-md-flex " id="sidecol">
        <?php
           $imageURL = 'uploads/'.$_SESSION["image"];
           echo '<img src="'.$imageURL.'" style="width:100px;height:100px;border-radius:50%"/>'
           ?>
        <ul class="list-unstyled gap-3 flex-column d-flex fs-3">
            <a class="text-decoration-none text-white" href="StudentlandingPage.php">Profile</a>
            <li>
              <a class="text-decoration-none text-white" href="placements.php">Placements</a>
            </li>
            <li>
              <a class="text-decoration-none text-white" href="Supervisor.php">SuperVisors</a>
            </li>
            <li>
              <a class="text-decoration-none text-white" href="LogBook.php">Log Book</a>
            </li>
            <li>
            <li>
              <a class="text-decoration-none text-white" href="mylogs.php">Log Book</a>
            </li>
            <li>
              <a class="text-decoration-none text-white" href="OtherInterns.php">Other Interns</a>
            </li>

          </ul>
        </div>
</body>
</html>