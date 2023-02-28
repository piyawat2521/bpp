<?php
ob_start();
session_start();
include("session/adminUser.php");
include("config/connect.php");
$ck = mysql_db_query($dbname, " select* from dataall where code = '".$_SESSION["id_code"]."' ");
$nCk = mysql_num_rows($ck);

if(!$nCk == "0"){

	echo'
	<script type="text/javascript">
	alert("ระบบตรวจพบข้อมูลข้อท่านอยู่ในระบบนี้แล้ว กรุณาแจ้ขอทำแบบสำรวจใหม่อีกครั้ง");
	</script>
	';
	header("Refresh: 0; url=index.php");
	exit();

}else{}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php include("title_footer.php");?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="font1/fonts.css">
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" href="js/npm.js"></script>
	<script type="text/javascript" src="jsc/jsc1.js"></script>

	<script type="text/javascript" >
      //disable back button
      history.pushState(null, null, '');
      window.addEventListener('popstate', function(event) {
      	history.pushState(null, null, '');
      });
  </script>

</head>
<body>

	<?php include("banner/banner.php");?>
	<div class="bkCenter font_n1">

		<div class="textTitle1" style="font-size: 25px;">
			<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> &nbsp;คำชี้แจงในการตอบแบบสำรวจ
		</div>
		<div class="textTitle1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ให้ใส่เครื่องหมาย <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ในช่อง <span class="glyphicon glyphicon-unchecked"></span> ข้อที่ท่านเลือก </div>
		<div class="textTitle1" style="text-align: right;"> หน้าที่ : 1/12 </div>

		<form name="form1" id="form1" method="post" action="page1Check.php">

			<div class="textTitle1" style="border-bottom: 1px solid #eee; color: #eb3b7c; font-size: 24px;"> ส่วนที่1 
			</div>

			<div class="boxQ">
				<!--<div class="textTitle1">1.1	เลือกแผนกของคุณ</div>-->
				<div class="textTitle1">
					สำนักงานหลักประกันสุขภาพแห่งชาติ
				</div>		
			</div>

			<div class="textTitle1" style="border-bottom: 1px solid #eee; color: #eb3b7c; font-size: 24px;"> ส่วนที่ 2: ข้อมูลทั่วไป</div>  

			<div class="boxQ">
				<div class="textTitle1">2.1 เพศ </div>
				<div class="textTitle1">
					<input type="radio" name="p2_1" id="p2_1" value="1" class="p2_1a"> 1. ชาย
					<input type="radio" name="p2_1" id="p2_1" value="2" class="p2_1"> 2. หญิง
					<input type="radio" name="p2_1" id="p2_1" value="3" class="p2_1"> 3. เพศทางเลือก 
				</div>		
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.2 อายุ  <input type="text" class="form-control" name="p2_2" id="p2_2" maxlength="2" placeholder="ตัวเลข" style="width: 10%; display: inline-block; font-size: 18px;">   ปี </div>
				<div class="textTitle1" style="color: red;">
					* ใส่เฉพาะตัวเลขเท่านั้น*
				</div>		
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.3 จังหวัดที่ท่านอาศัยอยู่ในปัจจุบันเป็นจังหวัดเดียวกับภูมิลำเนาหรือไม่ </div>
				<div class="textTitle1">
					<input type="radio" name="p2_3" id="p2_3" value="1"> 1. ใช่
					<input type="radio" name="p2_3" id="p2_3" value="2"> 2. ไม่ใช่
				</div>		
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.4 ปัจจุบันท่านพักอาศัยอยู่ในลักษณะที่พักอาศัยแบบใด</div>
				<div class="textTitle1">
					<input type="radio" name="p2_4" id="p2_4" value="1" class="p2_4"> 1. บ้านที่ท่านเป็นเจ้าของ
					<input type="radio" name="p2_4" id="p2_4" value="2" class="p2_4"> 2. บ้านผ่อน
					<input type="radio" name="p2_4" id="p2_4" value="3" class="p2_4"> 3. บ้านเช่า/ ห้องเช่า
					<input type="radio" name="p2_4" id="p2_4" value="4" class="p2_4"> 4. บ้าน/ ห้อง ไม่เสียค่าเช่า<br>
					<input type="radio" name="p2_4" id="p2_4" value="5" class="p2_4"> 5. คอนโด/ อพาร์ทเม้นท์ที่ท่านเป็นเจ้าของ
					<input type="radio" name="p2_4" id="p2_4" value="6" class="p2_4"> 6. คอนโด/ อพาร์ทเม้นท์ ผ่อน
					<input type="radio" name="p2_4" id="p2_4" value="7" class="p2_4"> 7. คอนโด/ อพาร์ทเม้นท์เช่า<br>
					<input type="radio" name="p2_4" id="p2_4" value="8" class="p2_4"> 8. คอนโด/ อพาร์ทเม้นท์ ไม่เสียค่าเช่า
				</div>		
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.5 ท่านอาศัยอยู่กับใครบ้าง <span style="color: red">(ตอบได้มากกว่า 1 ข้อ)</span></div>
				<div class="textTitle1">
					<input type="checkbox" name="p2_5_1" id="p2_5" value="1" class="p2_5"> 1. อยู่คนเดียว
					<input type="checkbox" name="p2_5_2" id="p2_5" value="2" class="p2_5"> 2. คู่สมรส (สามี/ ภรรยา)
					<input type="checkbox" name="p2_5_3" id="p2_5" value="3" class="p2_5"> 3. พี่/ น้อง
					<input type="checkbox" name="p2_5_4" id="p2_5" value="4" class="p2_5"> 4. พ่อแม่/ พ่อแม่บุญธรรม/ พ่อแม่เลี้ยง <br>
					<input type="checkbox" name="p2_5_5" id="p2_5" value="5" class="p2_5"> 5. ปู่ ย่า ตา ยาย
					<input type="checkbox" name="p2_5_6" id="p2_5" value="6" class="p2_5"> 6. ลูก/ ลูกบุญธรรม/ ลูกเลี้ยง
					<input type="checkbox" name="p2_5_7" id="p2_5" value="7" class="p2_5"> 7. ญาติอื่นๆ
					<input type="checkbox" name="p2_5_8" id="p2_5" value="8" class="p2_5"> 8. เพื่อน
					<input type="checkbox" name="p2_5_9" id="p2_5" value="9" class="p2_5"> 9. คู่รัก/ คนรัก/ แฟน<br>
					<input type="checkbox" name="p2_5_10" id="p2_5" value="10" class="p2_5a"> 10. อื่นๆ <input type="text" class="form-control" name="p2_5text" id="p2_5text" placeholder="โปรดระบุ" style="width: 50%; display: inline-block; font-size: 18px;">
				</div>		
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)</div>
				<div class="textTitle1">
					<input type="radio" name="p2_6" id="p2_6" value="1" class="p2_6"> 1. ประถมศึกษาหรือต่ำกว่า
					<input type="radio" name="p2_6" id="p2_6" value="2" class="p2_6"> 2. มัธยมศึกษาตอนต้น
					<input type="radio" name="p2_6" id="p2_6" value="3" class="p2_6"> 3. มัธยมศึกษาตอนปลาย
					<input type="radio" name="p2_6" id="p2_6" value="4" class="p2_6"> 4. ปวช.	 
					<input type="radio" name="p2_6" id="p2_6" value="5" class="p2_6"> 5. ปวส.	<br>
					<input type="radio" name="p2_6" id="p2_6" value="6" class="p2_6"> 6. อนุปริญญาหรือเทียบเท่า
					<input type="radio" name="p2_6" id="p2_6" value="7" class="p2_6"> 7. ปริญญาตรี
					<input type="radio" name="p2_6" id="p2_6" value="8" class="p2_6"> 8. สูงกว่าปริญญาตรี
					<input type="radio" name="p2_6" id="p2_6" value="9" class="p2_6"> 9. ไม่ได้รับการศึกษา<br>
					<input type="radio" name="p2_6" id="p2_6" value="10" class="p2_6a"> 10. อื่นๆ <input type="text" class="form-control" name="p2_6text" id="p2_6text" placeholder="โปรดระบุ" style="width: 50%; display: inline-block; font-size: 18px;">
				</div>		
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.7 สถานภาพสมรส</div>
				<div class="textTitle1">
					<input type="radio" name="p2_7" id="p2_7" value="1"> 1. โสด
					<input type="radio" name="p2_7" id="p2_7" value="2"> 2. แต่งงานและอยู่ร่วมกัน
					<input type="radio" name="p2_7" id="p2_7" value="3"> 3. แต่งงานแต่ไม่ได้อยู่ด้วยกัน
					<input type="radio" name="p2_7" id="p2_7" value="4"> 4. อยู่ด้วยกันโดยไม่ได้แต่งงาน <br>
					<input type="radio" name="p2_7" id="p2_7" value="5"> 5. หม้าย
					<input type="radio" name="p2_7" id="p2_7" value="6"> 6. หย่า/แยกทาง/เลิกกัน 
				</div>		
			</div>


			<div class="boxQ">
				<div class="textTitle1">2.8 ท่านมีบุตรหรือไม่ (รวมลูกบุญธรรม/ลูกติด/ลูกเลี้ยง)</span></div>
				<div class="textTitle1">
					<input type="radio" name="p2_8" id="p2_8" value="1" class="p2_8"> 1. ไม่มี
					<input type="radio" name="p2_8" id="p2_8" value="2" class="p2_8"> 2. มี จำนวน 1 คน
					<input type="radio" name="p2_8" id="p2_8" value="3" class="p2_8"> 3. มี จำนวน 2 คน
					<input type="radio" name="p2_8" id="p2_8" value="4" class="p2_8"> 4. มี จำนวน 3-4 คน
					<input type="radio" name="p2_8" id="p2_8" value="5" class="p2_8"> 5. มี จำนวนตั้งแต่ 5 คนขึ้นไป
				</div>		
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.9 ขณะนี้ท่านกำลังตั้งครรภ์หรือไม่ <span style="color: red">(*ถามเฉพาะเพศหญิง)</span></div>
				<div class="textTitle1" style="line-height: 45px;">
					<input type="radio" name="p2_9" id="p2_9" value="1" class="p2_9"> 1. ตั้งครรภ์
					<input type="radio" name="p2_9" id="p2_9" value="2" class="p2_9a"> 2. ไม่ได้ตั้งครรภ์		
				</div>
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.10 ท่านทำงานเป็นกะ/ ทำงานเป็นรอบ/ เข้าเวร ใช่หรือไม่</div>
				<div class="textTitle1">
					<input type="radio" name="p2_10" id="p2_10" value="1"> 1. ไม่ใช่
					<input type="radio" name="p2_10" id="p2_10" value="2"> 2. ทำงานเป็นกะ/ เข้าเวร
				</div>
			</div>

			<div class="boxQ">
				<div class="textTitle1">2.11 ระยะเวลาที่ท่านทำงานในองค์กรปัจจุบัน รวมทั้งหมด</div>
				<div class="textTitle1">
					<input type="radio" name="p2_11" id="p2_11" value="1"> 1. ไม่ถึงปี
					<input type="radio" name="p2_11" id="p2_11" value="2"> 2. ระหว่าง 1 – 2 ปี
					<input type="radio" name="p2_11" id="p2_11" value="3"> 3. ระหว่าง 3 – 5 ปี
					<input type="radio" name="p2_11" id="p2_11" value="4"> 4. ระหว่าง 6 – 9 ปี
					<input type="radio" name="p2_11" id="p2_11" value="5"> 5. ตั้งแต่ 10 ปี ขึ้นไป
				</div>		
			</div> 

			<div class="boxQ">
				<div class="textTitle1">2.12 ตั้งแต่เริ่มทำงานจนถึงปัจจุบัน ท่านลาออก/ย้าย/เปลี่ยนงานมาแล้วกี่ครั้ง</div>
				<div class="textTitle1">
					<input type="radio" name="p2_12" id="p2_12" value="1"> 1. ไม่เคยลาออก ย้ายเปลี่ยนงาน
					<input type="radio" name="p2_12" id="p2_12" value="2"> 2. 1 - 3 ครั้ง
					<input type="radio" name="p2_12" id="p2_12" value="3"> 3. 4 - 6 ครั้ง
					<input type="radio" name="p2_12" id="p2_12" value="4"> 4. 7 - 9 ครั้ง
					<input type="radio" name="p2_12" id="p2_12" value="5"> 5. 10 ครั้งขึ้นไป
				</div>		
			</div> 

			<div class="boxQ">
				<div class="textTitle1">2.13 ท่านมีรายได้ต่อเดือน โดยประมาณเดือนละเท่าใด (รายได้+เงินเดือน+ค่าตอบแทนอื่นๆ)</div>
				<div class="textTitle1">
					<input type="radio" name="p2_13" id="p2_13" value="1"> 1. น้อยกว่า 10,000 บาท
					<input type="radio" name="p2_13" id="p2_13" value="2"> 2. 10,001-20,000 บาท 
					<input type="radio" name="p2_13" id="p2_13" value="3"> 3. 20,001-30,000 บาท
					<input type="radio" name="p2_13" id="p2_13" value="4"> 4. 30,001-40,000 บาท<br>
					<input type="radio" name="p2_13" id="p2_13" value="5"> 5. 40,001-50,000 บาท
					<input type="radio" name="p2_13" id="p2_13" value="6"> 6. 50,001-100,000 บาท
					<input type="radio" name="p2_13" id="p2_13" value="7"> 7. มากกว่า 100,000 บาท
				</div>		
			</div> 

			<div class="boxQ">
				<div class="textTitle1" style="text-align: center;">
					<button type="submit" name="sub" id="sub" class="btn btn-info" style="font-size: 18px;"> บันทึกข้อมูล <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> </button>	
					<input type="hidden" name="l" id="l" value="th">
				</div>
			</div>	
		</form>


	</div>

	<?php include("title_footer/footer.php");?>

</body>
</html>