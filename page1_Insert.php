<?php
session_start();
include("session/sessionUser.php");

$arrayPage1 = array("","".$_POST["group"]."","".$_POST["group_sub"]."","".$_POST["sex"]."","".$_POST["age"]."","".$_POST["2_3"]."","".$_POST["2_4"]."","".$_POST["2_5_1"]."","".$_POST["2_5_2"]."","".$_POST["2_5_3"]."","".$_POST["2_5_4"]."","".$_POST["2_5_5"]."","".$_POST["2_5_6"]."","".$_POST["2_5_7"]."","".$_POST["2_5_8"]."","".$_POST["2_5_9"]."","".$_POST["2_5_10"]."","".$_POST["2_5t"]."","".$_POST["2_6"]."","".$_POST["2_6t"]."","".$_POST["2_7"]."","".$_POST["2_8"]."","".$_POST["2_9"]."","".$_POST["2_10"]."","".$_POST["2_11"]."","".$_POST["2_12"]."","".$_POST["2_13"]."");

$_SESSION["arrayPage1"] = $arrayPage1;

echo $_SESSION["arrayPage1"][2];

echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page2.php">';
//echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=insertDataAll.php">';

?>