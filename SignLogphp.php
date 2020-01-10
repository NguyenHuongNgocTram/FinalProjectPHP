<?php
session_start();
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$dbName = "vietnamesecultures";
	$db = new mysqli($server, $user, $pwd, $dbName);
	$sql = "SELECT * FROM nguoidung;"; 
	$resuilt = $db->query($sql)->fetch_all();
	class nguoidung{
		public $Idcode;
		public $UserName;
		public $Passwords;
		public $Fullname;
		public $Age;
		public $Address;
		public $Phone;
		public $Email;
		function __construct($Idcode,$UserName,$Passwords,$Fullname,$Age,$Address,$Phone,$Email){
			$this->Idcode=$Idcode;
			$this->UserName=$UserName;
			$this->Passwords=$Passwords;
			$this->Fullname=$Fullname;
			$this->Age=$Age;
			$this->Address=$Address;
			$this->Phone=$Phone;
			$this->Email=$Email;
		}
	}
	$mangusers=[];
	for ($i=0; $i <count($resuilt); $i++) { 
		$members[$i] = new nguoidung($resuilt[$i][0],$resuilt[$i][1],$resuilt[$i][2],$resuilt[$i][3],$resuilt[$i][4],$resuilt[$i][5],$resuilt[$i][6],$resuilt[$i][7]);
		array_push($mangusers,$members[$i]);
	}
	if(isset($_POST["login"])){
		$_SESSION["UserName"]=$_POST["UserName"];
		$_SESSION["Passwords"]=$_POST["Passwords"];
		if ($_SESSION["UserName"] == $resuilt[0][1] && $_SESSION["Passwords"] == $resuilt[0][2]) {
			header("location:Trangchu.php");
			echo "Bạn Là Admin!!!";
			die();
		}else {
			for ($i=0; $i < count($resuilt) ; $i++) { 
				if ($_SESSION["UserName"] == $resuilt[$i][1] && $_SESSION["Passwords"] == $resuilt[$i][2]) {
					header("location:Trangchu.php");
					echo "Đăng nhập thành công";
					die();
				}
			}
			echo "Vui Lòng Thử Lại!!!!";
		}
	}
	if(isset($_POST["sign"])){
		$userName=$_POST["userName"];
		$passwords=$_POST["passwords"];
		$fullname=$_POST["fullname"];
		$age=$_POST["age"];
		$address=$_POST["address"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		if ($userName==null||$passwords==null||$fullname==null||$age==null||$address==null||$phone==null||$email==null) {
			echo "Đăng ký không thành công, bạn phải nhập đầy đủ các thông tin";
		}else{
			$sql="INSERT INTO nguoidung VALUES (null,"."'".$userName."'".","."'".$passwords."'".","."'".$fullname."'".",".$age.","."'".$address."'".","."'".$phone."'".","."'".$email."'".");";
			$db->query($sql);
			echo "Đăng Ký thành công vui lòng đang nhập để vào web";
		}
		
	}
?>