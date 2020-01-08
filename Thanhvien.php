<?php
	require "homephp.php";
	require "Homeadminphp.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thành viên</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: lightblue">
	<div style="margin-left: 200px;margin-right: 300px;margin-top: 100px">
		<header style="color: red; background-color: lightblue; font-size: 29px"> Thành viên </header>
		<input style="margin-top: 20px;" type="button" class="btn btn-danger" value="LogIn" onclick="clicklogin()">
		<div id="hienthilogin" style="margin-left: 100px;margin-right: 100px">
			<h5>Login</h5>
			<form action="Thanhvien.php" method="post" class="px-4 py-3" style="display: flex;">
				<div class="px-4 py-3">
					<label>UserName</label>
					<input type="text" name="UserName">
				</div>
				<div class="px-4 py-3">
					<label>Password</label>
					<input type="password" name="Passwords">
				</div>
				<button name="login" style="color: red;">LOGIN</button>
			</form>
		</div>
		<input style="margin-top: 20px;" type="button" class="btn btn-danger" value="Sign" onclick="clickSign()">
		<div style="margin-left: 100px;margin-right: 100px" id="hienthiSign">
			<form action="Thanhvien.php" method="post" style="display: flex;">
				<h5> Login</h5>
				<div class="px-4 py-3">
					<label>UserName</label>
					<br>
					<input type="text" name="userName">
					<br>
					<label>Password</label>
					<br>
					<input type="password" name="passwords">
					<br>
					<label>Full Name</label>
					<br>
					<input type="text" name="fullname">
					<br>
					<label>Age</label>
					<br>
					<input type="text" name="age">
					<br>
				</div>
				<div class="px-4 py-3">
					<label>Address</label>
					<br>
					<input type="text" name="address">
					<br>
					<label>Phone</label>
					<br>
					<input type="text" name="phone">
					<br>
					<label>Email</label>
					<br>
					<input type="text" name="email">
					<br>
					<b name="check"></b>
					<br>
					<button name="sign" style="margin-top: 10px">SIGN</button>
				</div>
			</form>
		</div>
	</div>
	<script src="thanhvien.js"></script>
</body>
</html>