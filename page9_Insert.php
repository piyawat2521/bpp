<?php
session_start();
include("session/sessionUser.php");

$arrayPage9 = array("","".$_POST["h34"]."","".$_POST["h35"]."","".$_POST["h36"]."","".$_POST["h37"]."");

$numData = array("","0","25","50","75","100");
$sumPage9 = ($numData[$_POST["h34"]]+$numData[$_POST["h35"]]+$numData[$_POST["h36"]]+$numData[$_POST["h37"]])/4;

for ($i=1; $i <=4 ; $i++) { 

	//echo $arrayPage9[$i]."<br>";
	
	if($arrayPage9[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage9"] = $arrayPage9;
		$_SESSION["sumPage9"] = $sumPage9;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page10.php">';

	}

}





?>