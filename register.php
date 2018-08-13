<?php

include_once("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{background-color: #DAD8D7;}
		.text-center h2{color:white;background-color: orange;padding: 10px;}
		.now{background-color: #F4B889;width: 90%; padding: 0px 0px 20px 0px;}
		form{padding: 10px;}
		.col-sm-6{background-color: #B8A08C; color: white;font-family: arial;}
		p{margin-left: 10px;}
	</style>
</head>
<body>
<div class="container">
	<div class="now">
		<div class="text-center">
			<h2>Create Account</h2>
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
	<form method="POST">
		<div class="form-group">
			<label for="username">UserName :</label>
			<input type="text" name="name" class="form-control" required="">
		</div>
		<div class="form-group">
			<label for="password">Password :</label>
			<input type="password" class="form-control" name="password" required="">
		</div>
		<div class="form-group">
			<label for="gender">Gender :</label>
			<label for="male">Male
				<input type="radio"  name="gender" value="Male" required=""/>
			</label>
			<label for="female">Female
				<input type="radio" name="gender" value="Female" required=""/>
			</label>
		</div>
		<div class="form-group">
			<label for="blog_name">Blog_name : </label>
			<input type="text" class="form-control" name="blog_name" required=""/>
		</div>
		<button type="submit" class="btn btn-warning" >Submit</button>
	</form>
	<br>
	</div>
<div class="col-sm-3"></div>
</div>
	<p>Click here to <a href="login.php">Login</a></p>
	<p><a href="index.php">Home page</a></p>

<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$gender = mysqli_real_escape_string($con,$_POST['gender']);
	$blog_name = mysqli_real_escape_string($con,$_POST['blog_name']);
	$query = mysqli_query($con,"SELECT blog_name from user_table where blog_name='$blog_name'");
	$row = mysqli_num_rows($query);
	if($row > 0){
		echo "<p><b>Blog name is already taken !!</b></p>";
	}else{	
		$sql =mysqli_query($con,"INSERT INTO user_table(name,password,gender,blog_name) VALUES('$name','$password','$gender','$blog_name')");

		if($sql){
			$_SESSION['blog_name'] = $blog_name;
			header("location:home.php");
		}else{
			echo"<br>There is Error";
		}
	}
}
?>
</div></div>
</body>
</html>