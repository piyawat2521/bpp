<?php
session_start();
include("session/sessionAdmin.php");
include("config/connect.php");
include("functionOpenPage.php");
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
    <link rel="stylesheet" href="css/switch.css">
    <title><?php include("title-footer/title.php"); ?></title>
</head>

<body>

    <?php include("banner/banner.php"); ?>

    <?php
  include("classCountAll.php");
  $obj = new countAll;

  $co = mysqli_query($con, " select* from in_data ");
  $nCo = mysqli_num_rows($co);
  ?>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <i class="fas fa-podcast"></i> จำนวนผู้ที่ตอบแบบสอบถามทั้งหมด <?php $obj->countCon(); ?> คน
                    ตอบล่าสุดเมื่อ <?php $obj->countDate(); ?>
                    <a href="adminExcal.php"><button type="button" class="btn btn-success btn-sm">Excal</button></a>
                </div>
            </div>
        </div>
    </div>

    <!--

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับที่</th>
                            <th scope="col">Key</th>
                            <th scope="col">Detete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sd = mysqli_query($con, " select* from in_data order by in_id asc ");
                        while ($r = mysqli_fetch_assoc($sd)) {

                          echo '<tr>
    <th scope="row">' . $r["in_id"] . '</th>
    <td>' . $r["code_check"] . '</td>
    <td><a href="deleteId_submit.php?id=' . $r["in_id"] . '" onclick="return confirm(\'กรุณายืนยันการลบข้อมูลนี้อีกครั้ง\')">Delete</a></td>
    </tr>
    ';
                        }
                        ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>
          -->


    <?php include("title-footer/footer.php") ?>

    <script type="text/javascript" src="MDB/js/jquery.min.js"></script>
    <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
    <script type="text/javascript" src="MDB/js/popper.js"></script>

</body>

</html>