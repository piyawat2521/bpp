$(document).ready(function() {
    $("#sub").click(function() {
        if ($("#h25:checked").length == "") {
            alert("30. โดยรวมแล้ว เพื่อนบ้านมีความสัมพันธ์ที่ดีต่อท่านหรือไม่")
            $("#h25").focus()
            return false
        }
        if ($("#h26:checked").length == "") {
            alert("31. โดยรวมแล้วท่านปฏิบัติตามกฎระเบียบ/ ข้อบังคับของสังคม หรือไม่")
            $("#h26").focus()
            return false
        }
        if ($("#h27:checked").length == "") {
            alert("32. โดยรวมแล้วท่านรู้สึก ปลอดภัยในชีวิตและทรัพย์สิน หรือไม่")
            $("#h27").focus()
            return false
        }
        if ($("#h28:checked").length == "") {
            alert(
                "33. โดยรวมแล้ว เมื่อท่านมีปัญหา ท่านสามารถขอความช่วยเหลือจากคนในชุมชน หรือไม่"
            )
            $("#h28").focus()
            return false
        }
        if ($("#h29:checked").length == "") {
            alert(
                "34. โดยรวมแล้ว ท่านรู้สึกว่า สังคมไทยทุกวันนี้ มีความสงบสุข หรือไม่"
            )
            $("#h29").focus()
            return false
        }
        if ($("#h30:checked").length == "") {
            alert("35. โดยรวมแล้วทุกวันนี้ท่านใช้ชีวิตในสังคมอย่างมีความสุข หรือไม่")
            $("#h30").focus()
            return false
        }

        if ($("#cv6:checked").length == "") {
            alert(
                "CV6. สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติสังคมดี ของท่านเพียงใด"
            )
            $("#cv6").focus()
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