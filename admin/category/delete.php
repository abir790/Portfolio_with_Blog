<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	} ?>
<?php include '../db/db.php'; 
if (isset($_GET['id'])) {   // akhane if condition  na rakhleo problem nai


$conn=connectDB();
$id=$_GET['id'];
$sql="DELETE FROM category WHERE id=$id";
$result=$conn->query($sql);


if ($result) {
  session_start();
  $_SESSION['delete']="delete Successfully";
  header('location:index.php');
}

}

?>