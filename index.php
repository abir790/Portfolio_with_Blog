<?php include 'include/header.php' ; ?>

<?php include 'admin/db/db.php';

$conn=connectDB();
$sql1="SELECT COUNT(id) as total_post FROM post";
$result11=$conn->query($sql1);
$res11=mysqli_fetch_assoc($result11);
$total_post= $res11['total_post'];



$skip=0;
$take=4;
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
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lideShow</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
	<div class="slideShow-container">
		<div class="slideShow-elements">
			<div class="slideShow-element current">
				<i class="fa-brands fa-laravel"></i>
				<h1>Laravel for Back End</h1>
			</div>
				<div class="slideShow-element">
				<i class="fab fa-js"></i>
				<h1>JavaScript for Front End</h1>
			    </div>
			<div class="slideShow-element">
				<i class="fa-thin fa-atom"></i>
				<h1>React for Interactive</h1>
			</div>
			<div class="slideShow-element">
				<i class="fas fa-futbol"></i>
				<h1>I am Full Stack Developer</h1>
			</div>
			
		</div>
		
	</div>

	<div class ="posts">
		<div class="post">
			<h5>hllow</h5>
			<p>how r you</p>
		</div>
		<div class="post">
			<h5>hllow</h5>
			<p>how r you</p>
		</div>
		<div class="post">
			<h5>hllow</h5>
			<p>how r you</p>
		</div>
		<div class="post">
			<h5>hllow</h5>
			<p>how r you</p>
		</div>
		<div class="post">
			<h5>hllow</h5>
			<p>how r you</p>
		</div>
		<div class="post">
			<h5>hllow</h5>
			<p>how r you</p>
		</div>
		<div class="post">
			<h5>hllow</h5>
			<p>how r you</p>
		</div>
		<div class="post">
			<h5>hllow</h5>
			<p>how r you</p>
		</div>

		
	</div>

<script type="text/javascript" src="slid.js"></script>
</body>
</html>
 <div class="ajaira">
    <h3>Hellow</h3>
    <h3>Hellow</h3>
    <h3>Hellow</h3>
    
 </div>

	<div class ="posts">
		<?php foreach ($result as $value) { ?>
		<div class="post">
			<a href="users/view_single_data.php?id=<?= $value['id'] ?>" onmouseover="bigImg(this)" style="text-decoration-line: none;">
			<img src="admin/<?php echo $value['image']; ?> " width=50>
			<p><?php echo substr($value['description'], 2,20); ?></p>
			</a>
		</div>
	<?php } ?>
	</div>

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
                        </a>
                        
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

