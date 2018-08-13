<?php
include_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{background-color: #D9DCDB;}
		h2{color: white;background-color: #1C6148;padding: 10px;}
		.col-sm-6{background-color:orange;padding: 20px; color: #EDEAE8; font-family: arial;}
		a{color: white;background-color: #813B16;border-radius: 4px;}
		button{margin-bottom: 10px;}
		.container{background-color: #59934A; padding: 0px 0px 40px 0px;}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="container">
<h2 class="text-center">Login </h2>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
<form method="POSt">
	<div class="form-group">
		<label for="blog_name">Blog Name : </label>
		<input type="text" class="form-control" name="blog_name" required=""/>
	</div>
	<div class="form-gorup">
		<label for="password">Password : </label>
		<input type="password" class="form-control" name="password" required=""/><br>
	</div>
	<button type="submit" class="btn btn-dark">Submit</button>
</form>
Join us <a href="register.php">Create Account</a>
<p><a href="index.php">Home page</a></p>
</div>
<div class="col-sm-3"></div>
</div>


<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
	$blog_name = mysqli_real_escape_string($con,$_POST['blog_name']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$query = mysqli_query($con,"SELECT blog_name from user_table where blog_name = '$blog_name'");
	$row = mysqli_num_rows($query);
	if($row>0){
		$_SESSION['blog_name'] = $blog_name;
		header("location:home.php");
	}else{
		echo "<p style='color:red;'>blog_name or password is incorrect Retry !!</p>";
	}
}
?>
</div></div>
</body>
</html>