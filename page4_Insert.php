<?php
session_start();
include("session/sessionUser.php");

$arrayPage4 = array("","".$_POST["h12"]."","".$_POST["h13"]."","".$_POST["h14"]."","".$_POST["h15"]."","".$_POST["h16"]."");

$numData = array("","0","25","50","75","100");
$sumPage4 = ($numData[$_POST["h12"]]+$numData[$_POST["h13"]]+$numData[$_POST["h14"]]+$numData[$_POST["h15"]]+$numData[$_POST["h16"]])/5;

for ($i=1; $i <=5 ; $i++) { 

	//echo $arrayPage4[$i]."<br>";
	
	if($arrayPage4[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage4"] = $arrayPage4;
		$_SESSION["sumPage4"] = $sumPage4;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page5.php">';

	}

}





?>