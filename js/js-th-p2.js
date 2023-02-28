$(document).ready(function(){

 $("#1_1").change(function() {

  if(isNaN($("#1_1").val()) ){

    alert("1.1 ปัจจุบัน ท่านมีน้ำหนัก * ใส่เฉพาะตัวเลขทั่วนั้น *");
    $("#1_1").focus();
    return false;
}     	

});
 $("#1_2").change(function() {

    if(isNaN($("#1_2").val()) ){

        alert("1.2 ส่วนสูง * ใส่เฉพาะตัวเลขทั่วนั้น *");
        $("#1_2").focus();
        return false;
    }       

});
 $("#1_3").change(function() {

    if(isNaN($("#1_3").val()) ){

        alert("1.3 เส้นรอบเอว * ใส่เฉพาะตัวเลขทั่วนั้น *");
        $("#1_3").focus();
        return false;
    }       

});


 /* Check */

 $("#sub").click(function(){

      if($("#1_1").val().length == "" || $("#1_1").val() == 0){
         alert("1.1 ปัจจุบัน ท่านมีน้ำหนัก * ใส่เฉพาะตัวเลขทั่วนั้น *");
         $("#1_1").focus();
         return false;
     }
     if($("#1_2").val().length == ""){
        alert("1.2 ส่วนสูง * ใส่เฉพาะตัวเลขทั่วนั้น *");
        $("#1_2").focus();
        return false;
    }
    if($("#1_3").val().length == ""){
        alert("1.3 เส้นรอบเอว * ใส่เฉพาะตัวเลขทั่วนั้น *");
        $("#1_3").focus();
        return false;
    }

    if($("#h2:checked").length == ""){
        alert("2. โดยปกติท่านกินอาหารเช้า โดยเฉลี่ยสัปดาห์ละกี่วัน");
        $("#h2").focus();
        return false;
    }
    if($("#h3:checked").length == ""){
        alert("3. ปัจจุบันท่านออกกำลังกายโดยเฉลี่ยสัปดาห์ละกี่วัน");
        $("#h3").focus();
        return false;
    }
    if($("#h4:checked").length == ""){
        alert("4. ปัจจุบันท่านสูบบุหรี่/ ใบจาก/ ยาเส้น หรือไม่");
        $("#h4").focus();
        return false;
    }
    if($("#h5:checked").length == ""){
        alert("5. ปัจจุบันท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์ เช่น เหล้า เบียร์ ไวน์ สาโท หรือสุราพื้นบ้านหรือไม่");
        $("#h5").focus();
        return false;
    }
    if($("#h6:checked").length == ""){
        alert("6. โดยรวมแล้วท่านพึงพอใจกับสุขภาพกายของท่านหรือไม่");
        $("#h6").focus();
        return false;
    }

    if(confirm("กรุณายืนยันการบันทึกข้อมูลนี้อีกครั้ง!")){

       $("#sub").html("ระบบกำลังทำการบันทึกข้อมูลของท่านโปรดรอสักครู่ .....");
       return true;
       

    }else{

       return false;

    }


});

});