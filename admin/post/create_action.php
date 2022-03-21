<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	} ?>


<?php 
$title=$_POST['title'];
$description=$_POST['description'];
$date=$_POST['date'];
$category_id=$_POST['category_id'];

 ?>

 <?php require '../db/db.php' ; 

$conn=connectDB();

$rand=rand(11111,999999999);
$tmp=$_FILES['image']['tmp_name'];


$location_db= 'assets/image/' . $rand . $_FILES['image']['name'];
$location_this_project= '../assets/image/' . $rand . $_FILES['image']['name'];   //  r ata dara data base a location er sathe file name ta save kore rakhbe

move_uploaded_file($tmp, $location_this_project);  /// ata dara ai project er vitor file ta upload hobe


$sql="INSERT INTO post VALUES(NULL,$category_id,'$title','$description','$location_db','$date') ";
$result=$conn->query($sql);
if ($result) {
    header('location:index.php');
}
