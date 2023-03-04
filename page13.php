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


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title><?php include("title-footer/title.php"); ?></title>

    <script type="text/javascript">
    //disable back button
    history.pushState(null, null, '');
    window.addEventListener('popstate', function(event) {
        history.pushState(null, null, '');
    });
    </script>

    <script type="text/javascript">
    $(function() {
        $("#slider").slider({
            value: 0,
            min: 0,
            max: 10,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount").val("" + ui.value);
            }
        });
        $("#amount").val("" + $("#slider").slider("value"));

        $("#slider1").slider({
            value: 0,
            min: 0,
            max: 10,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount1").val("" + ui.value);
            }
        });
        $("#amount1").val("" + $("#slider1").slider("value"));
    });
    </script>

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

    <form name="page13" id="page13" method="post" action="page13_Insert.php">

        <div class="container mainbox">
            <div class="row">
                <div class="col-sm-12">
                    <!--mainBox-->

                    <div class="container box">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                                หน้าที่ : 12/<?php echo $_SESSION["numPage"]; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="far fa-check-square"></i> Happy Mind / สุขภาพจิตดี
                            </div>
                        </div>
                    </div>


                    <!--  74,75,83-->


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">74. ในช่วง 2 อาทิตย์ที่ผ่นมารวมทั้งวันนี้
                                    ท่านรู้สึกหรือมีอาการเบื่อ ไม่สนใจ ไม่อยากทำอะไรเลย หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h69" class="form-check-input h69_1" id="h69_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h69" class="form-check-input h69" id="h69_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h69" class="form-check-input h69" id="h69_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h69" class="form-check-input h69" id="h69_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h69" class="form-check-input h69" id="h69_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">75. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านรู้สึกหรือมีอาหารเบื่ออาหาร หรือ กินมากเกินไป หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h70" class="form-check-input h70_1" id="h70_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h70" class="form-check-input h70" id="h70_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h70" class="form-check-input h70" id="h70_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h70" class="form-check-input h70" id="h70_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h70" class="form-check-input h70" id="h70_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">76. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านรู้สึกหรือมีอาการเหนื่อยง่าย หรือ ไม่ค่อยมีแรง หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h71" class="form-check-input h71_1" id="h71_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h71" class="form-check-input h71" id="h71_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h71" class="form-check-input h71" id="h71_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h71" class="form-check-input h71" id="h71_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h71" class="form-check-input h71" id="h71_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">77. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านรู้สึกหรือมีอาการหลับยาก หรือ หลับ ๆ ตื่น ๆ หรือหลับมากไป หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h72" class="form-check-input h72_1" id="h72_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h72" class="form-check-input h72" id="h72_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h72" class="form-check-input h72" id="h72_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h72" class="form-check-input h72" id="h72_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h72" class="form-check-input h72" id="h72_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">78. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านรู้สึกหรือมีอาการไม่สบายใจ หรือ ท้อแท้ หรือ ซึมเศร้า หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h73" class="form-check-input h73_1" id="h73_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h73" class="form-check-input h73" id="h73_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h73" class="form-check-input h73" id="h73_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h73" class="form-check-input h73" id="h73_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h73" class="form-check-input h73" id="h73_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">79. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านรู้สึกหรือมีอาการสมาธิไม่ดี เวลาทำอะไร เช่น ดูทีวี ฟังเพลง เล่นเน็ต
                                    หรือทำงานที่ต้องใช้ความตั้งใจ หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h74" class="form-check-input h74_1 " id="h74_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h74" class="form-check-input h74" id="h74_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h74" class="form-check-input h74" id="h74_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h74" class="form-check-input h74" id="h74_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h74" class="form-check-input h74" id="h74_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">80. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านรู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลว ทำให้ตนเองหรือครอบครัวผิดหวัง
                                    หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h75" class="form-check-input h75_1" id="h75_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h75" class="form-check-input h75" id="h75_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h75" class="form-check-input h75" id="h75_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h75" class="form-check-input h75" id="h75_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h75" class="form-check-input h75" id="h75_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">81. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านรู้สึกว่าทำอะไรช้ำลงจนคนอื่นสังเกตเห็นได้ หรือ กระสับกระส่าย
                                    ไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h76" class="form-check-input h76_1" id="h76_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h76" class="form-check-input h76" id="h76_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h76" class="form-check-input h76" id="h76_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h76" class="form-check-input h76" id="h76_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h76" class="form-check-input h76" id="h76_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">82. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านรู้สึกว่า ถ้ำเราตายไปคงจะดี หรือเคยคิดฆ่าตัวตาย หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h77" class="form-check-input h77_1" id="h77_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h77" class="form-check-input h77" id="h77_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h77" class="form-check-input h77" id="h77_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h77" class="form-check-input h77" id="h77_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h77" class="form-check-input h77" id="h77_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">83. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้
                                    ท่านเคยทำร้ายตัวเอง หรือ เคยพยายามฆ่าตัวตาย หรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h78" class="form-check-input h78_1" id="h78_1"
                                            value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1.
                                            เป็นทุกวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h78" class="form-check-input h78" id="h78_2"
                                            value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. เป็นบ่อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h78" class="form-check-input h78" id="h78_3"
                                            value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3.
                                            เป็นบางวัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h78" class="form-check-input h78" id="h78_4"
                                            value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. เป็นน้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h78" class="form-check-input h78" id="h78_5"
                                            value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            ไม่เป็นเลย</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">84. ปัจจุบัน ความสุข ของท่านอยู่ในระดับใด
                                    ขอให้ท่านกากบาท X ลงบนเส้นด้านล่างโดยคะแนนจะเรียงจากน้อยไปหามาก เริ่มจาก 0 หมายถึง
                                    ไม่มีความสุขเลย ไปจนถึง 10 หมายถึง มีความสุขที่สุด
                                    (การตอบแบบสำรวจผ่านอุปกรณ์สมาร์ทโฟนและแท็บเล็ต ท่านสามารถเลื่อนแถบสเกลไปด้านหน้า
                                    ด้วยการกดตรงพื้นที่ว่างบนแถบสเกล 1 ครั้ง เพื่อเป็นการเลื่อนไปด้านหน้า)</label>
                                <!-- Group of material radios - option 1 -->


                                <!--<input type="range" class="custom-range" min="0" max="10" step="0.1" id="customRange3" name="h69">-->
                                <input type="text" id="amount" name="h79" readonly
                                    style="border:0; color:#f6931f; font-weight:bold; font-size: 20px;">
                                <div align='center'>
                                    <div id="slider" style="width: 99%"></div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">85. ปัจจุบันสถานการณ์โควิด-19 (COVID-19)
                                    ส่งผลกระทบต่อชีวิตความเป็นอยู่ (ภาพรวมทั้งในเชิงบวกและเชิงลบ) ของท่านในระดับใด <br>
                                    โปรด กากบาท X ลงบนเส้นด้านล่าง โดยคะแนนเริ่มจาก 0 หมายถึง
                                    ไม่ส่งผลกระทบต่อชีวิตความเป็นอยู่เลย ไปจนถึง 10 หมายถึง
                                    ส่งผลกระทบต่อชีวิตความเป็นอยู่มากที่สุด
                                    (การตอบแบบสำรวจผ่านอุปกรณ์สมาร์ทโฟนและแท็บเล็ต ท่านสามารถเลื่อนแถบสเกลไปด้านหน้า
                                    ด้วยการกดตรงพื้นที่ว่างบนแถบสเกล 1 ครั้ง เพื่อเป็นการเลื่อนไปด้านหน้า)</label>
                                <!-- Group of material radios - option 1 -->


                                <!--<input type="range" class="custom-range" min="0" max="10" step="0.1" id="customRange3" name="h69">-->
                                <input type="text" id="amount1" name="h80" readonly
                                    style="border:0; color:#f6931f; font-weight:bold; font-size: 20px;">
                                <div align='center'>
                                    <div id="slider1" style="width: 99%"></div>
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


    <script type="text/javascript" src="js/js-th-p13.js"></script>

</body>

</html>