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

    <form name="page9" id="page9" method="post" action="page9_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 9/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> Happy Money / สุขภาพเงินดี
                            </div>
                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">39. ท่านรู้สึกว่า การผ่อนชำระหนี้สินต่างๆ
                                    โดยรวมของท่านในปัจจุบันเป็นภาระ หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h34" class="form-check-input" id="h34" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นภาระหนักที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h34" class="form-check-input" id="h34" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            เป็นภาระหนักมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h34" class="form-check-input" id="h34" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นภาระปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h34" class="form-check-input" id="h34" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            เป็นภาระน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h34" class="form-check-input" id="h34" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. ไม่เป็นภาระ/
                                            ไม่ได้ผ่อนชำระ/ ไม่มีหนี้สิน</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">40. ท่านผ่อนชำระหนี้ ตามกำหนดเวลาทุกครั้ง
                                    หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h35" class="form-check-input" id="h35" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ไม่ตรงเวลาทุกครั้ง</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h35" class="form-check-input" id="h35" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            ไม่ตรงเวลาบ่อยครั้ง</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h35" class="form-check-input" id="h35" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            ตรงเวลาบ้างบางครั้ง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h35" class="form-check-input" id="h35" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            ตรงเวลาเกือบทุกครั้ง</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h35" class="form-check-input" id="h35" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. ตรงเวลาทุกครั้ง/
                                            ไม่ได้ผ่อนชำระ/ ไม่มีหนี้สิน</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">41. โดยรวมแล้ว
                                    ท่านมีเงินเก็บออมในแต่ละเดือนหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h36" class="form-check-input" id="h36" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/
                                            มีน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h36" class="form-check-input" id="h36" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. มี/
                                            เก็บออมเพียงเล็กน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h36" class="form-check-input" id="h36" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. มี/
                                            เก็บออมปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h36" class="form-check-input" id="h36" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มี/
                                            เก็บออมมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h36" class="form-check-input" id="h36" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. มี/
                                            เก็บออมมากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">42. โดยรวมแล้ว
                                    ค่าตอบแทนที่ท่านได้รับทั้งหมดในแต่ละเดือนเป็นอย่างไร
                                    เมื่อเปรียบเทียบกับรายจ่ายทั้งหมดในแต่ละเดือน</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h37" class="form-check-input" id="h37" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            รายจ่ายเกินกว่ารายได้มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h37" class="form-check-input" id="h37" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            รายจ่ายเกินกว่ารายได้เล็กน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h37" class="form-check-input" id="h37" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. รายจ่ายพอๆ
                                            กับรายได้</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h37" class="form-check-input" id="h37" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            รายจ่ายน้อยกว่ารายได้</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h37" class="form-check-input" id="h37" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            รายจ่ายน้อยกว่ารายได้มาก</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">CV8. สถานการณ์การแพร่ระบาดโควิด-19
                                    มีผลกระทบต่อภาพรวมในมิติสุขภาพเงินดี ของท่านเพียงใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="cv8" class="form-check-input" id="cv8" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.
                                            มีผลกระทบมากที่สุด </label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv8" class="form-check-input" id="cv8" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.
                                            มีผลกระทบมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv8" class="form-check-input" id="cv8" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. มีผลกระทบปานกลาง
                                        </label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv8" class="form-check-input" id="cv8" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.
                                            มีผลกระทบน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv8" class="form-check-input" id="cv8" value="5">
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
    <script type="text/javascript" src="js/js-th-p9.js"></script>
</body>

</html>