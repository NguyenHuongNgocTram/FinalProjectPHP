<?php 
	require "baivietphp.php";
	$sql = "SELECT * FROM baiviet where idPost=".$_SESSION["view"];
	$id = $_SESSION["id"];
	$resuilt = $db->query($sql)->fetch_all();
	
	if (isset($_POST["delete"])){
		$_SESSION["delete"]=$_POST["delete"];
		$sql="DELETE FROM baiviet where idPost=".$_SESSION["delete"];
		$db->query($sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>view Post</title>
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
		</div>
		<form class="form-inline my-2 my-lg-0">
	      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	</div>
	<marquee direction=”right” style="color: red;font-size: 30px;margin-top: 10px;">Vietnamese Culture from North to South/Văn Hóa Việt Nam Từ Bắc Vào Nam</marquee>
	<div class="container-sm">
		<h3><?php echo $arrPost[$id]->titleContent;?></h3>
		<img src="<?php echo $arrPost[$id]->image;?>" width="400" height ="300">
		<p><?php echo $arrPost[$id]->content; ?></p>
		<i><?php echo $arrPost[$id]->author; ?></i>
	</div>
	<form action="Baiviet.php" method="post">
		<button type="submit" name="delete" value="<?php echo $arrPost[$id]->idPost;?>">
			Delete
		</button>
		<button type="submit" name="Update" value="<?php echo $arrPost[$id]->idPost;?>">
			Update
		</button>
		<button type="submit" name="accept" value="<?php echo $arrPost[$id]->idPost;?>">
			accept
		</button>
	</form>
</body>
</html>