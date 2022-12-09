<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Membuat Template Website Bootstrap</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <!-- Bagian Header -->
            <div class="row">
                <div class="col-md-20 header" id="site-header">
                    <header>
                        <h1 class="title-site">Ulangan Tengah Semester</h1>
                        <p class="description">Belajar Membuat Template Website Dengan Bootstrap</p>
                    </header>
                </div>
            </div>
            <nav class="menus">
                <ul>
                    <li><a href="?page=1">Dosen</a></li>
                    <li><a href="?page=2">Mata Kuliah</a></li>
                    <li><a href="?page=3">Fakultas</a></li>
                    <li><a href="?page=4">Prodi</a></li>
                </ul>
            </nav>
            <!-- End Bagian Header -->
            <div class="row">
                <div class="col-md-12 articles" id="site-content">
                    <?php
                    error_reporting(0);
                    switch ($_GET['page']) 
                    {
                        case '1':
                        include "dosen.php";
                        break;

                        case '2':
                        include "fakultas.php";
                        break;

                        case '3':
                        include "prodi.php";
                        break;

                        case '4':
                        include "mk.php";
                        break;

                        default:
                        include "dosen.php";
                        break;
                    }

                    ?>
                </div>
            </div>
            <footer></footer>

            <!-- jQuery online menggunakan CDN -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
            </script>
            <!-- jQuery lokal -->
            <script src="assets/jquery/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <!-- Custom JS -->
            <script src="assets/custom.js"></script>
        </body>
        </html>
