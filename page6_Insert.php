<?php
session_start();
include("session/sessionUser.php");

$arrayPage6 = array("","".$_POST["h22"]."","".$_POST["h23"]."","".$_POST["h24"]."");

$numData = array("","0","25","50","75","100");
$sumPage6 = ($numData[$_POST["h22"]]+$numData[$_POST["h23"]]+$numData[$_POST["h24"]])/3;

for ($i=1; $i <=3 ; $i++) { 

	//echo $arrayPage6[$i]."<br>";
	
	if($arrayPage6[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage6"] = $arrayPage6;
		$_SESSION["sumPage6"] = $sumPage6;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page7.php">';

	}

}





?>