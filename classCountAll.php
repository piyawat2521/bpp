<?php

class countAll {
	
	public function countCon(){

		include("config/connect.php");
		$co = mysqli_query($con," select* from in_data ");
		echo $coRow = mysqli_num_rows($co);

	}
	public function countDate(){

		include("config/connect.php");
		$dateSe = mysqli_query($con," select* from in_data order by in_id desc ");
		$rowData = mysqli_fetch_assoc($dateSe);

		echo '<i class="far fa-calendar-alt"></i> '.$rowData["in_date"].' <i class="far fa-clock"></i> '.$rowData["in_time"];

	}
}

?>