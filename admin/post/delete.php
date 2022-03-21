<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
  session_start();
  $_SESSION['warning']='please login 1st';

  header('location:../index.php');
  } ?>


<?php 
   require '../db/db.php' ; 


   $id=$_GET['id'];
   $conn=connectDB();

   $sql="SELECT * FROM post WHERE id=$id"; 
   $res=$conn->query($sql);
   foreach ($res as $value) {
   	$location="../" .$value['image']; // db te jodi image thake tahole db imager name tai hobe project file er image location and name

   	if (file_exists($location)) {
   		unlink($location);
   	}
   	
   }
   
   $sql="DELETE FROM post WHERE id=$id";
   $result=$conn->query($sql);

  if ($result) {
  	header('location:index.php');
  }




 ?>