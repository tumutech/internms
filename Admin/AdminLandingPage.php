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
                        <div class="col-md-4">
                            <div class="card bg-black text-white">
                                <div class="card-body">
                                    <h5>Students<h5>
                                            <p>04</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-black text-white">
                                <div class="card-body">
                                    <h5>Departments<h5>
                                            <p>04</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-black text-white">
                                <div class="card-body">
                                    <h5>Faculties<h5>
                                            <p>04</p>
                                </div>

                            </div>
                        </div>
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