<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
  session_start();
  $_SESSION['warning']='please login 1st';

  header('location:../index.php');
  } ?>


<?php  require '../db/db.php' ;

$conn=connectDB();
$sql="SELECT * FROM category";
$result=$conn->query($sql);

 ?>
<?php require '../layout/header.php'; ?>


<a href="index.php" class="btn btn-success" style=" margin-bottom: 10px;"> Back</a>

<div class="post_create">
	<h1 style="background-color: yellow; ">Add New Post</h1>

	<form action="create_action.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputTitle" > Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputDescription" > Description</label>
    <textarea type="text" name="description" class="form-control" id="exampleInputDescription" rows="6" aria-describedby="DescriptionHelp"></textarea>
  </div>
      <div class="mb-3">
    <label for="exampleInputFiles" > Category</label>
    <select  name="category_id" class="form-control">
      <option>Select Category</option>
      <?php foreach ($result as $value) { ?>
      <option value="<?php echo $value['id'] ?>"><?php echo $value['title'] ?></option>
    <?php } ?>

     </select>
  </div>
    <div class="mb-3">
    <label for="exampleInputFiles" > Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputFiles" aria-describedby="filesHelp">
  </div>
 <div class="mb-3">
    <label for="exampleInputTitle" > Date</label>
    <input type="date" name="date" class="form-control" id="exampleInputdate" aria-describedby="dateHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	


</div>





<?php require '../layout/footer.php'; ?>