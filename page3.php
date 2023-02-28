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

    <form name="page3" id="page3" method="post" action="page3_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 3/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> Happy Relax / ผ่อนคลายดี
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">7.
                                    โดยรวมแล้วท่านรู้สึกว่าได้รับการพักผ่อนเพียงพอหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h7" class="form-check-input" id="h7" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่พอ/
                                            น้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h7" class="form-check-input" id="h7" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h7" class="form-check-input" id="h7" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h7" class="form-check-input" id="h7" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h7" class="form-check-input" id="h7" value="5">
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
                                <label for="exampleForm2" class="textQ">8. โดยรวมแล้วใน 1
                                    สัปดาห์ท่านทำกิจกรรมเพื่อเป็นการพักผ่อนหย่อนใจ (อ่านหนังสือ ดูหนัง ฟังเพลง ช้อปปิ้ง
                                    เล่นเกมส์ ปลูกต้นไม้ ฯลฯ) หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h8" class="form-check-input" id="h8" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ได้ทำ/
                                            น้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h8" class="form-check-input" id="h8" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h8" class="form-check-input" id="h8" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h8" class="form-check-input" id="h8" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h8" class="form-check-input" id="h8" value="5">
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
                                <label for="exampleForm2" class="textQ">9. โดยรวมแล้วท่านมีความเครียด
                                    (เครียดจากการทำงาน/ เรื่องครอบครัว/ เรื่องอื่นๆ) บ้างหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h9" class="form-check-input" id="h9" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เครียดมากที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h9" class="form-check-input" id="h9" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            เครียดมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h9" class="form-check-input" id="h9" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เครียดปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h9" class="form-check-input" id="h9" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            เครียดน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h9" class="form-check-input" id="h9" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เครียดเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">10.
                                    โดยรวมแล้วท่านคิดว่าชีวิตของท่านเป็นไปตามที่ท่านคาดหวัง หรือไม่
                                </label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h10" class="form-check-input" id="h10" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ไม่เป็นไปตามที่คาดหวังเลย</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h10" class="form-check-input" id="h10" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            เป็นไปตามที่คาดหวังเล็กน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h10" class="form-check-input" id="h10" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นไปตามที่คาดหวังปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h10" class="form-check-input" id="h10" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            เป็นไปตามที่คาดหวังมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h10" class="form-check-input" id="h10" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            เป็นไปตามที่คาดหวังมากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">11. เมื่อประสบปัญหาในชีวิต
                                    โดยทั่วไปท่านสามารถจัดการกับปัญหาได้หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h11" class="form-check-input" id="h11" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ไม่สามารถจัดการได้เลย</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h11" class="form-check-input" id="h11" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            จัดการได้น้อยมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h11" class="form-check-input" id="h11" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            จัดการได้ปานกลาง</label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h11" class="form-check-input" id="h11" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            จัดการได้มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h11" class="form-check-input" id="h11" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            จัดการได้มากที่สุด</label>
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
    <script type="text/javascript" src="js/js-th-p3.js"></script>
</body>

</html>