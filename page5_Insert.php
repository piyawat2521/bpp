<?php
session_start();
include("session/sessionUser.php");

$arrayPage5 = array("","".$_POST["h17"]."","".$_POST["h18"]."","".$_POST["h19"]."","".$_POST["h20"]."","".$_POST["h21"]."");

$numData = array("","0","25","50","75","100");
$sumPage5 = ($numData[$_POST["h17"]]+$numData[$_POST["h18"]]+$numData[$_POST["h19"]]+$numData[$_POST["h20"]]+$numData[$_POST["h21"]])/5;

for ($i=1; $i <=5 ; $i++) { 

	//echo $arrayPage5[$i]."<br>";
	
	if($arrayPage5[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage5"] = $arrayPage5;
		$_SESSION["sumPage5"] = $sumPage5;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page6.php">';
		//echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=insertDataAll.php">';

	}

}





?>