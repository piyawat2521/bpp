<?php
session_start();
include("session/sessionUser.php");

$arrayPage10 = array("","".$_POST["h38"]."","".$_POST["h39"]."","".$_POST["h40"]."","".$_POST["h41"]."","".$_POST["h42"]."","".$_POST["h43"]."","".$_POST["h44"]."","".$_POST["h45"]."","".$_POST["h46"]."","".$_POST["h47"]."","".$_POST["h48"]."","".$_POST["h49"]."","".$_POST["h50"]."","".$_POST["h51"]."","".$_POST["h52"]."","".$_POST["h53"]."","".$_POST["h54"]."");

$numData = array("","0","25","50","75","100");
$sumPage10 = ($numData[$_POST["h38"]]+$numData[$_POST["h39"]]+$numData[$_POST["h40"]]+$numData[$_POST["h41"]]+$numData[$_POST["h42"]]+$numData[$_POST["h43"]]+$numData[$_POST["h44"]]+$numData[$_POST["h45"]]+$numData[$_POST["h46"]]+$numData[$_POST["h47"]]+$numData[$_POST["h48"]]+$numData[$_POST["h49"]]+$numData[$_POST["h50"]]+$numData[$_POST["h51"]]+$numData[$_POST["h52"]]+$numData[$_POST["h53"]]+$numData[$_POST["h54"]])/17;

for ($i=1; $i <=17 ; $i++) { 

	//echo $arrayPage10[$i]."<br>";
	
	if($arrayPage10[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage10"] = $arrayPage10;
		$_SESSION["sumPage10"] = $sumPage10;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page11.php">';

	}

}





?>