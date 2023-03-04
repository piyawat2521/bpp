<?php
session_start();
include("session/sessionUser.php");

$arrayPage7 = array("", "" . $_POST["h25"] . "", "" . $_POST["h26"] . "", "" . $_POST["h27"] . "", "" . $_POST["h28"] . "", "" . $_POST["h29"] . "", "" . $_POST["h30"] . "", "" . $_POST["cv6"] . "");

$numData = array("", "0", "25", "50", "75", "100");
$sumPage7 = ($numData[$_POST["h25"]] + $numData[$_POST["h26"]] + $numData[$_POST["h27"]] + $numData[$_POST["h28"]] + $numData[$_POST["h29"]] + $numData[$_POST["h30"]]) / 6;

$_SESSION["arrayPage7"] = $arrayPage7;
$_SESSION["sumPage7"] = $sumPage7;

//echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page8.php">';
if ($sumPage7 >= 0.00 and $sumPage7 <= 24.00) {
    $imgS = '<img src="imgS/s1.png">';
    $numS = "Very Unhappy= 0.00-24.00 คะแนน";
    $textS = "หมายถึง ระดับความสุขที่สะท้อนให้เห็นผลที่ได้ว่าอยู่ในขั้นต่ำกว่าเป้าหมายมากที่สุด เป็นสัญญาณระบุให้ผู้บริหารต้องให้การส่งเสริมสนับสนุนองค์กรแห่งความสุขทันที";
} elseif ($sumPage7 >= 25.00 and $sumPage7 <= 49.99) {
    $imgS = '<img src="imgS/s2.png">';
    $numS = "Unhappy= 25.00-49.99 คะแนน";
    $textS = "หมายถึง ระดับความสุขที่สะท้อนให้เห็นผลที่ได้ว่าอยู่ในขั้นต่ำกว่าเป้าหมาย เป็นสัญญาณระบุให้ผู้บริหารต้องให้การพัฒนาสนับสนุนองค์กรแห่งความสุขอย่างจริงจัง";
} elseif ($sumPage7 >= 50.00 and $sumPage7 <= 74.99) {
    $imgS = '<img src="imgS/s3.png">';
    $numS = "Happy= 50.00-74.99 คะแนน";
    $textS = "หมายถึง ระดับความสุขที่สะท้อนให้เห็นผลที่ได้ว่าอยู่ในขั้นตามเป้าหมาย เป็นสัญญาณว่าผู้บริหารควรให้การพัฒนาสนับสนุนองค์กรแห่งความสุขต่อไป";
} elseif ($sumPage7 >= 75.00 and $sumPage7 <= 100) {
    $imgS = '<img src="imgS/s3.png">';
    $numS = "Very Happy= 75.0-100 คะแนน";
    $textS = "หมายถึง ระดับความสุขที่สะท้อนให้เห็นผลที่ได้ว่าอยู่ในขั้นเกินเป้าหมาย เป็นสัญญาณว่าผู้บริหารควรให้การพัฒนาสนับสนุนองค์กรแห่งความสุขต่อไปและยกย่องเป็นแบบอย่าง";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/editDetail.css">
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="MDB/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title><?php include("title-footer/title.php"); ?></title>

</head>

<body>

    <?php include("banner/banner.php"); ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 animate__animated animate__zoomInUp">
                <div class="mainS font">
                    <div class="headS">ค่าคะแนนระดับความสุขและความหมายของเครื่องมือ HAPPINOMETER </div>
                    <hr>
                    <div class="userS">ค่าคะแนนของคุณ :
                        <?= round($sumPage7, 2) ?> คะแนน</div>
                    <div class="imgS"><?= $imgS ?></div>
                    <div class="numS"><?= $numS ?></div>
                    <hr>
                    <div class="textS"><?= $textS ?></div>
                    <hr>
                    <a name="" id="" class="btn btn-primary btn-block" href="page8.php" role="button">ทำแบบสำรวจในส่วนต่อไป</a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <?php include("title-footer/footer.php") ?>


</body>

</html>