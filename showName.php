<?php
session_start();
include("session/sessionUser.php");
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
    <title><?php include("title-footer/title.php");?></title>
</head>
<body>

    <?php
    include ("banner/banner.php");
    include("config/connect.php");

    $se = mysqli_query($con,"select* from user where us_code = '".$_SESSION["userCheckLogin"]."'");
    $row = mysqli_fetch_assoc($se);

    if($row["us_confirm"] == 0){

        $btn = '
        <a href="indexText.php">
          <button type="button" class="btn btn-danger btn-block"><i class="far fa-arrow-alt-circle-right"></i> เริ่มทำแบบสอบถาม</button>
        </a>
        ';

    }else{

        $btn = '
        <a href="showData.php">
        <button type="button" class="btn btn-success btn-block"><i class="far fa-eye"></i> ดูผลคะแนน</button>
        </a>
        ';
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 showName">
                
                <div><h5>ยินดีตอนรับ</h5></div>
                <div><b>ชื่อ-นามสกุล</b> : <?= $row["us_name"]." ".$row["us_sname"]?></div>

                <hr>

                <div><?=$btn?></div>

            </div>
            <div class="col-md-4"></div>
      </div>
  </div>
  <?php include("title-footer/footer.php") ?>

  <script type="text/javascript" src="MDB/js/jquery.min.js"></script>
  <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
  <script type="text/javascript" src="MDB/js/popper.js"></script>
</body>
</html>