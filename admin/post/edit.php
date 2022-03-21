<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
  session_start();
  $_SESSION['warning']='please login 1st';

  header('location:../index.php');
  } ?>



<?php  require '../db/db.php' ;
$id=$_GET['id'];
$conn=connectDB();

//$sql="SELECT * FROM post WHERE id=$id";
$sql="SELECT post.* , category.title as categoryTitle
 FROM post
 JOIN category ON category.id=post.category_id WHERE post.id=$id";
$editsql=$conn->query($sql);


$sql="SELECT * FROM category";
$result=$conn->query($sql);

 ?>
<?php require '../layout/header.php'; ?>


<a href="index.php" class="btn btn-success" style=" margin-bottom: 10px;"> Back</a>

<div class="post_create">
  <h1 style="background-color: yellow; ">Edit Post</h1>
  <?php foreach ($editsql as $edit) { ?>

  <form action="update.php?id=<?php echo $edit['id'] ?>" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputTitle" > Title</label>
    <input type="text" name="title" value="<?php echo $edit['title'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputDescription" > Description</label>
    <textarea type="text" name="description"  class="form-control" id="exampleInputDescription" rows="6" aria-describedby="DescriptionHelp"><?php echo $edit['description'] ?></textarea>
  </div>
      <div class="mb-3">
    <label for="exampleInputFiles" > Category</label>
    <select  name="category_id" class="form-control">
      <option>Select Category</option>
      <?php foreach ($result as $value) { ?>
        <?php if ($edit['category_id']==$value['id']) { ?>
          <option value="<?php echo $value['id'] ?>" selected><?php echo  $value['title'] ?></option>
        <?php }else ?>
      <option value="<?php echo $value['id'] ?>"><?php echo  $value['title'] ?></option>
    <?php } ?>

     </select>
  </div>
    <div class="mb-3">
    <label for="exampleInputFiles" > Image</label>
    <img src="../<?php echo $edit['image'] ; ?>" width=100>
    <input type="file" name="image" class="form-control" id="exampleInputFiles" aria-describedby="filesHelp">
  </div>
 <div class="mb-3">
    <label for="exampleInputTitle" > Date</label>
    <input type="date" name="date" value="<?php echo $edit['date'] ?>" class="form-control" id="exampleInputdate" aria-describedby="dateHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <?php } ?>
  


</div>





<?php require '../layout/footer.php'; ?>











