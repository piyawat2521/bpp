<?php
session_start();
include("session/sessionUser.php");

$arrayPage2 = array("","".$_POST["1_1"]."","".$_POST["1_2"]."","".$_POST["1_3"]."","".$_POST["h2"]."","".$_POST["h3"]."","".$_POST["h4"]."","".$_POST["h5"]."","".$_POST["h6"]."");

$numData = array("","0","25","50","75","100");
$sumPage2 = ($numData[$_POST["h2"]]+$numData[$_POST["h3"]]+$numData[$_POST["h4"]]+$numData[$_POST["h5"]]+$numData[$_POST["h6"]])/5;

for ($i=1; $i <=8 ; $i++) { 
	
	if($arrayPage2[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage2"] = $arrayPage2;
		$_SESSION["sumPage2"] = $sumPage2;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page3.php">';
		//echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=insertDataAll.php">';

	}

}





?>