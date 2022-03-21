<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	} ?>
<?php include '../db/db.php';

$conn=connectDB();
$title=$_POST['title'];
$sql="INSERT INTO category VALUES(NULL,'$title')"; // ata alada page nilam a jonno j reload dile jeno insert na hoy
$result=$conn->query($sql);

if ($result) {
  session_start();
  $_SESSION['insert']="Insert Successfully";
  header('location:index.php');
}

?>