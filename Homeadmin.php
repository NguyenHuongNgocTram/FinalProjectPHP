<?php
require "homephp.php";
require "Homeadminphp.php";
if (isset($_SESSION["UserName"]) && isset($_SESSION["Passwords"])) {
			echo $_SESSION["UserName"];
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title> VĂN HÓA VIỆT NAM </title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div>
		<header> VĂN HÓA VIỆT NAM </header>

	</div>
	<ul class="nav">
		<li class="nav-item">
		    <a class="nav-link active" href="trangchu.php">
		    	<button type="button" class="btn btn-danger" > Trang chủ </button>
		    </a>
		</li>
		<li class="nav-item">
		    <a class="nav-link" href="Gioithieu.php">
		    	<button type="button" class="btn btn-danger"> Giới thiệu </button>
			</a>
		</li>
		<li class="nav-item">
		    <a class="nav-link" href="Thanhvien.php">
		    	<button type="button" class="btn btn-danger">Thành viên</button>
		    </a>
		</li>
		<li class="nav-item">
		    <a class="nav-link" href="Homeadmin.php">
		    	<button type="button" class="btn btn-danger">Tro chuyen</button>
		    </a>
		</li>
		<li class="nav-item">
		    <a class="nav-link" href="Homeadmin.php">
		    	<button type="button" class="btn btn-danger"> Du lịch bụi </button>
		    </a>
		</li>
	</ul>
	<div class="content-left">
		<form action="Homeadmin.php" method="post">
			<input type="text" name="title-Post" placeholder="Tên tiêu đề">
			<br>
			<textarea name="content-Post" cols="300" rows="10" style="margin-top: 10px"></textarea>
			<input style="margin-top: 10px" type="text" name="author" placeholder="Tên tác giả ">
			<input type="submit" name="postcontent" value="Dangbai">
		</form>
	</div>
	<button>Bài viết cần kiểm duyệt </button>
	<?php for ($i=0; $i <count($arrPost) ; $i++) { ?>
		<div>
			<h3><?php echo $arrPost[$i]->titleContent; ?></h3>
			<p><?php echo $arrPost[$i]->content; ?></p>
			<i><?php echo $arrPost[$i]->author; ?></i>
		</div>
		<form action="" method="post">
			<button type="submit" name="deletePost" value="<?php echo $arrPost[$i]->idPost; ?>">delete</button>
		</form>
	<?php } ?>
	<div class="finalist">
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
	<script src="thanhvien.js"></script>
</body>
</html>