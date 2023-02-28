<?php
session_start();
include("session/sessionUser.php");

$arrayPage7 = array("","".$_POST["h25"]."","".$_POST["h26"]."","".$_POST["h27"]."","".$_POST["h28"]."","".$_POST["h29"]."","".$_POST["h30"]."");

$numData = array("","0","25","50","75","100");
$sumPage7 = ($numData[$_POST["h25"]]+$numData[$_POST["h26"]]+$numData[$_POST["h27"]]+$numData[$_POST["h28"]]+$numData[$_POST["h29"]]+$numData[$_POST["h30"]])/6;

for ($i=1; $i <=3 ; $i++) { 

	//echo $arrayPage7[$i]."<br>";
	
	if($arrayPage7[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage7"] = $arrayPage7;
		$_SESSION["sumPage7"] = $sumPage7;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page8.php">';

	}

}





?>