<?php
session_start();
include("session/sessionUser.php");

$arrayPage12 = array("","".$_POST["h64"]."","".$_POST["h65"]."","".$_POST["h66"]."","".$_POST["h67"]."","".$_POST["h68"]."","".$_POST["h69"]."");

$numData = array("","0","25","50","75","100");
$sumPage12 = ($numData[$_POST["h64"]]+$numData[$_POST["h65"]]+$numData[$_POST["h66"]]+$numData[$_POST["h67"]]+$numData[$_POST["h68"]])/5;

for ($i=1; $i <=5 ; $i++) { 

	//echo $arrayPage12[$i]."<br>";
	
	if($arrayPage12[$i] == ""){

		echo "มีค่าว่าง <br>";
		exit();

	}else{

		$_SESSION["arrayPage12"] = $arrayPage12;
		$_SESSION["sumPage12"] = $sumPage12;

		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=insertDataAll.php">';

	}

}
?>