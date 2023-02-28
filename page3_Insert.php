<?php
session_start();
include("session/sessionUser.php");

$arrayPage3 = array("","".$_POST["h7"]."","".$_POST["h8"]."","".$_POST["h9"]."","".$_POST["h10"]."","".$_POST["h11"]."");

$numData = array("","0","25","50","75","100");
$sumPage3 = ($numData[$_POST["h7"]]+$numData[$_POST["h8"]]+$numData[$_POST["h9"]]+$numData[$_POST["h10"]]+$numData[$_POST["h11"]])/5;

for ($i=1; $i <=5 ; $i++) { 

	//echo $arrayPage3[$i]."<br>";
	
	if($arrayPage3[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage3"] = $arrayPage3;
		$_SESSION["sumPage3"] = $sumPage3;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page4.php">';
		//echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=insertDataAll.php">';

	}

}





?>