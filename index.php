<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Membuat Template Website Bootstrap</title>
	
	    <!-- Bootstrap -->
	   
        <link href="style.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="assets/" rel="stylesheet">
	
	  </head>
	  <body>
      <div class="container">
	
    <!-- Bagian Header -->
    
    <div class="row">
        <div class="col-md-12 header" id="site-header">
        <header>
	    <h1 class="title-site">rafi taufiqurahman</h1>
	    <p class="description">file latihan</p>
	</header>
	<nav class="menus">
	    <ul>
	        <li><a href="fakultas.php">fakultas</a></li>
	        <li><a href="dosen.php">dosen</a></li>
			<li><a href="prodi.php">prodi</a></li>
	        <li><a href="mk.php">mata kuliah</a></li>
	    </ul>
	</nav>

        </div>
    </div>
    <!-- End Bagian Header -->
	<div class ="row">
		<div class="col-md-8 articles" id="site-content">
			<?php

			switch($_GET['page'])
			{
				case'1':
				include "fakultas.php";
				break;

				case'2':
				include "dosen.php";
				break;
				
				case'3':
				include "prodi.php";
				break;

				default:
				include "mk.php";
				break;
			}

			?>
		</div>
	</div>
	<footer></footer>
	    <!-- jQuery online menggunakan CDN -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	    
	    <!-- jQuery lokal -->
	    <script src="assets/jquery/jquery.min.js"></script>
	 
	    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	    
	    <!-- Custom JS -->
	    <script src="assets/custom.js"></script>
	  </body>
	</html>
