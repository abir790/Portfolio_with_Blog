  <?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
  session_start();
  $_SESSION['warning']='please login 1st';

  header('location:../index.php');
  } ?>

<?php include '../db/db.php'; ?>

<?php  
$conn=connectDB();
$sql='SELECT * FROM category';
$result=$conn->query($sql);
?>

<?php include '../layout/header.php' ?>

<?php if(isset($_SESSION['insert'])){ ?>
  <div class="alert alert-primary" role="alert">
    <?php echo $_SESSION['insert']; ?>

</div>

<?php } ?>
<?php if(isset($_SESSION['update'])){ ?>
  <div class="alert alert-primary" role="alert">
    <?php echo $_SESSION['update']; ?>

</div>

<?php } ?>
<?php if(isset($_SESSION['delete'])){ ?>
  <div class="alert alert-primary" role="alert">
    <?php echo $_SESSION['delete']; ?>

</div>

<?php } ?>


<a id="m" class="btn btn-success" href="add_form.php " >Add Category</a>

<div class="category " >


   <h1 class="cl">Category List</h1>

  <table class="table table-bordered" >
    
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php foreach ($result as $value) { ?>
  
  <tbody>
    <tr>
      <th scope="row"><?php echo $value['id']; ?></th>
      <td><?php echo $value['title']; ?></td>
      <td>
        <a class="btn btn-success" href="edit.php?id=<?php echo $value['id']; ?>">Edit</a>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $value['id']; ?>" onclick="return confirm('R U SURE')">Detete</a>
      </td>

    </tr>

  </tbody>
  <?php } ?>
</table>

</div>



<?php include '../layout/footer.php' ?>
<?php unset($_SESSION['insert']) ?>
<?php unset($_SESSION['update']) ?>
<?php unset($_SESSION['delete']) ?>



