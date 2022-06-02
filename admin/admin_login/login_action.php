<?php


require '../db/db.php' ;
$conn=connectDB();

echo $email=$_POST['email'];
echo $password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' AND password='$password' ";
$result=$conn->query($sql);
//$result=mysqli_query($conn,$sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	session_start();
	$_SESSION['login']='Login Successfully';
	header('location:index.php');
	// for particular profile try it - header('location:index.php?id=$result['id']');
	// then  $id=$_GET['id']; ata diye get korbo .. ai id diye pore query chaliye data perticular data show korbo
}elseif ($rowcount !==1) {
	session_start();
	$_SESSION['wrong']='wrong username and password';
	header('location: ../index.php');
}

?>