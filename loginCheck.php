<?php 
session_start();
include("config/connect.php");

$user = mysqli_escape_string($con,$_POST["login"]);

$se = mysqli_query($con,"select* from user where us_code = '$user'");
echo $num = mysqli_num_rows($se);

if($num == 1){

	$row = mysqli_fetch_assoc($se);
    
    $_SESSION["userCheckLogin"] = $row["us_code"];

    echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=showName.php">';

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