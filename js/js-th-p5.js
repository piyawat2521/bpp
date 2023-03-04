$(document).ready(function() {
    $("#sub").click(function() {
        if ($("#h17:checked").length == "") {
            alert("22. โดยรวมแล้วท่านทำนุบำรุงศิลปวัฒนธรรม/ ศาสนา/ การให้ทาน หรือไม่")
            $("#h17").focus()
            return false
        }
        if ($("#h18:checked").length == "") {
            alert("23. โดยรวมแล้ว ท่านปฏิบัติกิจตามศาสนาเพื่อให้จิตใจสงบหรือไม่")
            $("#h18").focus()
            return false
        }
        if ($("#h19:checked").length == "") {
            alert("24. โดยรวมแล้ว ท่านยกโทษและให้อภัยอย่างจริงใจต่อผู้ที่สำนึกผิด")
            $("#h19").focus()
            return false
        }
        if ($("#h20:checked").length == "") {
            alert(
                "25. โดยรวมแล้ว ท่านยอมรับและขอโทษในความผิดที่ทำหรือมีส่วนรับผิดชอบ"
            )
            $("#h20").focus()
            return false
        }
        if ($("#h21:checked").length == "") {
            alert("26. โดยรวมแล้ว ท่านตอบแทนผู้มีพระคุณ หรือช่วยเหลือท่าน")
            $("#h21").focus()
            return false
        }
        if ($("#cv4:checked").length == "") {
            alert(
                "CV4. สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติจิตวิญญาณดี ของท่านเพียงใด"
            )
            $("#cv4").focus()
            return false
        }

        if (confirm("กรุณายืนยันการบันทึกข้อมูลนี้อีกครั้ง!")) {
            $("#sub").html("ระบบกำลังทำการบันทึกข้อมูลของท่านโปรดรอสักครู่ .....")
            return true
        } else {
            return false
        }
    })
})