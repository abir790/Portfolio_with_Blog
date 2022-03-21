<?php $url="http://localhost/abir_blog/admin/"; ?>
<?php $url2="http://localhost/abir_blog/"; ?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>assets/css/style.css">



    <title>Admin!</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" >
        <div class="container">
        
    <a class="navbar-brand" href="">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="<?= $url2 ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Post</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="<?= $url ?>admin_login/session_des.php">LogOut</a>
           <a class="dropdown-item" href="#">Another action</a>
           <div><hr class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

      </ul>

    </div>

  </div>
</nav>
<div class="container" style="margin: 80px">
    <div class="row clearfix">
      <div class="col-md-3">
    <ul class="list-group  sticky-top " style="background-color:red;">
  <li class="list-group-item" style="background-color:red;">
    <a href=""></a>
  </li>
  <li class="list-group-item"></li>
  <li class="list-group-item"></li>
  <li class="list-group-item"></li>     
  <li class="list-group-item active">
    <a href="<?php echo $url ?>admin_login" style="color:white; font-size: 30px; text-decoration: none;">Home</a>
  </li>
  <li class="list-group-item">
    <a href="<?php echo $url ?>category/index.php" style="color:; font-size: 20px; text-decoration: none;">Category</a>
  </li>
  <li class="list-group-item">
    <a href="<?php echo $url ?>post/index.php" style="color:; font-size: 20px; text-decoration: none;">Post</a>
  </li>
  <li class="list-group-item">
    <a href="" style="color:; font-size: 20px; text-decoration: none;">About</a>
  </li>
  <li class="list-group-item">
    <a href="" style="color:; font-size: 20px; text-decoration: none;">Contact</a>
  </li>
  <li class="list-group-item">
    <a href="" style="color:; font-size: 20px; text-decoration: none;">Profile Photos</a>
  </li>
  <li class="list-group-item">
    <a href="" style="color:; font-size: 20px; text-decoration: none;">Update Password</a>
  </li>
</ul>

<div class="pg">
  <h1>Hellow</h1>
  
</div>

     </div>

            
 


<div class="paragrap col-md-7">
    <div class="panel panel-default">
  <div class="panel-body">