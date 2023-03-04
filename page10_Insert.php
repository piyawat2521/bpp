<?php
session_start();
include("session/sessionUser.php");

$arrayPage10 = array("", "" . $_POST["h38"] . "", "" . $_POST["h39"] . "", "" . $_POST["h40"] . "", "" . $_POST["h41"] . "", "" . $_POST["h42"] . "", "" . $_POST["h43"] . "", "" . $_POST["h44"] . "", "" . $_POST["h45"] . "", "" . $_POST["h46"] . "", "" . $_POST["h47"] . "", "" . $_POST["h48"] . "", "" . $_POST["h49"] . "", "" . $_POST["h50"] . "", "" . $_POST["h51"] . "", "" . $_POST["h52"] . "", "" . $_POST["h53"] . "", "" . $_POST["h54"] . "", "" . $_POST["cv9"] . "");

$numData = array("", "0", "25", "50", "75", "100");
$sumPage10 = ($numData[$_POST["h38"]] + $numData[$_POST["h39"]] + $numData[$_POST["h40"]] + $numData[$_POST["h41"]] + $numData[$_POST["h42"]] + $numData[$_POST["h43"]] + $numData[$_POST["h44"]] + $numData[$_POST["h45"]] + $numData[$_POST["h46"]] + $numData[$_POST["h47"]] + $numData[$_POST["h48"]] + $numData[$_POST["h49"]] + $numData[$_POST["h50"]] + $numData[$_POST["h51"]] + $numData[$_POST["h52"]] + $numData[$_POST["h53"]] + $numData[$_POST["h54"]]) / 17;

$_SESSION["arrayPage10"] = $arrayPage10;
$_SESSION["sumPage10"] = $sumPage10;

//echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=page11.php">';

if ($sumPage10 >= 0.00 and $sumPage10 <= 24.00) {
    $imgS = '<img src="imgS/s1.png">';
    $numS = "Very Unhappy= 0.00-24.00 คะแนน";
    $textS = "หมายถึง ระดับความสุขที่สะท้อนให้เห็นผลที่ได้ว่าอยู่ในขั้นต่ำกว่าเป้าหมายมากที่สุด เป็นสัญญาณระบุให้ผู้บริหารต้องให้การส่งเสริมสนับสนุนองค์กรแห่งความสุขทันที";
} elseif ($sumPage10 >= 25.00 and $sumPage10 <= 49.99) {
    $imgS = '<img src="imgS/s2.png">';
    $numS = "Unhappy= 25.00-49.99 คะแนน";
    $textS = "หมายถึง ระดับความสุขที่สะท้อนให้เห็นผลที่ได้ว่าอยู่ในขั้นต่ำกว่าเป้าหมาย เป็นสัญญาณระบุให้ผู้บริหารต้องให้การพัฒนาสนับสนุนองค์กรแห่งความสุขอย่างจริงจัง";
} elseif ($sumPage10 >= 50.00 and $sumPage10 <= 74.99) {
    $imgS = '<img src="imgS/s3.png">';
    $numS = "Happy= 50.00-74.99 คะแนน";
    $textS = "หมายถึง ระดับความสุขที่สะท้อนให้เห็นผลที่ได้ว่าอยู่ในขั้นตามเป้าหมาย เป็นสัญญาณว่าผู้บริหารควรให้การพัฒนาสนับสนุนองค์กรแห่งความสุขต่อไป";
} elseif ($sumPage10 >= 75.00 and $sumPage10 <= 100) {
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
                        <?= round($sumPage10, 2) ?> คะแนน</div>
                    <div class="imgS"><?= $imgS ?></div>
                    <div class="numS"><?= $numS ?></div>
                    <hr>
                    <div class="textS"><?= $textS ?></div>
                    <hr>
                    <a name="" id="" class="btn btn-primary btn-block" href="page11.php" role="button">ทำแบบสำรวจในส่วนต่อไป</a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <?php include("title-footer/footer.php") ?>


</body>

</html>