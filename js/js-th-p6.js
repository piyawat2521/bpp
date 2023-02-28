$(document).ready(function(){


 $("#sub").click(function(){


    if($("#h22:checked").length == ""){
        alert("22. ท่านมีเวลาอยู่กับครอบครัว เพียงพอหรือไม่");
        $("#h22").focus();
        return false;
    }
    if($("#h23:checked").length == ""){
        alert("23. ท่าน ทำกิจกรรม (ออกกำลังกาย ทำบุญ ซื้อของ ฯลฯ) ร่วมกันกับคนในครอบครัว");
        $("#h23").focus();
        return false;
    }
    if($("#h24:checked").length == ""){
        alert("24. โดยรวมแล้วท่านมีความสุขกับครอบครัวของท่านหรือไม่");
        $("#h24").focus();
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