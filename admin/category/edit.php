<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	} ?>

<?php include '../db/db.php'; 

$conn=connectDB();
$id=$_GET['id'];
$sql="SELECT * FROM category WHERE id=$id";
$result=$conn->query($sql);

?>

<?php include '../layout/header.php';?>




<a href="index.php" class="btn btn-success" style="text-align: center;"> Back</a>
<div class="ca_form">
	<?php foreach ($result as $value) { ?>

	<form action="update.php?id=<?php echo $value['id'] ?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputTitle" class="form-label btn-success">Please Update This Title</label>
    <input type="title" name="title" value="<?php echo $value['title'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="titltHelp">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	<?php } ?>
	

</div>



<?php include '../layout/footer.php' ?>

