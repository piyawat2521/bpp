<?php
session_start();
include("session/sessionUser.php");

$arrayPage8 = array("","".$_POST["h31"]."","".$_POST["h32"]."","".$_POST["h33"]."");

$numData = array("","0","25","50","75","100");
$sumPage8 = ($numData[$_POST["h31"]]+$numData[$_POST["h32"]]+$numData[$_POST["h33"]])/3;

for ($i=1; $i <=3 ; $i++) { 

	//echo $arrayPage8[$i]."<br>";
	
	if($arrayPage8[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage8"] = $arrayPage8;
		$_SESSION["sumPage8"] = $sumPage8;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page9.php">';

	}

}





?>