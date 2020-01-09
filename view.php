<?php 
	require "baivietphp.php";
	$sql = "SELECT * FROM baiviet where idPost=".$_SESSION["view"];
	$id = $_SESSION["id"];
	$resuilt = $db->query($sql)->fetch_all();
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
		<div style="margin-top: 20px;" class="container-sm">
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
	<div>
		<h3><?php echo $arrPost[$id]->titleContent;?></h3>
		<img src="<?php echo $arrPost[$id]->image;?>" width="400" height ="300">
		<p><?php echo $arrPost[$id]->content; ?></p>
		<i><?php echo $arrPost[$id]->author; ?></i>
	</div>
</body>
</html>