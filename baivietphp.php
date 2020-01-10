<?php
	require "SignLogphp.php";
	$sql = "SELECT * FROM baiviet;"; 
	$resuilt = $db->query($sql)->fetch_all();
	class postcontents{
		public $image;
		public $idPost;
		public $titleContent;
		public $content;
		public $author;
		function __construct($idPost,$image,$titleContent,$content,$author){
			$this->idPost=$idPost;
			$this->image=$image;
			$this->titleContent=$titleContent;
			$this->content=$content;
			$this->author=$author;
		}
	} 
	if(isset($_POST["Dangbai"])){
		$image= $_POST["anhbaiviet"];
		$titleContent = $_POST["title-Post"];
		$content = $_POST["content-Post"];
		$author = $_POST["authorPost"];
		if ($image==null||$titleContent==null|| $content== null || $author==null) {
			echo "Cập nhập không thành công, bạn phải nhập đầy đủ các thông tin";
		}else{
			$sql="INSERT INTO baiviet VALUES (null,"."'".$image."'".","."'".$titleContent."'".","."'".$content."'".","."'".$author."'".");";
			$db->query($sql);
			
		}
	}
	$arrPost=[];
	for ($i=0; $i <count($resuilt) ; $i++) { 
		$post[$i]= new postcontents($resuilt[$i][0],$resuilt[$i][1],$resuilt[$i][2],$resuilt[$i][3],$resuilt[$i][4]);
		array_push($arrPost,$post[$i]);
	}
	if (isset($_POST["view"])) {
		$_SESSION["view"]=$_POST["view"];
		for ($i=0; $i < count($resuilt); $i++) { 
			if($_SESSION["view"]==$resuilt[$i][0]){
				$_SESSION["id"]= $i;
				header("location:view.php");
			}
		}
	}
?>