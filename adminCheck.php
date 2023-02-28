<?php 
session_start();
include("config/connect.php");

$user = mysqli_escape_string($con,$_POST["user"]);
$pass = mysqli_escape_string($con,$_POST["pass"]);

$se = mysqli_query($con," select* from admin where ad_user = '$user' and ad_pass = '$pass' ");
echo "mmm".$num = mysqli_num_rows($se);

if($num == 1){

	$row = mysqli_fetch_assoc($se);
    
    $_SESSION["adminCheckUser"] = $row["ad_user"];
    $_SESSION["adminCheckPass"] = $row["ad_pass"];

    echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=adminPage.php">';

}else{

	echo'
	<script type="text/javascript">
	   alert("รหัสผ่านของคุณไม่ถูกต้อง!");
	   exit();
	</script>
	';
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php">';

}


?>