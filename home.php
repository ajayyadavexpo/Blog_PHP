<?php
session_start();
include_once("connection.php");
if($_SESSION['blog_name']){

}else{
	header("location:register.php");
}
$blog_name = $_SESSION['blog_name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">	
body{background-color: #D6D3D1;}
#header{background-color: grey;padding: 30px; color: white;background: url("luca-bravo-207676-unsplash.jpg")no-repeat;}

</style>
</head>
<body>
<div class="container">
	<div id="header">
		<h2>Welcome <?php echo $blog_name; ?></h2>
		<a href="blogwrite.php" class="btn btn-warning">New</a>
	</div>
	<a href='logout.php'>Logout</a>
	<h2>Your Blogs : ------   </h2>
<?php
$query=mysqli_query($con,"SELECT header,body,blog_time from blogs_data where blog_name='$blog_name'");
$row = mysqli_num_rows($query);
if($row>0){
	while($data = mysqli_fetch_array($query)){
		echo '<div class="media border p-3"><div class="media-body">';
		echo "<h3>".$data['header']."</h3>";
		echo $data['body'];
		echo "<h4 class='text-right'>".$blog_name."<small><i> Posted on ".$data['blog_time']."
		</i></small></h4>";
		echo "</div></div><br>";
		}
		}else{
			echo "<p> !---Sorry You Havent Written any blog --- </p>";
			echo "Click <a href='blogwrite.php'>here</a> to write your first blog !!";
		}
?>
</div>
</body>
</html>