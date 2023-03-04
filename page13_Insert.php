<?php
session_start();
include("session/sessionUser.php");

$arrayPage13 = array(
    "", "" . $_POST["h69"] . "", "" . $_POST["h70"] . "", "" . $_POST["h71"] . "", "" . $_POST["h72"] . "", "" . $_POST["h73"] . "", "" . $_POST["h74"] . "", "" . $_POST["h75"] . "", "" . $_POST["h76"] . "", "" . $_POST["h77"] . "", "" . $_POST["h78"] . "", "" . $_POST["h79"] . "", "" . $_POST["h80"] . ""
);

// $arrayPage13 = array("", "" . $_POST["13_10"] . "");

$_SESSION["arrayPage13"] = $arrayPage13;

echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=insertDataAll.php">';