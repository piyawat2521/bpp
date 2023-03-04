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

    <form name="page11" id="page11" method="post" action="page11_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 11/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> ความผูกพัน
                            </div>
                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">60.
                                    ท่านจะแนะนำญาติ/เพื่อน/คนรู้จักมาทำงานที่องค์กรของท่านหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h55" class="form-check-input" id="h55" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่/
                                            แนะนำน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h55" class="form-check-input" id="h55" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h55" class="form-check-input" id="h55" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h55" class="form-check-input" id="h55" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h55" class="form-check-input" id="h55" value="5">
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
                                <label for="exampleForm2" class="textQ">61. หากมีใครกล่าวถึงองค์กรในทางที่ไม่เหมาะสม
                                    ท่านจะปกป้ององค์กรของท่านหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h56" class="form-check-input" id="h56" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่/
                                            ปกป้องน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h56" class="form-check-input" id="h56" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h56" class="form-check-input" id="h56" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h56" class="form-check-input" id="h56" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h56" class="form-check-input" id="h56" value="5">
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
                                <label for="exampleForm2" class="textQ">62. ท่านภาคภูมิใจที่ได้เป็นพนักงาน/
                                    บุคลากรขององค์กร/ ได้ทำงานในองค์กรนี้หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h57" class="form-check-input" id="h57" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ภาคภูมิใจ/
                                            ภูมิใจน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h57" class="form-check-input" id="h57" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h57" class="form-check-input" id="h57" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h57" class="form-check-input" id="h57" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h57" class="form-check-input" id="h57" value="5">
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
                                <label for="exampleForm2" class="textQ">63. ขณะที่ทำงานอยู่ในองค์กรนี้
                                    หากท่านมีโอกาสได้ศึกษาต่อและเมื่อสำเร็จการศึกษาแล้ว
                                    ท่านจะทำงานต่อหรือว่าลาออก</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h58" class="form-check-input" id="h58" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            ลาออกแน่นอน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h58" class="form-check-input" id="h58" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            อาจจะลาออก</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h58" class="form-check-input" id="h58" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            น่าจะลาออก</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h58" class="form-check-input" id="h58" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. ไม่ลาออก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h58" class="form-check-input" id="h58" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่ลาออกแน่นอน</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">64. ถ้าท่านมีโอกาสเปลี่ยนสถานที่ทำงาน
                                    หรือองค์กรอื่นชวน/ติดต่อไปทำงาน ท่านพร้อมที่จะไป หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h59" class="form-check-input" id="h59" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไปแน่นอน/
                                            ไปทันที</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h59" class="form-check-input" id="h59" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2.
                                            คิดว่าจะไป</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h59" class="form-check-input" id="h59" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ไม่แน่ใจ</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h59" class="form-check-input" id="h59" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. ไม่ไป</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h59" class="form-check-input" id="h59" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่ไปแน่นอน</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">65.
                                    ท่านรู้สึกเป็นเจ้าของร่วมขององค์กรที่ท่านทำงานในปัจจุบัน หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h60" class="form-check-input" id="h60" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่รู้สึก/
                                            รู้สึกน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h60" class="form-check-input" id="h60" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h60" class="form-check-input" id="h60" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h60" class="form-check-input" id="h60" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h60" class="form-check-input" id="h60" value="5">
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
                                <label for="exampleForm2" class="textQ">66.
                                    ท่านทุ่มเททำงานเพื่อประโยชน์ขององค์กรของท่านหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h61" class="form-check-input" id="h61" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่/
                                            ทุ่มเทน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h61" class="form-check-input" id="h61" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h61" class="form-check-input" id="h61" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h61" class="form-check-input" id="h61" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h61" class="form-check-input" id="h61" value="5">
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
                                <label for="exampleForm2" class="textQ">67. ท่านเป็นคน คิดใหม่ ทำใหม่
                                    เพื่อสร้างความก้าวหน้าให้กับองค์กรของท่านหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h62" class="form-check-input" id="h62" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่/
                                            น้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h62" class="form-check-input" id="h62" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h62" class="form-check-input" id="h62" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h62" class="form-check-input" id="h62" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h62" class="form-check-input" id="h62" value="5">
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
                                <label for="exampleForm2" class="textQ">68. ในแต่ละวัน ท่านทำงานอย่างมีเป้าหมาย
                                    หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h63" class="form-check-input" id="h63" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่/
                                            น้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h63" class="form-check-input" id="h63" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h63" class="form-check-input" id="h63" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h63" class="form-check-input" id="h63" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h63" class="form-check-input" id="h63" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            มากที่สุด</label>
                                    </div>
                                </div>
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
    <script type="text/javascript" src="js/js-th-p11.js"></script>
</body>

</html>