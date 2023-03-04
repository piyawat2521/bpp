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

    <form name="page7" id="page7" method="post" action="page7_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 7/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> Happy Society / สังคมดี
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">30. โดยรวมแล้ว
                                    เพื่อนบ้านมีความสัมพันธ์ที่ดีต่อท่านหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h25" class="form-check-input" id="h25" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/
                                            มีน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h25" class="form-check-input" id="h25" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h25" class="form-check-input" id="h25" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h25" class="form-check-input" id="h25" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h25" class="form-check-input" id="h25" value="5">
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
                                <label for="exampleForm2" class="textQ">31. โดยรวมแล้วท่านปฏิบัติตามกฎระเบียบ/
                                    ข้อบังคับของสังคม หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h26" class="form-check-input" id="h26" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ปฏิบัติ/
                                            ปฏิบัติน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h26" class="form-check-input" id="h26" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h26" class="form-check-input" id="h26" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h26" class="form-check-input" id="h26" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h26" class="form-check-input" id="h26" value="5">
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
                                <label for="exampleForm2" class="textQ">32. โดยรวมแล้วท่านรู้สึก
                                    ปลอดภัยในชีวิตและทรัพย์สิน หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h27" class="form-check-input" id="h27" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่รู้สึก
                                            /รู้สึกน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h27" class="form-check-input" id="h27" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h27" class="form-check-input" id="h27" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h27" class="form-check-input" id="h27" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h27" class="form-check-input" id="h27" value="5">
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
                                <label for="exampleForm2" class="textQ">33. โดยรวมแล้ว เมื่อท่านมีปัญหา
                                    ท่านสามารถขอความช่วยเหลือจากคนในชุมชน หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h28" class="form-check-input" id="h28" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ได้/
                                            ได้น้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h28" class="form-check-input" id="h28" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h28" class="form-check-input" id="h28" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h28" class="form-check-input" id="h28" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h28" class="form-check-input" id="h28" value="5">
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
                                <label for="exampleForm2" class="textQ">34. โดยรวมแล้ว ท่านรู้สึกว่า สังคมไทยทุกวันนี้
                                    มีความสงบสุข หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h29" class="form-check-input" id="h29" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/
                                            มีน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h29" class="form-check-input" id="h29" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h29" class="form-check-input" id="h29" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h29" class="form-check-input" id="h29" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h29" class="form-check-input" id="h29" value="5">
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
                                <label for="exampleForm2" class="textQ">35.
                                    โดยรวมแล้วทุกวันนี้ท่านใช้ชีวิตในสังคมอย่างมีความสุข หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h30" class="form-check-input" id="h30" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/
                                            มีน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h30" class="form-check-input" id="h30" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h30" class="form-check-input" id="h30" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h30" class="form-check-input" id="h30" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h30" class="form-check-input" id="h30" value="5">
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
                                <label for="exampleForm2" class="textQ">CV6. สถานการณ์การแพร่ระบาดโควิด-19
                                    มีผลกระทบต่อภาพรวมในมิติสังคมดี ของท่านเพียงใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="cv6" class="form-check-input" id="cv6" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.
                                            มีผลกระทบมากที่สุด </label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv6" class="form-check-input" id="cv6" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.
                                            มีผลกระทบมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv6" class="form-check-input" id="cv6" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. มีผลกระทบปานกลาง
                                        </label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv6" class="form-check-input" id="cv6" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.
                                            มีผลกระทบน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv6" class="form-check-input" id="cv6" value="5">
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
    <script type="text/javascript" src="js/js-th-p7.js"></script>
</body>

</html>