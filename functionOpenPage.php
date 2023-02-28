<?php
$o = mysqli_query($con," select* from page_open where po_id = 1 ");
$rowO = mysqli_fetch_assoc($o);

if($rowO["po_check"] == 1){
	$checkOpen = "checked";
}elseif($rowO["po_check"] == 0){
	$checkOpen = "";
}
?>