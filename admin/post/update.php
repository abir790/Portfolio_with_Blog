<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	} ?>


<?php  require '../db/db.php' ;
$id=$_GET['id'];
$conn=connectDB();


$title=$_POST['title'];
$description=$_POST['description'];
$date=$_POST['date'];
$category_id=$_POST['category_id'];

$sql="SELECT post.* , category.title as categoryTitle
 FROM post
 JOIN category ON category.id=post.category_id WHERE post.id=$id";
$editsql=$conn->query($sql);
$edit=mysqli_fetch_assoc($editsql);

//$image='';
$updateSql="UPDATE post SET title='$title',category_id=$category_id,description='$description',date='$date' ";

$rand=rand(11111,999999999);


if (!empty($_FILES['image']['name'])) {
	$image='assets/image/' . $rand . $_FILES['image']['name'];
	$location='../assets/image/' . $rand . $_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], $location);
	move_uploaded_file($tmp, $location_this_project);

	$updateSql .= ", image='$image'";

	if(!empty($edit['image'] )){
		unlink("../" .$edit['image']);
	}
}

$updateSql.= " WHERE id=$id ";
$updateSql1=$conn->query($updateSql);
if($updateSql1){
	header('location:index.php');
}



/*
<?php  
include '../include/db.php' ;   ///  a  vabeo hobe ///////
$conn=databaseDB();
$id=$_GET['id'];

$name=$_POST['name'];
$category_id=$_POST['category_id'];
$description=$_POST['description'];


$sql="SELECT * FROM post WHERE id=$id";  //  ai query o hobe
//$sql="SELECT post.* , category.title as cattitle
 //FROM post
 //JOIN category ON category.id=post.category_id WHERE post.id=$id";
$result=$conn->query($sql);
$valu=mysqli_fetch_assoc($result);


if ($_FILES['image']['name']) {
$rand=rand(1111,899999);
$upload_for_folder='../assets/photos/'. $rand . $_FILES['image']['name'];
$upload_for_db='assets/photos/'. $rand . $_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp, $upload_for_folder);
$update_sql="UPDATE post SET name='$name',category_id=$category_id,description='$description', image='$upload_for_db' WHERE id=$id ";
$update_result=$conn->query($update_sql);

if (file_exists("../".$valu['image'])) {
	unlink("../".$valu['image']);
}
header('location:index.php');
}else {
$update_sql="UPDATE post SET name='$name',category_id=$category_id,description='$description' WHERE id=$id ";
//$update_result=mysqli_query($conn,$update_sql);
$update_result=$conn->query($update_sql);
header('location:edit.php');
	
}*/

?>