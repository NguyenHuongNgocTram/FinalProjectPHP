<?php 
	require "baivietphp.php";
	if (isset($_SESSION["UserName"]) && isset($_SESSION["Passwords"])) {
			echo $_SESSION["UserName"];
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Baiviet</title>
	<link rel="stylesheet" type="text/css" href="Trangchu.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="background" >
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
	<form action="Baiviet.php" method="post" class="container-sm" style="margin-top: 10px;">
		<div cols="60" rows="10">
			<input type="text" name="title-Post" placeholder="Tên tiêu đề">
			<input type="text" name="anhbaiviet" placeholder="Link Anh">
		</div>
		<textarea name="content-Post" cols="60" rows="10" style="margin-top: 10px;" placeholder="bai viet cua ban"></textarea>
		<br>
		<input cols="10" rows="10" type="text" name="authorPost" placeholder="Tên tác giả ">
		<input type="submit" name="Dangbai" value="Dangbai">
	</form>
	<div  class="container-sm">
		<p style="color: red;margin-top: 5px;font-size: 25px">Articles / Bài viết</p>
		<form action="view.php" method="post" class="display" class="container-sm">
			<?php for ($i=0; $i <count($arrPost) ; $i++) { ?>
				<button style="width: 300; height: 200;margin-top: 5px" class="container-sm" name="view" value="<?php echo $arrPost[$i]->idPost;?>">
					<img src="<?php echo $arrPost[$i]->image?>" width="200" height ="150">
					<h5>
						<?php echo $arrPost[$i]->titleContent ; ?>
					</h5>
				</button>
			<?php } ?>
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