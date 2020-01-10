<?php
	require "SignLogphp.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dang Nhap / Dang Ky</title>
	<link rel="stylesheet" type="text/css" href="Trangchu.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="background">
<div style="display: flex" class="container-sm">
		<div>
			<img src="anh-dep-viet-nam.png" width="100" height="100">
		</div>
		<div style="margin-left: 20px;">
			<a href="Trangchu.php" class="btn btn-light" style="margin-top: 10px;">
				Home(Trang Chủ)
			</a>
			<a href="Gioithieu.php" class="btn btn-light" style="margin-top: 10px;">
				Introduce(Giới thiệu)
			</a>
			<a href="Baiviet.php" class="btn btn-light" style="margin-top: 10px;">
				Articles(Bài Viết)
			</a>
			<a href="Lienhe.php" class="btn btn-light" style="margin-top: 10px;">
				Contact(Liên Hệ)
			</a>
			<a href="SignLog.php" class="btn btn-light" style="margin-top: 10px;">
				Login/SignUp(Đăng Nhập/Đăng Ký)
			</a>
			<a href="SignLog.php" class="btn btn-light" name="logout" style="margin-top: 10px;">
				Log out(Đăng Xuất)
			</a>
		</div>
		<form class="form-inline my-2 my-lg-0">
	      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	</div>
	<marquee direction=”right” style="color: red;font-size: 30px;margin-top: 10px;">Vietnamese Culture from North to South/Văn Hóa Việt Nam Từ Bắc Vào Nam</marquee>
	<div class="container-sm">
		<h5 style="color: red">Login/ Đăng Nhập </h5>
		<form action="SignLog.php" method="post">
			<div class="px-4 py-3">
				<label>UserName</label>
				<input type="text" name="UserName">
			</div>
			<div class="px-4 py-3">
				<label>Password</label>
				<input type="password" name="Passwords">
			</div>
			<button name="login" style="color: red;">Login /Đăng Nhập </button>
		</form>
		<h5 style="color: red;margin-top: 10px;">Sign Up / Đăng Ký </h5>
		<form action="SignLog.php" method="post" style="display: flex;margin-top: 20px">
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
				<button name="sign" style="margin-top: 10px">Sign up/ Đăng Ký </button>
			</div>
		</form>
	</div>
	<div style="display: flex;justify-content: space-between;" class="container-sm">
		<div style="color: red">
			<i>Dân ta phải biết sử ta,cho tường gốc tích nước nhà Việt Nam</i>
		</div>
		<div style="color: red">
			<?php 	
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				echo "VietNam: ".date("Y-m-d H:i:s"). "<br>";
		 	?>
		</div>
	</div>
</body>
</html>