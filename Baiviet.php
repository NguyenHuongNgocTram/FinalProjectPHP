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
			 Trang Chu
			</a>
			<a href="Gioithieu.php" class="btn btn-light" style="margin-top: 10px;">
			 Gioi Thieu
			</a>
			<a href="Baiviet.php" class="btn btn-light" style="margin-top: 10px;">
			 Bai Viet 
			</a>
			<a href="Lienhe.php" class="btn btn-light" style="margin-top: 10px;">
			 Lien He 
			</a>
			<a href="SignLog.php" class="btn btn-light" style="margin-top: 10px;">
			 Dang nhap/Dang ky
			</a>
		</div>
		<form class="form-inline my-2 my-lg-0">
	      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	</div>
	<marquee direction=”right” style="color: red">Van Hoa Viet Nam Trong tung Ngoc Ngach</marquee>
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
	<form action="view.php" method="post" class="display" class="container-sm">
		<?php for ($i=0; $i <count($arrPost) ; $i++) { ?>
			<button style="width: 300; height: 200" class="container-sm" name="view" value="<?php echo $arrPost[$i]->idPost;?>">
				<img src="<?php echo $arrPost[$i]->image?>" width="200" height ="150">
				<h5>
					<?php echo $arrPost[$i]->titleContent ; ?>
				</h5>
			</button>
		<?php } ?>
	</form>
	<div style="display: flex;justify-content: space-between;" class="container-sm">
		<div>
			<i>Dân ta phải biết sử ta,cho tường gốc tích nước nhà Việt Nam</i>
		</div>
		<div>
			<?php 	
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				echo "VietNam: ".date("Y-m-d H:i:s"). "<br>";
		 	?>
		</div>
	</div>
</body>
</html>