$(document).ready(function() {
    $("#sub").click(function() {
        if($(".h69_1:checked").length == "" && $(".h69:checked").length == "" ){
            alert("74. ในช่วง 2 อาทิตย์ที่ผ่นมารวมทั้งวันนี้")
            $("#h69_1").focus();
            return false
        }
        if($(".h70_1:checked").length == "" && $(".h70:checked").length == "" ){
            alert("75. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาหารเบื่ออาหาร")
            $("#h70_1").focus();
            return false
        }
        if($(".h71_1:checked").length == "" && $(".h71:checked").length == ""){
            alert("76.ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการเหนื่อยง่าย ")
            $("#h71_1").focus();
            return false
        }
        if($(".h72_1:checked").length == "" && $(".h72:checked").length == ""){
            alert("77. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการหลับยาก หรือ หลับ ๆ ตื่น ๆ ")
            $("#h72_1").focus();
            return false
        }
        if($(".h73_1:checked").length == "" && $(".h73:checked").length == ""){
            alert("78. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการไม่สบายใจ หรือ ท้อแท้ ")
            $("#h73_1").focus();
            return false
        }
        if($(".h74_1:checked").length == "" && $(".h74:checked").length == ""){
            alert("79. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการสมาธิไม่ดี เวลาทำอะไร")
            $("#h74_1").focus();
            return false
        }
        if($(".h75_1:checked").length == "" && $(".h75:checked").length == ""){
            alert("80. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกไม่ดีกับตัวเอง")
            $("#h75_1").focus();
            return false
        }
        if($(".h76_1:checked").length == "" && $(".h76:checked").length == ""){
            alert("81. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกว่าทำอะไรช้ำลงจนคนอื่นสังเกตเห็นได้ หรือ กระสับกระส่าย")
            $("#h76_1").focus();
            return false
        }
        if($(".h77_1:checked").length == "" && $(".h77:checked").length == ""){
            alert("82. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกว่า ถ้ำเราตายไปคงจะดี")
            $("#h77_1").focus();
            return false
        }
        if($(".h78_1:checked").length == "" && $(".h78:checked").length == ""){
            alert("83. ในช่วง 2 อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านเคยทำร้ายตัวเอง หรือ เคยพยายามฆ่าตัวตาย หรือไม่")
            $("#h78_1").focus();
            return false
        }


        // if($(".13_1:checked").length == ""){
        //     alert("(1) ภาพรวม สุขภาพกายดี ");
        //     $(".13_1").focus();
        //     return false;
        // }
        // if($(".13_2:checked").length == ""){
        //     alert("(2) ภาพรวม ผ่อนคลายดี");
        //     $(".13_2").focus();
        //     return false;
        // }
        // if($(".13_3:checked").length == ""){
        //     alert("(3) ภาพรวม น้ำใจดี");
        //     $(".13_3").focus();
        //     return false;
        // }
        // if($(".13_4:checked").length == ""){
        //     alert("(4) ภาพรวม จิตวิญญาณดี");
        //     $(".13_4").focus();
        //     return false;
        // }
        // if($(".13_5:checked").length == ""){
        //     alert("(5) ภาพรวม ครอบครัวดี");
        //     $(".13_5").focus();
        //     return false;
        // }
        // if($(".13_6:checked").length == ""){
        //     alert("(6) ภาพรวม สังคมดี");
        //     $(".13_6").focus();
        //     return false;
        // }
        // if($(".13_7:checked").length == ""){
        //     alert("(7) ภาพรวม ใฝ่รู้ดี");
        //     $(".13_7").focus();
        //     return false;
        // }
        // if($(".13_8:checked").length == ""){
        //     alert("(8) ภาพรวม สุขภาพเงินดี");
        //     $(".13_8").focus();
        //     return false;
        // }
        // if($(".13_9:checked").length == ""){
        //     alert("(9) ภาพรวม การงานดี");
        //     $(".13_9").focus();
        //     return false;
        // }

        if (confirm("กรุณายืนยันการบันทึกข้อมูลนี้อีกครั้ง!")) {
            $("#sub").html("ระบบกำลังทำการบันทึกข้อมูลของท่านโปรดรอสักครู่ .....")
            return true
        } else {
            return false
        }
    })
})