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
                <div class="font-h1">คำชี้แจงในการตอบแบบสำรวจ : ให้ใส่เครื่องหมาย <i class="fas fa-check"></i> ในช่อง <i class="fas fa-expand"></i> ทุกข้อที่ท่านเลือก</div>
            </div>
        </div>
    </div>

    <form name="page1" id="page1" method="post" action="page1_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 1/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> ข้อมูลหน่วยงาน
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">หน่วยงานที่ท่านสังกัด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">

                                    <select class="browser-default custom-select group" name="group">
                                        <option value="">-- เลือกหน่วยงานที่ท่านสังกัด --</option>
                                        <?php
                                        include 'config/connect.php';
                                        $se1 = mysqli_query($con, " select* from office order by of_id asc ");
                                        $n = 1;

                                        while ($rf = mysqli_fetch_assoc($se1)) {
                                            echo '<option value="' . $rf["of_id"] . '">' . $n . '. ' . $rf["of_name"] . '</option>';

                                            $n++;
                                        }
                                        ?>

                                    </select>

                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">หน่วยงานย่อย</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">



                                    <div id="showGroup"></div>


                                </div>


                            </div>
                        </div>
                    </div>


                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> ข้อมูลทั่วไป
                            </div>
                        </div>
                    </div>

                    <!-- คำถาม -->
                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.1 เพศ</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="sex" class="form-check-input sex" id="sex1" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ชาย</label>
                                    </div>

                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="sex" class="form-check-input sex" id="sex2" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. หญิง</label>
                                    </div>

                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="sex" class="form-check-input sex" id="sex3" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เพศหลากหลาย</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 boxQ">
                                <div class="textQ">
                                    <!-- Default input -->
                                    <label for="exampleForm2">2.2 อายุ</label>
                                    <input type="text" name="age" id="age" class="form-control inputAge" maxlength="2">
                                    ปี * ใส่เฉพาะตัวเลขเท่านั้น *
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.3
                                    จังหวัดที่ท่านอาศัยอยู่ในปัจจุบันเป็นจังหวัดเดียวกับภูมิลำเนาหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_3" class="form-check-input 2_3" id="2_3" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ใช่</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_3" class="form-check-input 2_3" id="2_3" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            ไม่ใช่</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.4
                                    ปัจจุบันท่านพักอาศัยอยู่ในลักษณะที่พักอาศัยแบบใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_4" class="form-check-input 2_4" id="2_4" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            บ้านที่ท่านเป็นเจ้าของ</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_4" class="form-check-input 2_4" id="2_4" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            บ้านผ่อน</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_4" class="form-check-input 2_4" id="2_4" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            บ้านเช่า/ห้องเช่า</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_4" class="form-check-input 2_4" id="2_4" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4.
                                            บ้าน/ห้องไม่เสียค่าเช่า</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_4" class="form-check-input 2_4" id="2_4" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            คอนโด/อพาร์ทเม้นท์ที่ท่านเป็นเจ้าของ</label>
                                    </div>
                                    <!-- Group of material radios - option 6 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_4" class="form-check-input 2_4" id="2_4" value="6">
                                        <label class="form-check-label" for="materialGroupExample3"> 6.
                                            คอนโด/อพาร์ทเม้นท์ผ่อน</label>
                                    </div>
                                    <!-- Group of material radios - option 7 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_4" class="form-check-input 2_4" id="2_4" value="7">
                                        <label class="form-check-label" for="materialGroupExample3"> 7.
                                            คอนโด/อพาร์ทเม้นท์เช่า</label>
                                    </div>
                                    <!-- Group of material radios - option 8 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_4" class="form-check-input 2_4" id="2_4" value="8">
                                        <label class="form-check-label" for="materialGroupExample3"> 8.
                                            คอนโด/อพาร์ทเม้นท์ ไม่เสียค่าเช่า</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.5 ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1
                                    ข้อ)</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_1" class="form-check-input p2_5" id="2_5_1" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            อยู่คนเดียว</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_2" class="form-check-input p2_5" id="2_5_2" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. คู่สมรส
                                            (สามี/
                                            ภรรยา)</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_3" class="form-check-input p2_5" id="2_5_3" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. พี่/
                                            น้อง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_4" class="form-check-input p2_5" id="2_5_4" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4.
                                            พ่อแม่/พ่อแม่คู่สมรส/พ่อแม่เลี้ยง</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_5" class="form-check-input p2_5" id="2_5_5" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. ปู่ ย่า ตา
                                            ยาย</label>
                                    </div>
                                    <!-- Group of material radios - option 6 -->
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_6" class="form-check-input p2_5" id="2_5_6" value="6">
                                        <label class="form-check-label" for="materialGroupExample3"> 6. ลูก/
                                            ลูกบุญธรรม/
                                            ลูกเลี้ยง</label>
                                    </div>
                                    <!-- Group of material radios - option 7 -->
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_7" class="form-check-input p2_5" id="2_5_7" value="7">
                                        <label class="form-check-label" for="materialGroupExample3"> 7.
                                            ญาติอื่นๆ</label>
                                    </div>
                                    <!-- Group of material radios - option 8 -->
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_8" class="form-check-input p2_5" id="2_5_8" value="8">
                                        <label class="form-check-label" for="materialGroupExample3"> 8.
                                            เพื่อน</label>
                                    </div>
                                    <!-- Group of material radios - option 8 -->
                                    <div class="form-check">
                                        <input type="checkbox" name="2_5_9" class="form-check-input p2_5" id="2_5_9" value="9">
                                        <label class="form-check-label" for="materialGroupExample3"> 9. คู่รัก/
                                            คนรัก/
                                            แฟน</label>
                                    </div>
                                    <!-- Group of material radios - option 9 -->
                                    <div class="form-check inputAll">
                                        <input type="checkbox" name="2_5_10" class="form-check-input" id="2_5_10" value="10">
                                        <label class="form-check-label" for="materialGroupExample3"> 10. อื่นๆ
                                            (โปรดระบุ) <input type="text" name="2_5t" id="2_5t" class="form-control inputText"></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.6 ท่านจบการศึกษาสูงสุด ในระดับใด
                                    (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ประถมศึกษาหรือต่ำกว่า</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            มัธยมศึกษาตอนต้น</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            มัธยมศึกษาตอนปลาย</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4. ปวช.</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. ปวส.</label>
                                    </div>
                                    <!-- Group of material radios - option 6 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="6">
                                        <label class="form-check-label" for="materialGroupExample3"> 6.
                                            อนุปริญญาหรือเทียบเท่า</label>
                                    </div>
                                    <!-- Group of material radios - option 7 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="7">
                                        <label class="form-check-label" for="materialGroupExample3"> 7.
                                            ปริญญาตรี</label>
                                    </div>
                                    <!-- Group of material radios - option 8 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="8">
                                        <label class="form-check-label" for="materialGroupExample3"> 8.
                                            สูงกว่าปริญญาตรี</label>
                                    </div>
                                    <!-- Group of material radios - option 8 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_6" class="form-check-input p2_6" value="9">
                                        <label class="form-check-label" for="materialGroupExample3"> 9.
                                            ไม่ได้รับการศึกษา</label>
                                    </div>
                                    <!-- Group of material radios - option 9 -->
                                    <div class="form-check inputAll">
                                        <input type="radio" name="2_6" class="form-check-input" id="2_6" value="10">
                                        <label class="form-check-label" for="materialGroupExample3"> 10. อื่นๆ
                                            (โปรดระบุ) <input type="text" name="2_6t" id="2_6t" class="form-control inputText"></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.7 สถานภาพสมรส</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_7" class="form-check-input p2_7" id="2_7" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. โสด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_7" class="form-check-input p2_7" id="2_7" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            แต่งงานและอยู่ร่วมกัน</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_7" class="form-check-input p2_7" id="2_7" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            แต่งงานแต่ไม่ได้อยู่ด้วยกัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_7" class="form-check-input p2_7" id="2_7" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4.
                                            อยู่ด้วยกันโดยไม่ได้แต่งงาน</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_7" class="form-check-input p2_7" id="2_7" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            หม้าย</label>
                                    </div>
                                    <!-- Group of material radios - option 6 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_7" class="form-check-input p2_7" id="2_7" value="6">
                                        <label class="form-check-label" for="materialGroupExample3"> 6.
                                            หย่า/แยกทาง/เลิกกัน</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.8 ท่านมีบุตรหรือไม่
                                    (รวมลูกบุญธรรม/ลูกติด/ลูกเลี้ยง)</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_8" class="form-check-input p2_8" id="2_8" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ไม่มี</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_8" class="form-check-input p2_8" id="2_8" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. มี จำนวน 1
                                            คน</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_8" class="form-check-input p2_8" id="2_8" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. มี จำนวน 2
                                            คน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_8" class="form-check-input p2_8" id="2_8" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4. มี จำนวน 3-4
                                            คน</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_8" class="form-check-input p2_8" id="2_8" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. มี
                                            จำนวนตั้งแต่
                                            5 คนขึ้นไป</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.9 ขณะนี้ท่านกำลังตั้งครรภ์หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_9" class="form-check-input p2_9" id="2_9_1" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ตั้งครรภ์</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_9" class="form-check-input p2_9" id="2_9_2" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            ไม่ได้ตั้งครรภ์</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.10 งานที่ท่านทำเป็นงานลักษณะใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_10" class="form-check-input p2_10" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            งานสำนักงาน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_10" class="form-check-input p2_10" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            งานด้านการผลิต</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_10" class="form-check-input p2_10" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            งานด้านการบริการ</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_10" class="form-check-input p2_10" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4.
                                            งานด้านบริหาร</label>
                                    </div>
                                    <div class="form-check inputAll">
                                        <input type="radio" name="2_10" class="form-check-input" id="2_10" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. อื่นๆ
                                            (โปรดระบุ)
                                            <input type="text" name="2_10t" id="2_10t" class="form-control inputText"></label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.11 ท่านปฏิบัติงานในระดับตำแหน่งใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_11" class="form-check-input p2_11" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ระดับผู้ปฏิบัติงาน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_11" class="form-check-input p2_11" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">
                                            2.ระดับหัวหน้างาน
                                        </label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_11" class="form-check-input p2_11" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            ระดับผู้บริหารองค์กร</label>
                                    </div>
                                    <div class="form-check inputAll">
                                        <input type="radio" name="2_11" class="form-check-input" id="2_11" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4. อื่นๆ (ระบุ)
                                            <input type="text" name="2_11t" id="2_11t" class="form-control inputText"></label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.12 สถานภาพการจ้างงาน</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_12" class="form-check-input p2_12" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ประจำ</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_12" class="form-check-input p2_12" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            ตามสัญญาจ้าง</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_12" class="form-check-input p2_12" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            รายวัน</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="2_12" class="form-check-input p2_12" value="4">
                                        <label class="form-check-label" for="materialGroupExample1"> 4.
                                            บางช่วงเวลา</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_12" class="form-check-input p2_12" value="5">
                                        <label class="form-check-label" for="materialGroupExample2"> 5.
                                            ตามผลงาน</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_12" class="form-check-input p2_12" value="6">
                                        <label class="form-check-label" for="materialGroupExample3"> 6.
                                            จ้างเหมา</label>
                                    </div>
                                    <div class="form-check inputAll">
                                        <input type="radio" name="2_12" class="form-check-input" id="2_12" value="7">
                                        <label class="form-check-label" for="materialGroupExample3"> 7. อื่นๆ (ระบุ)
                                            <input type="text" name="2_12t" id="2_12t" class="form-control inputText"></label>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.13 ท่านทำงานเป็นกะ/ ทำงานเป็นรอบ/ เข้าเวร
                                    ใช่หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_13" class="form-check-input p2_13" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ไม่ใช่</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_13" class="form-check-input p2_13" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. ทำงานเป็นกะ/
                                            เข้าเวร</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.14 ระยะเวลาที่ท่านทำงานในองค์กรปัจจุบัน
                                    รวมทั้งหมด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_14" class="form-check-input p2_14" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ไม่ถึงปี</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_14" class="form-check-input p2_14" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. ระหว่าง 1 -
                                            2
                                            ปี</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_14" class="form-check-input p2_14" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ระหว่าง 3 -
                                            5
                                            ปี</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_14" class="form-check-input p2_14" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4. ระหว่าง 6 -
                                            9
                                            ปี</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_14" class="form-check-input p2_14" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. ตั้งแต่ 10
                                            ปี
                                            ขึ้นไป</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.15 ตั้งแต่เริ่มทำงานจนถึงปัจจุบัน
                                    ท่านลาออก/ย้าย/เปลี่ยนงานมาแล้วกี่ครั้ง</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_15" class="form-check-input p2_15" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่เคยลาออก
                                            ย้ายเปลี่ยนงาน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_15" class="form-check-input p2_15" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. 1 - 3
                                            ครั้ง</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_15" class="form-check-input p2_15" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. 4 - 6
                                            ครั้ง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_15" class="form-check-input p2_15" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4. 4. 7 - 9
                                            ครั้ง</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_15" class="form-check-input p2_15" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. 10
                                            ครั้งขึ้นไป</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">2.16 ท่านมีรายได้ต่อเดือน
                                    โดยประมาณเดือนละเท่าใด
                                    (รายได้+เงินเดือน+ค่าตอบแทนอื่นๆ)</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="2_16" class="form-check-input p2_16" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. น้อยกว่า
                                            10,000
                                            บาท</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_16" class="form-check-input p2_16" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. 10,001 -
                                            20,000
                                            บาท</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_16" class="form-check-input p2_16" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. 20,001 -
                                            30,000
                                            บาท</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_16" class="form-check-input p2_16" value="4">
                                        <label class="form-check-label" for="materialGroupExample3"> 4. 30,001 -
                                            40,000บาท</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_16" class="form-check-input p2_16" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. 40,001 -
                                            50,000
                                            บาท</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="2_16" class="form-check-input p2_16" value="6">
                                        <label class="form-check-label" for="materialGroupExample3"> 6. 50,001 -
                                            100,000
                                            บาท</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="2_16" class="form-check-input p2_16" value="7">
                                        <label class="form-check-label" for="materialGroupExample3"> 7. มากกว่า
                                            100,000
                                            บาท</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div><button type="submit" class="btn btn-primary btn-block" id="sub">บันทึกข้อมูล</button></div>


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
    <script type="text/javascript" src="js/js-th.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#showGroup").load("sentDataGroup.php");

            $(".group").change(function() {

                var idGroup = $(".group").val();
                var sentData = "sentDataGroup.php";

                $.post(sentData, {
                    idGroup: idGroup
                }, function(data) {

                    $("#showGroup").html(data);

                });

            });

            $("#sex1").click(function() {

                $("#2_9_2").prop("checked", true);

            });

            $("#sex2").click(function() {

                $("#2_9_2").prop("checked", false);

            });

            $("#sex3").click(function() {

                $("#2_9_2").prop("checked", false);

            });

        });
    </script>
</body>

</html>