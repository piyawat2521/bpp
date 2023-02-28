<?php
session_start();
include("session/sessionUser.php");

$arrayPage11 = array("","".$_POST["h55"]."","".$_POST["h56"]."","".$_POST["h57"]."","".$_POST["h58"]."","".$_POST["h59"]."","".$_POST["h60"]."","".$_POST["h61"]."","".$_POST["h62"]."","".$_POST["h63"]."");

$numData = array("","0","25","50","75","100");
$sumPage11 = ($numData[$_POST["h55"]]+$numData[$_POST["h56"]]+$numData[$_POST["h57"]]+$numData[$_POST["h58"]]+$numData[$_POST["h59"]]+$numData[$_POST["h60"]]+$numData[$_POST["h61"]]+$numData[$_POST["h62"]]+$numData[$_POST["h63"]])/9;

for ($i=1; $i <=9 ; $i++) { 

	//echo $arrayPage11[$i]."<br>";
	
	if($arrayPage11[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage11"] = $arrayPage11;
		$_SESSION["sumPage11"] = $sumPage11;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page12.php">';

	}

}





?>