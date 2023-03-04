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

    <form name="page8" id="page8" method="post" action="page8_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 8/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> Happy Brain / ใฝ่รู้ดี
                            </div>
                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">36. โดยรวมแล้วท่านสนใจในการแสวงหาความรู้ใหม่ๆ
                                    เพิ่มเติมจากแหล่งความรู้ต่างๆ หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h31" class="form-check-input" id="h31" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่สนใจ/
                                            สนใจน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h31" class="form-check-input" id="h31" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h31" class="form-check-input" id="h31" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h31" class="form-check-input" id="h31" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h31" class="form-check-input" id="h31" value="5">
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
                                <label for="exampleForm2" class="textQ">37. โดยรวมแล้ว ท่านสนใจที่จะพัฒนาตนเอง
                                    เพื่อความก้าวหน้าในชีวิตหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h32" class="form-check-input" id="h32" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่สนใจ/
                                            สนใจน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h32" class="form-check-input" id="h32" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h32" class="form-check-input" id="h32" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h32" class="form-check-input" id="h32" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h32" class="form-check-input" id="h32" value="5">
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
                                <label for="exampleForm2" class="textQ">38. ท่านมีโอกาสที่จะได้รับการอบรม/ ศึกษาต่อ/
                                    ดูงาน เพื่อพัฒนาทักษะและความสามารถของตนเองหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h33" class="form-check-input" id="h33" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มีโอกาส/
                                            มีโอกาสน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h33" class="form-check-input" id="h33" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            มีโอกาสน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h33" class="form-check-input" id="h33" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h33" class="form-check-input" id="h33" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4.
                                            มีโอกาสมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h33" class="form-check-input" id="h33" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            มีโอกาสมากที่สุด</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">CV7. สถานการณ์การแพร่ระบาดโควิด-19
                                    มีผลกระทบต่อภาพรวมในมิติใฝ่รู้ดี ของท่านเพียงใด</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="cv7" class="form-check-input" id="cv7" value="1">
                                        <label class="form-check-label" for="materialGroupExample1">1.
                                            มีผลกระทบมากที่สุด </label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv7" class="form-check-input" id="cv7" value="2">
                                        <label class="form-check-label" for="materialGroupExample2">2.
                                            มีผลกระทบมาก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv7" class="form-check-input" id="cv7" value="3">
                                        <label class="form-check-label" for="materialGroupExample3">3. มีผลกระทบปานกลาง
                                        </label>
                                    </div>

                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv7" class="form-check-input" id="cv7" value="4">
                                        <label class="form-check-label" for="materialGroupExample2">4.
                                            มีผลกระทบน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="cv7" class="form-check-input" id="cv7" value="5">
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
    <script type="text/javascript" src="js/js-th-p8.js"></script>
</body>

</html>