<?php session_start(); ?>
<?php $url2="http://localhost/abir_blog/"; ?>
<?php $url="http://localhost/abir_blog/admin/"; // link ta paoar jonno abir_blog to admin er vitor ase css or js thats why ?>
<?php $ur3="http://localhost/abir_blog/admin/admin_login/"; ?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>assets/css/style.css">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <title>Home Page!</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" >
        <div class="container">
        
    <a class="navbar-brand" href="#">Abir Blog Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="<?php  echo $url2 ?>index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url2 ?>about.php">About Myself</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url2 ?>users2/about.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url2 ?>users2/contact.php">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Create_Post
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php if (!isset($_SESSION['login'])) {
            echo $url;
	}else echo $ur3 ?> ">Admin Login</a>
           <div><hr class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>






      </ul>

    </div>

  </div>
</nav>

