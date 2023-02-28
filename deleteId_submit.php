<?php
session_start();
include("session/sessionAdmin.php");
include("config/connect.php");
include("functionOpenPage.php");

include 'config/connect.php';


$de = mysqli_query($con," delete from in_data where in_id = '".$_GET["id"]."' ");

if($de == ""){
	echo "No";
}else{
	header("location:adminPage.php");
}

?>