<?php include '../include/header.php' ; ?>

<?php include '../admin/db/db.php';


$id=$_GET['id'];
$conn=connectDB();
//$sql="SELECT * FROM post WHERE id=$id";
$sql="SELECT post.* , category.title as categoryTitle
 FROM post
 JOIN category ON category.id=post.category_id WHERE post.id=$id ";
$result=$conn->query($sql);


 ?>


<a class="btn btn-success" style="margin: 10px;" href="index.php">Back</a>
<div class="post_create">
		<div class="table table-bordered">
			<h1 style="background-color: yellow;">Details of </h1>
<?php foreach ($result as $value) { ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <td><?php echo $value['title'] ;?></td>
    </tr>

    <tr>
    <th scope="col">Category</th>
      <td><?php echo $value['categoryTitle'] ;?></td>
    </tr>

        <tr>
    <th scope="col">Description</th>
      <td><?php echo $value['description'] ;?></td>
    </tr>

        <tr>
    <th scope="col">Image</th>
      <td><img src="../admin/<?php echo $value['image']; ?>" width=100>

      </td>
    </tr>

            <tr>
    <th scope="col">Date</th>
      <td><?php echo $value['date'] ;?></td>
    </tr>

   
  </thead>

</table>


<?php } ?>

	
		</div>
</div>