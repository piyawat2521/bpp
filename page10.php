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

  <form name="page10" id="page10" method="post" action="page10_Insert.php">

    <div class="container mainbox">
      <div class="row">
        <div class="col-sm-12"><!--mainBox-->

          <div class="container box">
            <div class="row">
              <div class="col-sm-12" style="text-align: right; font-size: 14px;">
                หน้าที่ : 10/<?php echo $_SESSION["numPage"];?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <i class="far fa-check-square"></i> Happy Work Life (Happy Plus) / การงานดี
              </div>
            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ"> 38. งานของท่าน มีความท้าทายและส่งเสริมให้ท่านได้เรียนรู้สิ่งใหม่ๆ หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h38" class="form-check-input" id="h38" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/ มีน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h38" class="form-check-input" id="h38" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h38" class="form-check-input" id="h38" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h38" class="form-check-input" id="h38" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h38" class="form-check-input" id="h38" value="5">
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
                <label for="exampleForm2" class="textQ">39. งานของท่าน มีความชัดเจนของโอกาสในการเติบโตในตำแหน่ง หน้าที่หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h39" class="form-check-input" id="h39" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/ มีน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h39" class="form-check-input" id="h39" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h39" class="form-check-input" id="h39" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h39" class="form-check-input" id="h39" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h39" class="form-check-input" id="h39" value="5">
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
                <label for="exampleForm2" class="textQ">40. งานของท่านในขณะนี้มีความมั่นคง หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h40" class="form-check-input" id="h40" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มั่นคง/ มั่นคงน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h40" class="form-check-input" id="h40" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. มั่นคงน้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h40" class="form-check-input" id="h40" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. มั่นคงปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h40" class="form-check-input" id="h40" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มั่นคงมาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h40" class="form-check-input" id="h40" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. มั่นคงมากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">41. ในการทำงาน ท่านสามารถแสดงความคิดเห็นและมีส่วนร่วมในข้อเสนอแนะกับนายจ้าง หรือหัวหน้างาน หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h41" class="form-check-input" id="h41" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มีส่วนร่วม/ มีน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h41" class="form-check-input" id="h41" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. มีส่วนร่วมบ้างเล็กน้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h41" class="form-check-input" id="h41" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. มีส่วนร่วมปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h41" class="form-check-input" id="h41" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มีส่วนร่วมมาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h41" class="form-check-input" id="h41" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. มีส่วนร่วมมากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">42. ท่านได้รับ การปฏิบัติอย่างถูกต้องตามกฎหมายแรงงาน/ พ.ร.บ.ข้าราชการ 2551/ พรบ.แรงงานรัฐวิสาหกิจสัมพันธ์ 2547/ กฎหมายอื่นๆ จากองค์กรของท่าน หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h42" class="form-check-input" id="h42" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ได้เลย/ ได้รับน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h42" class="form-check-input" id="h42" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. ได้รับเล็กน้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h42" class="form-check-input" id="h42" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ได้รับพอสมควร</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h42" class="form-check-input" id="h42" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. ได้รับมาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h42" class="form-check-input" id="h42" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. ได้รับมากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">43. ท่านได้รับการพิจารณาเลื่อนขั้น/ เลื่อนตำแหน่ง/ ปรับขึ้นเงินค่าจ้างประจำปีที่ผ่านมาด้วยความเหมาะสมหรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h43" class="form-check-input" id="h43" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่เหมาะสม/ เหมาะสมน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h43" class="form-check-input" id="h43" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h43" class="form-check-input" id="h43" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h43" class="form-check-input" id="h43" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h43" class="form-check-input" id="h43" value="5">
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
                <label for="exampleForm2" class="textQ">44. ความถูกต้อง ของการจ่ายค่าจ้าง ค่าล่วงเวลา ฯลฯ ที่ท่านได้รับจากองค์กรของท่านเป็นอย่างไร</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h44" class="form-check-input" id="h44" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ถูกต้องทุกครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h44" class="form-check-input" id="h44" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. ไม่ถูกต้องบ่อยครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h44" class="form-check-input" id="h44" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ถูกต้องบ้างเป็นบางครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h44" class="form-check-input" id="h44" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. ถูกต้องเกือบทุกครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h44" class="form-check-input" id="h44" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. ถูกต้องทุกครั้ง</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">45. ความตรงเวลา ของการจ่ายค่าจ้าง ค่าล่วงเวลา ฯลฯ ที่ท่านได้รับจากองค์กรของท่านเป็นอย่างไร</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h45" class="form-check-input" id="h45" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ตรงเวลาทุกครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h45" class="form-check-input" id="h45" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. ไม่ตรงเวลาบ่อยครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h45" class="form-check-input" id="h45" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ตรงเวลาบ้างเป็นบางครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h45" class="form-check-input" id="h45" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. ตรงเวลาเกือบทุกครั้ง</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h45" class="form-check-input" id="h45" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. ตรงเวลาทุกครั้ง</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">46. ค่าตอบแทนที่ท่านได้รับคุ้มค่ากับความเสี่ยงที่อาจเกิดจากการทำงาน (การถูกฟ้องร้อง/ การได้รับอันตรายจากการทำงาน ฯลฯ) </label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h46" class="form-check-input" id="h46" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่คุ้มค่า/ คุ้มค่าน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h46" class="form-check-input" id="h46" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. คุ้มค่าน้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h46" class="form-check-input" id="h46" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. คุ้มค่าปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h46" class="form-check-input" id="h46" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. คุ้มค่ามาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h46" class="form-check-input" id="h46" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. คุ้มค่ามากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">47. ท่านได้รับการดูแลเกี่ยวกับสุขภาพที่ดีจากองค์กร หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h47" class="form-check-input" id="h47" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ได้รับ/ ได้รับน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h47" class="form-check-input" id="h47" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h47" class="form-check-input" id="h47" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h47" class="form-check-input" id="h47" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h47" class="form-check-input" id="h47" value="5">
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
                <label for="exampleForm2" class="textQ">48. ท่านพึงพอใจต่อสภาพแวดล้อมโดยรวมขององค์กร หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h48" class="form-check-input" id="h48" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่พอใจเลย/ พอใจน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h48" class="form-check-input" id="h48" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. พอใจน้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h48" class="form-check-input" id="h48" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. พอใจปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h48" class="form-check-input" id="h48" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. พอใจมาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h48" class="form-check-input" id="h48" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. พอใจมากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">49. ท่านพึงพอใจกับสวัสดิการที่องค์กรจัดให้หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h49" class="form-check-input" id="h49" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่พอใจเลย/ พอใจน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h49" class="form-check-input" id="h49" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. พอใจน้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h49" class="form-check-input" id="h49" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. พอใจปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h49" class="form-check-input" id="h49" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. พอใจมาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h49" class="form-check-input" id="h49" value="5">
                    <label class="form-check-label" for="materialGroupExample3"> 5. พอใจมากที่สุด</label>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="container boxQ">
            <div class="row">
              <div class="col-sm-12">
                <!-- Default input -->
                <label for="exampleForm2" class="textQ">50.โดยรวมแล้วที่ทำงานของท่านให้ความสำคัญกับการทำงานเป็นทีมหรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h50" class="form-check-input" id="h50" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่ให้/ ให้น้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h50" class="form-check-input" id="h50" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h50" class="form-check-input" id="h50" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h50" class="form-check-input" id="h50" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h50" class="form-check-input" id="h50" value="5">
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
                <label for="exampleForm2" class="textQ">51. โดยรวมแล้วความสัมพันธ์ในที่ทำงานของท่านเหมือนพี่เหมือนน้อง หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h51" class="form-check-input" id="h51" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่เหมือน/เหมือนน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h51" class="form-check-input" id="h51" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h51" class="form-check-input" id="h51" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h51" class="form-check-input" id="h51" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h51" class="form-check-input" id="h51" value="5">
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
                <label for="exampleForm2" class="textQ">52. โดยรวมแล้วท่านสื่อสารพูดคุยกับเพื่อนร่วมงานในที่ทำงานหรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h52" class="form-check-input" id="h52" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่สื่อสารเลย/ สื่อสารน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h52" class="form-check-input" id="h52" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h52" class="form-check-input" id="h52" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h52" class="form-check-input" id="h52" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h52" class="form-check-input" id="h52" value="5">
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
                <label for="exampleForm2" class="textQ">53. โดยรวมแล้วในที่ทำงานของท่านมีการถ่ายทอดแลกเปลี่ยนแบบอย่างการทำงานระหว่างกันหรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h53" class="form-check-input" id="h53" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/ มีน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h53" class="form-check-input" id="h53" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h53" class="form-check-input" id="h53" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h53" class="form-check-input" id="h53" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h53" class="form-check-input" id="h53" value="5">
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
                <label for="exampleForm2" class="textQ">54. โดยรวมแล้วท่านทำงานอย่างมี "ความสุข" หรือไม่</label>
                <!-- Group of material radios - option 1 -->
                <div class="boxA">
                  <div class="form-check">
                    <input type="radio" name="h54" class="form-check-input" id="h54" value="1">
                    <label class="form-check-label" for="materialGroupExample1"> 1. ไม่มี/ มีน้อยที่สุด</label>
                  </div>
                  <!-- Group of material radios - option 2 -->
                  <div class="form-check">
                    <input type="radio" name="h54" class="form-check-input" id="h54" value="2">
                    <label class="form-check-label" for="materialGroupExample2"> 2. น้อย</label>
                  </div>
                  <!-- Group of material radios - option 3 -->
                  <div class="form-check">
                    <input type="radio" name="h54" class="form-check-input" id="h54" value="3">
                    <label class="form-check-label" for="materialGroupExample3"> 3. ปานกลาง</label>
                  </div>
                  <!-- Group of material radios - option 4 -->
                  <div class="form-check">
                    <input type="radio" name="h54" class="form-check-input" id="h54" value="4">
                    <label class="form-check-label" for="materialGroupExample2"> 4. มาก</label>
                  </div>
                  <!-- Group of material radios - option 5 -->
                  <div class="form-check">
                    <input type="radio" name="h54" class="form-check-input" id="h54" value="5">
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
<script type="text/javascript" src="js/js-th-p10.js"></script>
</body>
</html>