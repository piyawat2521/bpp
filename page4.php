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
  <title><?php include("title-footer/title.php");?></title>
</head>
<body>

  <?php include ("banner/banner.php"); ?>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="font-h1">คำชี้แจงในการตอบแบบสำรวจ : ให้ใส่เครื่องหมาย <i class="fas fa-check"></i> ในช่อง <i class="fas fa-expand"></i> ทุกข้อที่ท่านเลือก</div>
      </div>
    </div>
  </div>

  <form name="page4" id="page4" method="post" action="page4_Insert.php">

    <div class="container mainbox">
      <div class="row">
        <div class="col-sm-12"><!--mainBox-->

          <div class="container box">
            <div class="row">
              <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                หน้าที่ : 4/<?php echo $_SESSION["numPage"];?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <i class="far fa-check-square"></i> Happy Heart / น้ำใจดี
              </div>
            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">12. โดยรวมแล้ว ท่านรู้สึกเอื้ออาทร/ ห่วงใยต่อคนรอบข้างหรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h12" class="form-check-input" id="h12" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่รู้สึกเลย/ น้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h12" class="form-check-input" id="h12" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h12" class="form-check-input" id="h12" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>

                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h12" class="form-check-input" id="h12" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h12" class="form-check-input" id="h12" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. มากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">13. โดยรวมแล้ว ท่านให้การช่วยเหลือแก่คนรอบข้างหรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h13" class="form-check-input" id="h13" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่เคย/ แทบจะไม่เคยช่วย</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h13" class="form-check-input" id="h13" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. นานๆ ครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h13" class="form-check-input" id="h13" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ช่วยบ้างบางครั้ง</label>
                  </div>

                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h13" class="form-check-input" id="h13" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. ช่วยแทบทุกครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h13" class="form-check-input" id="h13" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. ช่วยทุกครั้ง</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">14. โดยรวมแล้วท่านเต็มใจและยินดี ในการทำประโยชน์เพื่อส่วนรวม หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h14" class="form-check-input" id="h14" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่เต็มใจ/ เต็มใจน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h14" class="form-check-input" id="h14" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h14" class="form-check-input" id="h14" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>

                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h14" class="form-check-input" id="h14" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h14" class="form-check-input" id="h14" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. มากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">15. โดยรวมแล้วท่านเข้าร่วมกิจกรรมที่เป็นประโยชน์ต่อสังคม เช่น การปลูกป่า การบริจาคสิ่งของ หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h15" class="form-check-input" id="h15" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่เข้าร่วม/เข้าร่วมน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h15" class="form-check-input" id="h15" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h15" class="form-check-input" id="h15" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>

                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h15" class="form-check-input" id="h15" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h15" class="form-check-input" id="h15" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. มากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">16. โดยรวมแล้วท่านได้ทำกิจกรรมที่สามารถทำได้ด้วยตนเองและมีประโยชน์ต่อสังคม เช่น การคัดแยกขยะ การลดใช้ถุงพลาสติก เป็นต้น</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h16" class="form-check-input" id="h16" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ทำ/ ทำน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h16" class="form-check-input" id="h16" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h16" class="form-check-input" id="h16" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>

                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h16" class="form-check-input" id="h16" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h16" class="form-check-input" id="h16" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. มากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>


      <div><button type="submit" class="btn btn-primary btn-block" id="sub"><i class="far fa-arrow-alt-circle-right"></i> บันทึกข้อมูล</button></div>

    </div><!--mainBox-->
  </div>
</div>

</form>

<?php include("title-footer/footer.php") ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
<script type="text/javascript" src="MDB/js/mdb.min.js"></script>
<script type="text/javascript" src="MDB/js/popper.js"></script>
<script type="text/javascript" src="js/js-th-p4.js"></script>
</body>
</html>