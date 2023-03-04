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

    <form name="page5" id="page5" method="post" action="page5_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 5/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> Happy Soul / จิตวิญญาณดี
                            </div>
                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">22. โดยรวมแล้วท่านทำนุบำรุงศิลปวัฒนธรรม/ ศาสนา/
                                    การให้ทาน หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h17" class="form-check-input" id="h17" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ทำ/
                                            ทำน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h17" class="form-check-input" id="h17" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h17" class="form-check-input" id="h17" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h17" class="form-check-input" id="h17" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h17" class="form-check-input" id="h17" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            มากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">23. โดยรวมแล้ว
                                    ท่านปฏิบัติกิจตามศาสนาเพื่อให้จิตใจสงบหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h18" class="form-check-input" id="h18" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ปฏิบัติ/
                                            ปฏิบัติน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h18" class="form-check-input" id="h18" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h18" class="form-check-input" id="h18" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h18" class="form-check-input" id="h18" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h18" class="form-check-input" id="h18" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            มากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">24. โดยรวมแล้ว
                                    ท่านยกโทษและให้อภัยอย่างจริงใจต่อผู้ที่สำนึกผิด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h19" class="form-check-input" id="h19" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ยกโทษ/
                                            ให้อภัยน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h19" class="form-check-input" id="h19" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h19" class="form-check-input" id="h19" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h19" class="form-check-input" id="h19" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h19" class="form-check-input" id="h19" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            มากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">25. โดยรวมแล้ว
                                    ท่านยอมรับและขอโทษในความผิดที่ทำหรือมีส่วนรับผิดชอบ</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h20" class="form-check-input" id="h20" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ยอมรับ/
                                            ขอโทษน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h20" class="form-check-input" id="h20" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h20" class="form-check-input" id="h20" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h20" class="form-check-input" id="h20" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h20" class="form-check-input" id="h20" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            มากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">26. โดยรวมแล้ว ท่านตอบแทนผู้มีพระคุณ
                                    หรือช่วยเหลือท่าน</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h21" class="form-check-input" id="h21" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ตอบแทน/
                                            ตอบแทนน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h21" class="form-check-input" id="h21" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h21" class="form-check-input" id="h21" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h21" class="form-check-input" id="h21" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h21" class="form-check-input" id="h21" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            มากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">CV4. สถานการณ์การแพร่ระบาดโควิด-19
                                    มีผลกระทบต่อภาพรวมในมิติจิตวิญญาณดี ของท่านเพียงใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="cv4" class="form-check-input" id="cv4" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.
                                            มีผลกระทบมากที่สุด </label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv4" class="form-check-input" id="cv4" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.
                                            มีผลกระทบมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv4" class="form-check-input" id="cv4" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. มีผลกระทบปานกลาง
                                        </label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv4" class="form-check-input" id="cv4" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.
                                            มีผลกระทบน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv4" class="form-check-input" id="cv4" value="5">
                                        <label class="form-check-label" for="materialGroupExample3">5.
                                            มีผลกระทบน้อยที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>


            <div><button type="submit" class="btn btn-primary btn-block" id="sub"><i class="far fa-arrow-alt-circle-right"></i> บันทึกข้อมูล</button></div>

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
    <script type="text/javascript" src="js/js-th-p5.js"></script>
</body>

</html>