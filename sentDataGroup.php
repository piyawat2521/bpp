<?php
$idGroup = $_POST["idGroup"];

if($idGroup == 1 or $idGroup == 2 or $idGroup == 3){
  $n = "-";
  $nt = "ไม่ต้องเลือกหน่วยงานย่อย";

  $lis = '<option value="-">-- ไม่ต้องเลือกหน่วยงานย่อย --</option>';
}else{
  $n = $idGroup;
  $nt = "กรุณาเลือกหน่วยงานย่อยของท่าน";

  $lis = '<option value="">-- กรุณาเลือกหน่วยงานย่อยของท่าน --</option>';
}
?>


<select class="browser-default custom-select group_sub" name="group_sub">

  
  
  <?php

  echo $lis;


  include 'config/connect.php';
  $se2 = mysqli_query($con," select* from office_sub where os_group = '$n' order by os_id asc ");
  $i = 1;

  while ($rfs = mysqli_fetch_assoc($se2)) {
    echo '<option value="'.$rfs["os_id"].'">'.$i.'. '.$rfs["os_name"].'</option>';

    $i++;
  }
  ?>                    

</select>   