<?php
session_start();
session_destroy();
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

    <div class="container" style="margin-top: 3rem">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 ">

                <div style="text-align: center; ">
                    <div class="textIndex">ตำรวจพลร่ม</div>
                    <hr>
                    <a href="indexText.php"><button type="button" class="btn btn-pink"
                            style="padding: 1.5rem; font-size: 18px; color: #ffffff"><b>เอกสารชี้แจงการตอบแบบสำรวจ
                                และเริ่มต้นตอบแบบสำรวจ <i class="fas fa-pencil-alt"></i></b></button></a>


                </div>

            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="alert alert-primary alertBox" role="alert">
                    * การทำแบบสำรวจนี้กรุณาทำให้ครบทุกหน้า และกรุณาตรวจสอบความถูกต้องของการตอบข้อมูลของท่าน ไม่ควรกดปุ่ม
                    Back ในขณะที่กำลังทำแบบสอบถาม เพราะจะทำให้ระบบคำนวณข้อมูลของท่านผิดพลาดได้<br>*
                    ระบบนี้รองรับการทำงานของ Browser Chrome ได้ดีที่สุด สามารถ <a
                        href="https://www.google.com/chrome/?brand=CHBD&gclid=Cj0KCQiAuefvBRDXARIsAFEOQ9EEtQM7HNQgqfp3Ew0BiGOxFQ39bLCgApOutvO354yydomVimQppdAaAvT7EALw_wcB&gclsrc=aw.ds"
                        target="_balnk">Download</a> ที่นี่
                </div>

            </div>
        </div>
    </div>
    <?php include("title-footer/footer.php") ?>

    <script type="text/javascript" src="MDB/js/jquery.min.js"></script>
    <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
    <script type="text/javascript" src="MDB/js/popper.js"></script>
</body>

</html>