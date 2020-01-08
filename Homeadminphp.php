<?php 
$server = "localhost";
$user = "root";
$pwd = "";
$dbName = "vietnameseculture";
$db = new mysqli($server, $user, $pwd, $dbName);
$sql = "SELECT * FROM postcontents;";
$resuilt = $db->query($sql)->fetch_all();
class postcontents{
		public $idPost;
		public $titleContent;
		public $content;
		public $author;
		function __construct($idPost,$titleContent,$content,$author){
			$this->idPost=$idPost;
			$this->titleContent=$titleContent;
			$this->content=$content;
			$this->author=$author;
		}
	}
	if(isset($_POST["postcontent"])){
		$titleContent=$_POST["title-Post"];
		$content=$_POST["content-Post"];
		$authorContent=$_POST["author"];
		if ($titleContent==null|| $content== null || $author=null) {
			echo "Cập nhập không thành công, bạn phải nhập đầy đủ các thông tin";
		}else{
			$sql="INSERT INTO postcontents VALUES (null,"."'".$titleContent."'".","."'".$content."'".","."'".$authorContent."'".");";
			$db->query($sql);
		}
	}

	$arrPost=[];
	for ($i=0; $i <count($resuilt) ; $i++) { 
		$post[$i]= new postcontents($resuilt[$i][0],$resuilt[$i][1],$resuilt[$i][2],$resuilt[$i][3]);
		array_push($arrPost,$post[$i]);
	}
	if(isset($_POST["deletePost"])) {
		$sql="DELETE FROM postcontents where idPost =".$_POST["deletePost"];
		$db->query($sql);
	}
?>