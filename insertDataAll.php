<?php
session_start();
include("session/sessionUser.php");

date_default_timezone_set("Asia/Bangkok");
$date = date("d/m/") . (date("Y") + 543);
$time = date("H:i:s");


include("config/connect.php");

$check = mysqli_query($con, " select* from in_data where in_date = '" . $_SESSION["idCode"] . "' ");
$num = mysqli_num_rows($check);

if ($num == 0) {

	$in = mysqli_query($con, " insert into in_data values(
	'','" . $_SESSION["arrayPage1"][1] . "','" . $_SESSION["arrayPage1"][2] . "','" . $_SESSION["arrayPage1"][3] . "','" . $_SESSION["arrayPage1"][4] . "','" . $_SESSION["arrayPage1"][5] . "','" . $_SESSION["arrayPage1"][6] . "','" . $_SESSION["arrayPage1"][7] . "','" . $_SESSION["arrayPage1"][8] . "','" . $_SESSION["arrayPage1"][9] . "','" . $_SESSION["arrayPage1"][10] . "','" . $_SESSION["arrayPage1"][11] . "','" . $_SESSION["arrayPage1"][12] . "','" . $_SESSION["arrayPage1"][13] . "','" . $_SESSION["arrayPage1"][14] . "','" . $_SESSION["arrayPage1"][15] . "','" . $_SESSION["arrayPage1"][16] . "','" . $_SESSION["arrayPage1"][17] . "','" . $_SESSION["arrayPage1"][18] . "','" . $_SESSION["arrayPage1"][19] . "','" . $_SESSION["arrayPage1"][20] . "','" . $_SESSION["arrayPage1"][21] . "','" . $_SESSION["arrayPage1"][22] . "','" . $_SESSION["arrayPage1"][23] . "','" . $_SESSION["arrayPage1"][24] . "','" . $_SESSION["arrayPage1"][25] . "','" . $_SESSION["arrayPage1"][26] . "','" . $_SESSION["arrayPage1"][27] . "','" . $_SESSION["arrayPage1"][28] . "',
	'" . $_SESSION["arrayPage1"][29] . "','" . $_SESSION["arrayPage1"][30] . "','" . $_SESSION["arrayPage1"][31] . "','" . $_SESSION["arrayPage1"][32] . "',
	'" . $_SESSION["arrayPage2"][1] . "','" . $_SESSION["arrayPage2"][2] . "','" . $_SESSION["arrayPage2"][3] . "','" . $_SESSION["arrayPage2"][4] . "','" . $_SESSION["arrayPage2"][5] . "','" . $_SESSION["arrayPage2"][6] . "','" . $_SESSION["arrayPage2"][7] . "','" . $_SESSION["arrayPage2"][8] . "','" . $_SESSION["arrayPage2"][9] . "','" . $_SESSION["arrayPage2"][10] . "','" . $_SESSION["arrayPage2"][11] . "','" . $_SESSION["arrayPage2"][12] . "','" . $_SESSION["arrayPage2"][13] . "','" . $_SESSION["arrayPage2"][14] . "','" . $_SESSION["arrayPage3"][1] . "','" . $_SESSION["arrayPage3"][2] . "','" . $_SESSION["arrayPage3"][3] . "','" . $_SESSION["arrayPage3"][4] . "','" . $_SESSION["arrayPage3"][5] . "','" . $_SESSION["arrayPage3"][6] . "','" . $_SESSION["arrayPage4"][1] . "','" . $_SESSION["arrayPage4"][2] . "','" . $_SESSION["arrayPage4"][3] . "','" . $_SESSION["arrayPage4"][4] . "','" . $_SESSION["arrayPage4"][5] . "','" . $_SESSION["arrayPage4"][6] . "','" . $_SESSION["arrayPage5"][1] . "','" . $_SESSION["arrayPage5"][2] . "','" . $_SESSION["arrayPage5"][3] . "','" . $_SESSION["arrayPage5"][4] . "','" . $_SESSION["arrayPage5"][5] . "','" . $_SESSION["arrayPage5"][6] . "','" . $_SESSION["arrayPage6"][1] . "','" . $_SESSION["arrayPage6"][2] . "','" . $_SESSION["arrayPage6"][3] . "','" . $_SESSION["arrayPage6"][4] . "','" . $_SESSION["arrayPage7"][1] . "','" . $_SESSION["arrayPage7"][2] . "','" . $_SESSION["arrayPage7"][3] . "','" . $_SESSION["arrayPage7"][4] . "','" . $_SESSION["arrayPage7"][5] . "','" . $_SESSION["arrayPage7"][6] . "','" . $_SESSION["arrayPage7"][7] . "','" . $_SESSION["arrayPage8"][1] . "','" . $_SESSION["arrayPage8"][2] . "','" . $_SESSION["arrayPage8"][3] . "','" . $_SESSION["arrayPage8"][4] . "','" . $_SESSION["arrayPage9"][1] . "','" . $_SESSION["arrayPage9"][2] . "','" . $_SESSION["arrayPage9"][3] . "','" . $_SESSION["arrayPage9"][4] . "','" . $_SESSION["arrayPage9"][5] . "','" . $_SESSION["arrayPage10"][1] . "','" . $_SESSION["arrayPage10"][2] . "','" . $_SESSION["arrayPage10"][3] . "','" . $_SESSION["arrayPage10"][4] . "','" . $_SESSION["arrayPage10"][5] . "','" . $_SESSION["arrayPage10"][6] . "','" . $_SESSION["arrayPage10"][7] . "','" . $_SESSION["arrayPage10"][8] . "','" . $_SESSION["arrayPage10"][9] . "','" . $_SESSION["arrayPage10"][10] . "','" . $_SESSION["arrayPage10"][11] . "','" . $_SESSION["arrayPage10"][12] . "','" . $_SESSION["arrayPage10"][13] . "','" . $_SESSION["arrayPage10"][14] . "','" . $_SESSION["arrayPage10"][15] . "','" . $_SESSION["arrayPage10"][16] . "','" . $_SESSION["arrayPage10"][17] . "','" . $_SESSION["arrayPage10"][18] . "','" . $_SESSION["arrayPage11"][1] . "','" . $_SESSION["arrayPage11"][2] . "','" . $_SESSION["arrayPage11"][3] . "','" . $_SESSION["arrayPage11"][4] . "','" . $_SESSION["arrayPage11"][5] . "','" . $_SESSION["arrayPage11"][6] . "','" . $_SESSION["arrayPage11"][7] . "','" . $_SESSION["arrayPage11"][8] . "','" . $_SESSION["arrayPage11"][9] . "','" . $_SESSION["arrayPage12"][1] . "','" . $_SESSION["arrayPage12"][2] . "','" . $_SESSION["arrayPage12"][3] . "','" . $_SESSION["arrayPage12"][4] . "','" . $_SESSION["arrayPage12"][5] . "','" . $_SESSION["arrayPage13"][1] . "','" . $_SESSION["arrayPage13"][2] . "','" . $_SESSION["arrayPage13"][3] . "','" . $_SESSION["arrayPage13"][4] . "','" . $_SESSION["arrayPage13"][5] . "','" . $_SESSION["arrayPage13"][6] . "','" . $_SESSION["arrayPage13"][7] . "','" . $_SESSION["arrayPage13"][8] . "','" . $_SESSION["arrayPage13"][9] . "','" . $_SESSION["arrayPage13"][10] . "','" . $_SESSION["arrayPage13"][11] . "','" . $_SESSION["arrayPage13"][12] . "','$date','$time','" . $_SESSION["idCode"] . "') ");


	if (isset($in)) {

		//mysqli_query($con," update user set us_confirm = 1 where us_code = '".$_SESSION["userCheckLogin"]."' ");
		echo '
					<script type="text/javascript">
					alert("บันทึกข้อมูลของท่านเรียบร้อยแล้ว!");
					exit();
					</script>
					';
		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=showData.php">';
	} else {

		echo '
					<script type="text/javascript">
					alert("ไม่สามารถบันทึกข้อมูลของท่านได้ในขณะนี้ เนื่องจากตอนนี้ระบบเกิดข้อผิดพลาดในการบันทึกข้อมูล กรุณาทำใหม่อีกครั้งรอประมาณ 20 ทนาที!");
					exit();
					</script>
					';
		echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php">';
	}
} else {
	echo '
	<script type="text/javascript">
	alert("บันทึกข้อมูลของท่านเรียบร้อยแล้ว!");
	exit();
	</script>
	';
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=showData.php">';
}