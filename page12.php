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

    <form name="page12" id="page12" method="post" action="page12_Insert.php">

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
                                <i class="far fa-check-square"></i> สมดุลชีวิตกับการทำงาน
                            </div>
                        </div>
                    </div>



                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">69.
                                    ท่านรู้สึกว่าโดยเฉลี่ยในหนึ่งสัปดาห์ท่านทำงานกี่วัน</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h64" class="form-check-input" id="h64" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ทำงาน 1- 2
                                            วัน</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h64" class="form-check-input" id="h64" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. ทำงาน 3 - 4
                                            วัน</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h64" class="form-check-input" id="h64" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ทำงาน 5
                                            วัน</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h64" class="form-check-input" id="h64" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. ทำงาน 6
                                            วัน</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h64" class="form-check-input" id="h64" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. ทำงาน 7 วัน
                                            (ทุกวัน)</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">70.
                                    ท่านรู้สึกว่าโดยเฉลี่ยท่านทำงานวันละกี่ชั่วโมง</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h65" class="form-check-input" id="h65" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. น้อยกว่า 6
                                            ชั่วโมง</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h65" class="form-check-input" id="h65" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. 6 - 8
                                            ชั่วโมง</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h65" class="form-check-input" id="h65" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. 9 - 10
                                            ชั่วโมง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h65" class="form-check-input" id="h65" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. 11 - 12
                                            ชั่วโมง</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h65" class="form-check-input" id="h65" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. มากกว่า 12
                                            ชั่วโมง</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">71. ท่านรู้สึกว่า ได้พักผ่อนโดยเฉลี่ย
                                    (ไม่รวมการนอนหลับตอนกลางคืน) วันละกี่ชั่วโมง</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h66" class="form-check-input" id="h66" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. น้อยกว่า 1
                                            ชั่วโมง</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h66" class="form-check-input" id="h66" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. 1 - 2
                                            ชั่วโมง</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h66" class="form-check-input" id="h66" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. 3 - 5
                                            ชั่วโมง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h66" class="form-check-input" id="h66" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. 6 - 7
                                            ชั่วโมง</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h66" class="form-check-input" id="h66" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5. 8
                                            ชั่วโมง</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container boxQ">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Default input -->
                                <label for="exampleForm2" class="textQ">72. หน่วยงานของท่าน มีความยืดหยุ่น
                                    ในการทำงานหรือไม่ (เช่น ความยืดหยุ่นในการทำงานนอกสถานที่ ไม่ต้องเข้างาน/
                                    ออกงานตามเวลาที่กำหนด/ สามารถเลือกวันหยุดของตนเองได้ ฯลฯ)</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h67" class="form-check-input" id="h67" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/
                                            มีน้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h67" class="form-check-input" id="h67" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h67" class="form-check-input" id="h67" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h67" class="form-check-input" id="h67" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h67" class="form-check-input" id="h67" value="5">
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
                                <label for="exampleForm2" class="textQ">73. ท่านทำงานตรงตามวุฒิการศึกษาหรือไม่</label>
                                <!-- Group of material radios - option 1 -->
                                <div class="boxA">
                                    <div class="form-check">
                                        <input type="radio" name="h68" class="form-check-input" id="h68" value="1">
                                        <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ตรงตามวุฒิ/
                                            น้อยที่สุด</label>
                                    </div>
                                    <!-- Group of material radios - option 2 -->
                                    <div class="form-check">
                                        <input type="radio" name="h68" class="form-check-input" id="h68" value="2">
                                        <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                                    </div>
                                    <!-- Group of material radios - option 3 -->
                                    <div class="form-check">
                                        <input type="radio" name="h68" class="form-check-input" id="h68" value="3">
                                        <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                                    </div>
                                    <!-- Group of material radios - option 4 -->
                                    <div class="form-check">
                                        <input type="radio" name="h68" class="form-check-input" id="h68" value="4">
                                        <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                                    </div>
                                    <!-- Group of material radios - option 5 -->
                                    <div class="form-check">
                                        <input type="radio" name="h68" class="form-check-input" id="h68" value="5">
                                        <label class="form-check-label" for="materialGroupExample3"> 5.
                                            มากที่สุด</label>
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


    <script type="text/javascript" src="js/js-th-p12.js"></script>
</body>

</html>