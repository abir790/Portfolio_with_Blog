<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	} ?>
<?php include '../db/db.php'; ?>



<?php include '../layout/header.php';?>




<a href="index.php" class="btn btn-success" style="text-align: center;"> Back</a>
<div class="ca_form">
	<form action="add_insert.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputTitle" class="btn btn-success" style="margin: 10px;">Add Title</label>
    <input type="title" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	

</div>



<?php include '../layout/footer.php' ?>

