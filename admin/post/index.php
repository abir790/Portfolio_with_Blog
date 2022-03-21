<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
  session_start();
  $_SESSION['warning']='please login 1st';

  header('location:../index.php');
  } ?>


<?php require '../db/db.php' ; 

$conn=connectDB();
$sql="SELECT * FROM post ";
$result=$conn->query($sql);
?>

<?php require '../layout/header.php'; ?>

<a class="btn btn-success" href="add_create.php ">Add Post</a>
<div class="post_table">
	<h1 style="background-color: yellow">Post List</h1>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">image</th>
      <th scope="col">date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php foreach ($result as $value) { ?>
  <tbody>
    <tr>
      <th ><?php echo $value['id'] ?></th>
      <td><?php echo $value['title'] ?></td>
      <td><img src="../<?php echo $value['image'] ?>" width='100'></td>

      <td><?= $value['date'] ?></td>
      <td>
      	<a class="btn btn-success" href="data_view.php?id=<?php echo $value['id'] ?>">View</a>
      	<a class="btn btn-warning" href="edit.php?id=<?php echo $value['id'] ?>">Edit</a>
      	<a class="btn btn-danger " href="delete.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Are u sure')">Delete</a>
      </td>
    </tr>
  </tbody>
<?php } ?>
</table>


</div>







<?php require '../layout/footer.php'; ?>