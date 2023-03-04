<?php
session_start();
include("session/sessionUser.php");
include("numPage.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="MDB/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title><?php include("title-footer/title.php"); ?></title>
</head>

<body>

    <?php include("banner/banner.php"); ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="font-h1">คำชี้แจงในการตอบแบบสำรวจ : ให้ใส่เครื่องหมาย <i class="fas fa-check"></i> ในช่อง <i
                        class="fas fa-expand"></i> ทุกข้อที่ท่านเลือก</div>
            </div>
        </div>
    </div>

    <form name="page2" id="page2" method="post" action="page2_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 2/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> Happy Body / สุขภาพกายดี
                            </div>
                        </div>
                    </div>

                    <!-- คำถาม -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <table
                                    style="text-align: center; width: 100%; height: auto; padding: 10px; border: 1px solid #eee;">
                                    <tr>
                                        <th style="padding: 5px;">
                                            <h5>BMI(กิโลกรัม/เมตร2)</h5>
                                        </th>
                                        <th style="padding: 5px;">
                                            <h5>น้ำหนัก</h5>
                                        </th>
                                        <th style="padding: 5px;">
                                            <h5>ภาวะเสี่ยงต่อโรค</h5>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px;">
                                            < 18.5</td>
                                        <td style="padding: 5px;">น้ำหนักน้อย</td>
                                        <td style="padding: 5px;">ต่ำ</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px;">18.5-22.9</td>
                                        <td style="padding: 5px;">น้ำหนักปกติ</td>
                                        <td style="padding: 5px;">เท่าคนปกติ</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px;">23-24.9</td>
                                        <td style="padding: 5px;">น้ำหนักเกิน</td>
                                        <td style="padding: 5px;">มากกว่าปกติ</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px;">25-29.9</td>
                                        <td style="padding: 5px;">โรคอ้วน</td>
                                        <td style="padding: 5px;">สูง</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px;">>=30</td>
                                        <td style="padding: 5px;">อ้วนมาก</td>
                                        <td style="padding: 5px;">อยู่ในช่วงอันตราย</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-6"
                                style="text-align: center; border: 20px 10px 20px 10px; border: 1px solid #eee; margin-bottom: 20px;">
                                <h5>ภาวะอ้วนลงพุงชาย</h5>
                                รอบเอวมากกว่า 90 ซม.หรือมากกว่า 35.4 นิ้ว
                                <hr>
                                <h5>หญิง</h5>
                                รอบเอวมากกว่า 80 ซม.หรือมากกว่า 31.5 นิ้ว
                                <hr>
                                <h6>ที่มา: กรมอนามัย กระทรวงสาธารณสุข</h6>
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="textQ">
                                    <!-- Default input -->
                                    <label for="exampleForm2">1.1 ปัจจุบัน ท่านมีน้ำหนัก</label>
                                    <input type="text" name="1_1" id="1_1" class="form-control inputAge" maxlength="3">
                                    กิโลกรัม * ใส่เฉพาะตัวเลขเท่านั้น *
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="textQ">
                                    <!-- Default input -->
                                    <label for="exampleForm2">1.2 ส่วนสูง</label>
                                    <input type="text" name="1_2" id="1_2" class="form-control inputAge" maxlength="3">
                                    เซนติเมตร * ใส่เฉพาะตัวเลขเท่านั้น *
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="textQ">
                                    <!-- Default input -->
                                    <label for="exampleForm2">1.3 เส้นรอบเอว</label>
                                    <input type="text" name="1_3" id="1_3" class="form-control inputAge" maxlength="3">
                                    นิ้ว * ใส่เฉพาะตัวเลขเท่านั้น *
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2. โดยปกติท่านกินอาหารเช้า
                                    โดยเฉลี่ยสัปดาห์ละกี่วัน</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h2" class="form-check-input" id="h2" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่กิน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h2" class="form-check-input" id="h2" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. กินแต่ไม่บ่อย
                                            (1-2 วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h2" class="form-check-input" id="h2" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. กินเป็นบางครั้ง
                                            (3-4 วัน)</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h2" class="form-check-input" id="h2" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. กินเป็นประจำ
                                            (5-6 วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h2" class="form-check-input" id="h2" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            กินทุกวัน</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- เพิ่มใหม่ -->

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">3. โดยปกติท่านกินอาหารที่มีรสหวานจัด เช่น
                                    ลูกอม/ทอฟฟี่ ช็อคโกแลต ขนมหวานต่าง ๆ เครื่องดื่มที่มีรสหวาน น้ำอัดลมฯลฯ
                                    บ่อยเพียงใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="hn3" class="form-check-input" id="hn3" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.กินทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn3" class="form-check-input" id="hn3" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.กินเป็นประจำ (5-6
                                            วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn3" class="form-check-input" id="hn3" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. กินเป็นบางครั้ง
                                            (3-4 วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn3" class="form-check-input" id="hn3" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.กินแต่ไม่บ่อย (1-2
                                            วัน) </label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn3" class="form-check-input" id="hn3" value="5">
                                        <label class="form-check-label" for="materialGroupExample3">5. ไม่กิน</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">4. โดยปกติท่านกินอาหารที่มีรสเค็มจัด เช่น
                                    อาหารที่เพิ่มน้ำปลา หรือซอสปรุงรสต่างๆ อาหารกระป๋อง ขนมขบเคี้ยว อาหารกึ่งสำเร็จรูป
                                    อาหารตากแห้งหมักดอง อาหารรสจัด บ่อยเพียงใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="hn4" class="form-check-input" id="hn4" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.กินทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn4" class="form-check-input" id="hn4" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.กินเป็นประจำ (5-6
                                            วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn4" class="form-check-input" id="hn4" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. กินเป็นบางครั้ง
                                            (3-4 วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn4" class="form-check-input" id="hn4" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.กินแต่ไม่บ่อย (1-2
                                            วัน) </label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn4" class="form-check-input" id="hn4" value="5">
                                        <label class="form-check-label" for="materialGroupExample3">5. ไม่กิน</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">5. โดยปกติท่านกินอาหารมันจัด/ ของมันจัด เช่น
                                    ของทอด หมูกระทะ อาหารที่มีส่วนผสมของซีส/ เนย ฟาสต์ฟู้ดฯ บ่อยเพียงใด </label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="hn5" class="form-check-input" id="hn5" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.กินทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn5" class="form-check-input" id="hn5" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.กินเป็นประจำ (5-6
                                            วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn5" class="form-check-input" id="hn5" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. กินเป็นบางครั้ง
                                            (3-4 วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn5" class="form-check-input" id="hn5" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.กินแต่ไม่บ่อย (1-2
                                            วัน) </label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn5" class="form-check-input" id="hn5" value="5">
                                        <label class="form-check-label" for="materialGroupExample3">5. ไม่กิน</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">6. โดยปกติท่านกินผักและผลไม้ บ่อยเพียงใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="hn6" class="form-check-input" id="hn6" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.ไม่กินเลย</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn6" class="form-check-input" id="hn6" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.กินแต่ไม่บ่อย (1-2
                                            วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn6" class="form-check-input" id="hn6" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. กินเป็นบางครั้ง
                                            (3-4 วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn6" class="form-check-input" id="hn6" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.กินเป็นประจำ (5-6
                                            วัน)</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn6" class="form-check-input" id="hn6" value="5">
                                        <label class="form-check-label" for="materialGroupExample3">5.กินทุกวัน</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">7. ในภาพรวมท่านคิดว่า การใช้กัญชา
                                    เป็นเรื่องปกติทั่วไป</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="hn7" class="form-check-input" id="hn7" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1. มากที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn7" class="form-check-input" id="hn7" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn7" class="form-check-input" id="hn7" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn7" class="form-check-input" id="hn7" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="hn7" class="form-check-input" id="hn7" value="5">
                                        <label class="form-check-label" for="materialGroupExample3">5.
                                            น้อยที่สุด</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!------------>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">8.
                                    ปัจจุบันท่านออกกำลังกายโดยเฉลี่ยสัปดาห์ละกี่วัน</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h3" class="form-check-input" id="h3" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ไม่ได้ออกกำลังกาย</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h3" class="form-check-input" id="h3" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อยกว่า 3
                                            วันต่อสัปดาห์</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h3" class="form-check-input" id="h3" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. จำนวน 3
                                            วันต่อสัปดาห์</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h3" class="form-check-input" id="h3" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มากกว่า 3
                                            วันต่อสัปดาห์</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h3" class="form-check-input" id="h3" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. ทุกวัน</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">9. ปัจจุบันท่านสูบบุหรี่/ ใบจาก/ ยาเส้น
                                    หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h4" class="form-check-input" id="h4" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            สูบเป็นประจำ</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h4" class="form-check-input" id="h4" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            สูบบ่อยครั้ง</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h4" class="form-check-input" id="h4" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. สูบนาน ๆ
                                            ครั้ง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h4" class="form-check-input" id="h4" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            ไม่สูบแต่เคยสูบ</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h4" class="form-check-input" id="h4" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เคยสูบเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">10. ปัจจุบันท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์
                                    เช่น เหล้า เบียร์ ไวน์ สาโท หรือสุราพื้นบ้านหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h5" class="form-check-input" id="h5" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ดื่มเกือบทุกวัน/
                                            เกือบทุกสัปดาห์</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h5" class="form-check-input" id="h5" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            ดื่มเกือบทุกเดือน</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h5" class="form-check-input" id="h5" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ดื่มปีละ 1-2
                                            ครั้ง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h5" class="form-check-input" id="h5" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            ไม่ดื่มแต่เคยดื่ม</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h5" class="form-check-input" id="h5" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เคยดื่มเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">11.
                                    โดยรวมแล้วท่านพึงพอใจกับสุขภาพกายของท่านหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h6" class="form-check-input" id="h6" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่พอใจเลย/
                                            พอใจน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h6" class="form-check-input" id="h6" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. พอใจน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h6" class="form-check-input" id="h6" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            พอใจปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h6" class="form-check-input" id="h6" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. พอใจมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h6" class="form-check-input" id="h6" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            พอใจมากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">CV1. สถานการณ์การแพร่ระบาดโควิด-19
                                    มีผลกระทบต่อภาพรวมในมิติสุขภาพกายดี ของท่านเพียงใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="cv1" class="form-check-input" id="cv1" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.
                                            มีผลกระทบมากที่สุด
                                        </label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv1" class="form-check-input" id="cv1" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.
                                            มีผลกระทบมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv1" class="form-check-input" id="cv1" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. มีผลกระทบปานกลาง
                                        </label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv1" class="form-check-input" id="cv1" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.
                                            มีผลกระทบน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv1" class="form-check-input" id="cv1" value="5">
                                        <label class="form-check-label" for="materialGroupExample3">5.
                                            มีผลกระทบน้อยที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div><button type="submit" class="btn btn-primary btn-block" id="sub"><i
                                class="far fa-arrow-alt-circle-right"></i> บันทึกข้อมูล</button></div>

                </div>
                <!--mainBox-->
            </div>
        </div>

    </form>
    <?php include("title-footer/footer.php") ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
    <script type="text/javascript" src="MDB/js/popper.js"></script>
    <script type="text/javascript" src="js/js-th-p2.js"></script>
</body>

</html>