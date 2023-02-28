<?php
class showsPic {
	
	
	public function pic1($m1){

		if($m1 < 24.99){
			return $img_m1 = '<img src="img/v.png" class="chart_img_s3" width="30">';
			 $img_m1= "Very Unhappy";
		}elseif($m1 >= 25.00 and $m1 <= 49.99){
			return $img_m1 = '<img src="img/u.png" class="chart_img_s3" width="30">';
			$img_m1_t = "Unhappy";
		}elseif($m1 >= 50.00 and $m1 <= 74.99){
			return $img_m1 = '<img src="img/h.png" class="chart_img_s3" width="30">';
			$img_m1_t = "Happy";
		}elseif($m1 >= 75.00 and $m1 <= 100){
			return $img_m1 = '<img src="img/h.png" class="chart_img_s3" width="30">';
			$img_m1_t = "Very Happy";

		}		
	}
	
}
?>