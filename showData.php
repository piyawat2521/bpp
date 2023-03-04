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
    <link rel="stylesheet" href="css/editDetail.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


    <script>
    function printDiv() {
        var divContents = document.getElementById("GFG").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html>');
        a.document.write('<body > <h1>Div contents are <br>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
    </script>

    <title><?php include("title-footer/title.php"); ?></title>
</head>

<body>

    <div id="divid">

        <?php
    include("banner/banner.php");
    include("config/connect.php");

    $se = mysqli_query($con, " select* from in_data where id_code = '" . $_SESSION["idCode"] . "' ");
    $row = mysqli_fetch_assoc($se);

    /* sex */
    $sex = $row["sex"];
    $hi = $row["in1_2"] / 100;
    $hi2 = $hi * $hi;
    $wt = $row["in1_1"];
    $weightBmi = $wt / $hi2;

    if ($sex == 1) {
      $sexTh = "ชาย";

      if ($wt >= 90) {
        $wt_t = "ท่านอยู่ในภาวะอ้วนลงพุง";
      } else {
        $wt_t = "ท่านไม่อยู่ในภาวะอ้วนลงพุง";
      }
    } elseif ($sex == 2) {
      $sexTh = "หญิง";

      if ($wt >= 80) {
        $wt_t = "ท่านอยู่ในภาวะอ้วนลงพุง";
      } else {
        $wt_t = "ท่านไม่อยู่ในภาวะอ้วนลงพุง";
      }
    } elseif ($sex == 3) {
      $sexTh = "เพศทางเลือก";

      if ($wt >= 90) {
        $wt_sex1 = "ท่านอยู่ในภาวะอ้วนลงพุง(ชาย)";
      } else {
        $wt_sex1 = "ท่านไม่อยู่ในภาวะอ้วนลงพุง(ชาย)";
      }

      if ($wt >= 90) {
        $wt_sex2 = "ท่านอยู่ในภาวะอ้วนลงพุง(หญิง)";
      } else {
        $wt_sex2 = "ท่านไม่อยู่ในภาวะอ้วนลงพุง(หญิง)";
      }
    }
    /*-----*/

    $heightBmi = $weightBmi;
    $bmi = $heightBmi;



    if ($heightBmi < 18.5) {
      $w = "น้ำหนักน้อย";
      $r = "ภาวะเสี่ยงต่อโรค : ต่ำ";
    } elseif ($heightBmi >= 18.5 or $heightBmi <= 22.9) {
      $w = "น้ำหนักปกติ";
      $r = "ภาวะเสี่ยงต่อโรค : เท่าคนปกติ";
    } elseif ($heightBmi >= 23.0 or $heightBmi <= 24.9) {
      $w = "น้ำหนักปกติ";
      $r = "ภาวะเสี่ยงต่อโรค : มากกว่าปกติ";
    } elseif ($heightBmi >= 25.0 or $heightBmi <= 29.9) {
      $w = "โรคอ้วน";
      $r = "ภาวะเสี่ยงต่อโรค : สูง";
    } elseif ($heightBmi >= 30.0) {
      $w = "อ้วนมาก";
      $r = "ภาวะเสี่ยงต่อโรค : อยู่ในช่วงอันตราย";
    }

    if ($bmi >= 0 and $bmi <= 18.4) {
      $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักน้อย | <strong>ภาวะเสี่ยงต่อโรค : </strong>ต่ำ | < 18.5";
    } elseif ($bmi >= 18.5 and $bmi <= 22.9) {
      $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักปกติ | <strong>ภาวะเสี่ยงต่อโรค : </strong>เท่าคนปกติ | 18.5-22.9";
    } elseif ($bmi >= 23.0 and $bmi <= 24.9) {
      $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักเกิน | <strong>ภาวะเสี่ยงต่อโรค : </strong>มากกว่าปกติ | 23-24.9";
    } elseif ($bmi >= 25.0 and $bmi <= 29.9) {
      $bmi_text = " | <strong>น้ำหนัก : </strong>โรคอ้วน | <strong>ภาวะเสี่ยงต่อโรค : </strong>สูง | 25-29.9";
    } elseif ($bmi >= 30.0) {
      $bmi_text = " | <strong>น้ำหนัก : </strong>อ้วนมาก | <strong>ภาวะเสี่ยงต่อโรค : </strong>อยู่ในช่วงอันตราย | >= 30";
    }

    $numData = array("", "0", "25", "50", "75", "100");

    $nm1 = number_format(($numData[$row["in2"]] + $numData[$row["hn3"]] + $numData[$row["hn4"]] + $numData[$row["hn5"]] + $numData[$row["hn6"]] + $numData[$row["hn7"]] + $numData[$row["in3"]] + $numData[$row["in4"]] + $numData[$row["in5"]] + $numData[$row["in6"]]) / 10, 2);
    $nm2 = number_format(($numData[$row["in7"]] + $numData[$row["in8"]] + $numData[$row["in9"]] + $numData[$row["in10"]] + $numData[$row["in11"]]) / 5, 2);
    $nm3 = number_format(($numData[$row["in12"]] + $numData[$row["in13"]] + $numData[$row["in14"]] + $numData[$row["in15"]] + $numData[$row["in16"]]) / 5, 2);
    $nm4 = number_format(($numData[$row["in17"]] + $numData[$row["in18"]] + $numData[$row["in19"]] + $numData[$row["in20"]] + $numData[$row["in21"]]) / 5, 2);
    $nm5 = number_format(($numData[$row["in22"]] + $numData[$row["in23"]] + $numData[$row["in24"]]) / 3, 2);
    $nm6 = number_format(($numData[$row["in25"]] + $numData[$row["in26"]] + $numData[$row["in27"]] + $numData[$row["in28"]] + $numData[$row["in29"]] + $numData[$row["in30"]]) / 6, 2);
    $nm7 = number_format(($numData[$row["in31"]] + $numData[$row["in32"]] + $numData[$row["in33"]]) / 3, 2);
    $nm8 = number_format(($numData[$row["in34"]] + $numData[$row["in35"]] + $numData[$row["in36"]] + $numData[$row["in37"]]) / 4, 2);
    $nm9 = number_format(($numData[$row["in38"]] + $numData[$row["in39"]] + $numData[$row["in40"]] + $numData[$row["in41"]] + $numData[$row["in42"]] + $numData[$row["in43"]] + $numData[$row["in44"]] + $numData[$row["in45"]] + $numData[$row["in46"]] + $numData[$row["in47"]] + $numData[$row["in48"]] + $numData[$row["in49"]] + $numData[$row["in50"]] + $numData[$row["in51"]] + $numData[$row["in52"]] + $numData[$row["in53"]] + $numData[$row["in54"]]) / 17, 2);

    $nm10 = number_format(($nm1 + $nm2 + $nm4 + $nm5 + $nm6 + $nm7 + $nm8 + $nm9) / 9, 2);

    if ($nm1 <= '24.99') {
      $img_nm1 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm1 >= '25.00' and $nm1 <= '49.99') {
      $img_nm1 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm1 >= '50.00' and $nm1 <= '74.99') {
      $img_nm1 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm1 >= '75.00' and $nm1 <= '100.00') {
      $img_nm1 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm2 <= '24.99') {
      $img_nm2 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm2 >= '25.00' and $nm2 <= '49.99') {
      $img_nm2 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm2 >= '50.00' and $nm2 <= '74.99') {
      $img_nm2 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm2 >= '75.00' and $nm2 <= '100.00') {
      $img_nm2 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm3 <= '24.99') {
      $img_nm3 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm3 >= '25.00' and $nm3 <= '49.99') {
      $img_nm3 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm3 >= '50.00' and $nm3 <= '74.99') {
      $img_nm3 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm3 >= '75.00' and $nm3 <= '100.00') {
      $img_nm3 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm4 <= '24.99') {
      $img_nm4 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm4 >= '25.00' and $nm4 <= '49.99') {
      $img_nm4 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm4 >= '50.00' and $nm4 <= '74.99') {
      $img_nm4 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm4 >= '75.00' and $nm4 <= '100.00') {
      $img_nm4 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm5 <= '24.99') {
      $img_nm5 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm5 >= '25.00' and $nm5 <= '49.99') {
      $img_nm5 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm5 >= '50.00' and $nm5 <= '74.99') {
      $img_nm5 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm5 >= '75.00' and $nm5 <= '100.00') {
      $img_nm5 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm6 <= '24.99') {
      $img_nm6 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm6 >= '25.00' and $nm6 <= '49.99') {
      $img_nm6 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm6 >= '50.00' and $nm6 <= '74.99') {
      $img_nm6 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm6 >= '75.00' and $nm6 <= '100.00') {
      $img_nm6 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm7 <= '24.99') {
      $img_nm7 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm7 >= '25.00' and $nm7 <= '49.99') {
      $img_nm7 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm7 >= '50.00' and $nm7 <= '74.99') {
      $img_nm7 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm7 >= '75.00' and $nm7 <= '100.00') {
      $img_nm7 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm8 <= '24.99') {
      $img_nm8 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm8 >= '25.00' and $nm8 <= '49.99') {
      $img_nm8 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm8 >= '50.00' and $nm8 <= '74.99') {
      $img_nm8 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm8 >= '75.00' and $nm8 <= '100.00') {
      $img_nm8 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm9 <= '24.99') {
      $img_nm9 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm9 >= '25.00' and $nm9 <= '49.99') {
      $img_nm9 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm9 >= '50.00' and $nm9 <= '74.99') {
      $img_nm9 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm9 >= '75.00' and $nm9 <= '100.00') {
      $img_nm9 = '<img src="img/h.png">' . '<br>Very Happy';
    }

    if ($nm10 <= '24.99') {
      $img_nm10 = '<img src="img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm10 >= '25.00' and $nm10 <= '49.99') {
      $img_nm10 = '<img src="img/v.png">' . '<br>Unhappy';
    } elseif ($nm10 >= '50.00' and $nm10 <= '74.99') {
      $img_nm10 = '<img src="img/u.png">' . '<br>Happy';
    } elseif ($nm10 >= '75.00' and $nm10 <= '100.00') {
      $img_nm10 = '<img src="img/h.png">' . '<br>Very Happy';
    }


    ?>

        <div class="container"
            style="margin-top: 20px; padding-top: 20px; padding-bottom: 20px; font-weight: bold; text-align: center;">
            <div class="row">
                <div class="col-md-12">
                    <?= $row["in_name"] . " <i class='far fa-calendar-alt'></i> " . $row["in_date"] . " <i class='far fa-clock'></i> " . $row["in_time"] ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div>
                        <h5>BMI ดัชนีมวลกาย</h5>
                    </div>

                    <div class="alert alert-danger" role="alert">
                        <div class="bmiText"><b><i class="fas fa-venus-mars"></i> เพศที่ท่านระบุ</b> : <?= $sexTh ?>
                            <b><i class="fas fa-weight"></i> ค่า BMI</b> :
                            <?= number_format($heightBmi, 1, '.', '') . "  " . $bmi_text ?>
                        </div>
                        <div class="bmiText"><b><i class="fas fa-user"></i> ภาวะอ้วนลงพุง<?= $sexTh ?></b> :
                            <?= $wt_t . " " . $wt_sex1 . " - " . $wt_sex2 ?></div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h5>กราฟใยแมงมุมแสดงค่าเฉลี่ยความสุขรายมิติ</h5>
                    </div>
                    <div style="margin-top: 20px;"><canvas id="myChart" class="rada"></canvas>
                    </div>

                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h5>กราฟแท่งแสดงค่าเฉลี่ยความสุขรายมิติ</h5>
                    </div>
                    <div style="margin-top: 20px; width: 90%; text-align: center;"><canvas id="myChart1"
                            class="radaBox"></canvas></div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-12">

                    <div class="table-responsive logoPic">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col"><img src="img/logo1.png" alt=""></th>
                                    <th scope="col"><img src="img/logo3.png" alt=""></th>
                                    <th scope="col"><img src="img/logo2.png" alt=""></th>
                                    <th scope="col"><img src="img/logo5.png" alt=""></th>
                                    <th scope="col"><img src="img/logo7.png" alt=""></th>
                                    <th scope="col"><img src="img/logo8.png" alt=""></th>
                                    <th scope="col"><img src="img/logo4.png" alt=""></th>
                                    <th scope="col"><img src="img/logo6.png" alt=""></th>
                                    <th scope="col"><img src="img/logo9.png" alt=""></th>
                                    <th scope="col">ความสุขภาพรวม</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <td>สุขภาพดี</td>
                                    <td>ผ่อนคลายดี</td>
                                    <td>น้ำใจดี</td>
                                    <td>จิตวิญญาณดี</td>
                                    <td>ครอบครัวดี</td>
                                    <td>สังคมดี</td>
                                    <td>ใฝ่รู้ดี</td>
                                    <td>สุขภาพเงินดี</td>
                                    <td>การงานดี</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?= $nm1 ?></td>
                                    <td><?= $nm2 ?></td>
                                    <td><?= $nm3 ?></td>
                                    <td><?= $nm4 ?></td>
                                    <td><?= $nm5 ?></td>
                                    <td><?= $nm6 ?></td>
                                    <td><?= $nm7 ?></td>
                                    <td><?= $nm8 ?></td>
                                    <td><?= $nm9 ?></td>
                                    <td><?= $nm10 ?></td>
                                </tr>
                                <tr class="textHappy">
                                    <td><?= $img_nm1; ?></td>
                                    <td><?= $img_nm2; ?></td>
                                    <td><?= $img_nm3; ?></td>
                                    <td><?= $img_nm4; ?></td>
                                    <td><?= $img_nm5; ?></td>
                                    <td><?= $img_nm6; ?></td>
                                    <td><?= $img_nm7; ?></td>
                                    <td><?= $img_nm8; ?></td>
                                    <td><?= $img_nm9 ?></td>
                                    <td><?= $img_nm10; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <br><br>
                    <div class="alert alert-danger" role="alert">

                        <center><button onclick="window.print()">พิมพ์สรุปผลแบบสำรวจความสุขของท่าน</button></center>

                    </div>

                </div>
            </div>
        </div>

        <?php include("title-footer/footer.php") ?>

        <script type="text/javascript" src="MDB/js/jquery.min.js"></script>
        <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
        <script type="text/javascript" src="MDB/js/popper.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


        <script>
        new Chart(document.getElementById("myChart"), {
            "type": "radar",
            "data": {
                "labels": ['สุขภาพดี', 'ผ่อนคลายดี', 'น้ำใจดี', 'จิตวิญญาณดี', 'ครอบครัวดี', 'สังคมดี',
                    'ใฝ่รู้ดี', 'สุขภาพเงินดี', 'การงานดี'
                ],
                "datasets": [{
                        "label": "แสดงค่าเฉลี่ยความสุขรายมิติ",
                        "data": [<?= $nm1 ?>, <?= $nm2 ?>, <?= $nm3 ?>, <?= $nm4 ?>, <?= $nm5 ?>,
                            <?= $nm6 ?>, <?= $nm7 ?>, <?= $nm8 ?>, <?= $nm9 ?>
                        ],
                        "fill": true,
                        "backgroundColor": "rgba(255, 99, 132, 0.2)",
                        "borderColor": "rgb(255, 99, 132)",
                        "pointBackgroundColor": "rgb(255, 99, 132)",
                        "pointBorderColor": "#fff",
                        "pointHoverBackgroundColor": "#fff",
                        "pointHoverBorderColor": "rgb(255, 99, 132)"
                    },
                    {

                        "data": [0],
                    }
                ]
            },
            "options": {
                "elements": {
                    "line": {
                        "tension": 0,
                        "borderWidth": 3
                    }
                }
            }
        });
        </script>

        <script>
        new Chart(document.getElementById("myChart1"), {
            "type": "bar",
            "data": {
                "labels": ['สุขภาพดี', 'ผ่อนคลายดี', 'น้ำใจดี', 'จิตวิญญาณดี', 'ครอบครัวดี', 'สังคมดี',
                    'ใฝ่รู้ดี', 'สุขภาพเงินดี', 'การงานดี'
                ],
                "datasets": [{
                    "label": "แสดงค่าเฉลี่ยความสุขรายมิติ",
                    "data": [<?= $nm1 ?>, <?= $nm2 ?>, <?= $nm3 ?>, <?= $nm4 ?>, <?= $nm5 ?>,
                        <?= $nm6 ?>, <?= $nm7 ?>, <?= $nm8 ?>, <?= $nm9 ?>, <?= $nm1 ?>
                    ],
                    "fill": false,
                    "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                        "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                        "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)",
                        "rgba(201, 203, 207, 0.2)", "rgba(1, 244, 219, 0.2)", "rgba(1, 1, 244, 0.2)"
                    ],
                    "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                        "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                        "rgb(201, 203, 207)", "rgba(1, 244, 219)", "rgba(1, 1, 244)"
                    ],
                    "borderWidth": 1
                }]
            },
            "options": {
                "scales": {
                    "yAxes": [{
                        "ticks": {
                            "beginAtZero": true
                        }
                    }]
                }
            }
        });
        </script>

</body>

</html>