<?php 
if(!$_SESSION["adminCheckUser"] == "adminHoq" and !$_SESSION["adminCheckPass"] == "admin"){

	echo'
	<script type="text/javascript">
	   alert("กรุณาทำการ Login ก่อนใช้งาน!");
	   exit();
	</script>
	';
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php">';

}else{
	
}

 ?>