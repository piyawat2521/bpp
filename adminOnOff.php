<?php
session_start();
include("session/sessionAdmin.php");
include("config/connect.php");

if($_POST["onOffData"] == 1){

$inP = mysqli_query($con, " update page_open set po_check = 1 where po_id = 1 ");
echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=adminPage.php">';

}elseif($_POST["onOffData"] == ""){

$inP = mysqli_query($con, " update page_open set po_check = 0 where po_id = 1 ");
echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=adminPage.php">';

}

?>