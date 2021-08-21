<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

MySQLi_connect($host,$user,$password);
MySQLi_select_db($db,'demo');

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=MySQLi_query($sql);
    
    if(MySQLi_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form Design By Nirmal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
				<form class="login-form validate-form">
					<span class="login-form-title">
						Welcome
					</span>
				
					<div class="wrap-input validate-input" >
						<input class="input" type="text" name="username">
						<span class="focus-input" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input" type="password" name="pass">
						<span class="focus-input" data-placeholder="Password"></span>
					</div>

					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<button class="login-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

<script src="js/jquery-3.2.1.min.js"></script>

<script src="js/main.js"></script>



</body>
</html>