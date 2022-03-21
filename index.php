<?php include 'include/header.php' ; ?>

<?php include 'admin/db/db.php';

$conn=connectDB();
$sql1="SELECT COUNT(id) as total_post FROM post";
$result11=$conn->query($sql1);
$res11=mysqli_fetch_assoc($result11);
$total_post= $res11['total_post'];



$skip=0;
$take=2;
$page=1;
if ($_GET['page']) {
	$page=$_GET['page'];
	$skip=($page-1) * 2;
}

$sql="SELECT post.* , category.title as categoryTitle
 FROM post
 JOIN category ON category.id=post.category_id LIMIT $skip,$take ";

 //$sql="SELECT * FROM post LIMIT $skip,$take";
$result=$conn->query($sql);



 ?>



<div class="container" style="margin: 80px;">
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
			  <?php foreach ($result as $value) { ?>


				<div class="single">
				<div class="row">
				   <div class="col-md-4">
						<img src="admin/<?php echo $value['image']; ?>" width=100>
						
					</div>
					<div class="col-md-8">
						<a href="users/view_single_data.php?id=<?= $value['id'] ?>" style="text-decoration: none; color: black;">
						<p ><?php echo substr($value['description'], 2,50); ?></p>
						<p> the page content</p></a>
						
					</div>
					</div>
						
					</div>
					<?php } ?>





				</div>
				
		<div class="col-md-2">
			
		</div>



	</div>
	<?php $total_page=$total_post / $take; ?>
	<p><?php echo "page ".$page.  "of".$total_page ; ?></p>

	<div class="row">
		<div class="col-md-6">
			<div class="text-center">
				
				<?php if ($page>1) { ?>

				<a href="<?php echo $url2 ?>index.php?page=<?php echo $page-1 ; ?>" >>>privious</a>
				<?php } ?>


				 
			</div>
						
		</div>
				<div class="col-md-6 ">
			<div class="text-center">
				<?php if ($page<$total_page) { ?>
				<a href="<?php echo $url2 ?>index.php?page=<?php echo $page+1 ; ?>">next>></a>
				<?php }  ?>
				
			</div>
			
			
		</div>
		
	</div>
	



</div>


<?php include 'include/footer.php' ; ?>

