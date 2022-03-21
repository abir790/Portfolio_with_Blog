<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	} ?>
<?php include '../db/db.php'; 

$conn=connectDB();
$id=$_GET['id'];
$title=$_POST['title'];
$sql="UPDATE category SET title='$title' WHERE id=$id"; // ata alada page nilam a jonno j reload dile jeno update na hoy
$result=$conn->query($sql);


if ($result) {
  session_start();
  $_SESSION['update']="Update Successfully";
  header('location:index.php');
}

?>