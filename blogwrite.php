<?php
include_once("connection.php");
session_start();
if($_SESSION['blog_name']){

}else{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container h3{color: white;}
		body{background-color: #BC6C37;}
	</style>
</head>
<body>
<div class="container">
<h3 class="text-center">Write Your Blog here !!</h3>
<div class="jumbotron">
<form method="POST">
	<div class="form-group">
		<label for="header">Header :</label>
		<input type="text" name="header" required="" class="form-control">
	</div>
	<div class="form-group">
		<label for="body">Body :</label>
		<textarea class="form-control" rows="7" id="comment" name="body"></textarea>
	</div>
	<button type="submit" class="btn btn-info">Save</button>
</form>
</div></div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$blog_name = $_SESSION['blog_name'];
	$header = mysqli_real_escape_string($con, $_POST['header']);
	$body = mysqli_real_escape_string($con, $_POST['body']);
	$blog_time = date("M j, Y"); 
	if(strlen($header)>0){
		$query = mysqli_query($con, "INSERT INTO blogs_data(header,body,blog_time,blog_name) VALUES('$header','$body','$blog_time','$blog_name')");
		if($query){
			header("location:home.php");
		}else{
			die("Error :".mysqli_error($con));
			echo "<h4 style='color:red'>Please Write something !! </h4>";
		}
	}
}

?>