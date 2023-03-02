$(document).ready(function () {
  $("#sex").click(function () {
    $("#p2_9").prop("checked", true)
  })

  $("#age").change(function () {
    if (isNaN($("#age").val())) {
      alert("2.2 อายุ * ใส่เฉพาะตัวเลขทั่วนั้น *")
      $("#age").focus()
      return false
    }
  })

  $("#2_5t").prop("disabled", true)

  $("#2_5_10").click(function () {
    $("#2_5t").prop("disabled", false)
    $("#2_5t").focus()
  })

  $("#2_6t").prop("disabled", true)

  $("#2_6").click(function () {
    $("#2_6t").prop("disabled", false)
    $("#2_6t").focus()
  })

  $(".p2_6").click(function () {
    $("#2_6t").prop("disabled", true)
    $("#2_6t").val("")
  })

  $("#2_10t").prop("disabled", true)

  $("#2_10").click(function () {
    $("#2_10t").prop("disabled", false)
    $("#2_10t").focus()
  })

  $(".p2_10").click(function () {
    $("#2_10t").prop("disabled", true)
    $("#2_10t").val("")
  })

  $("#2_11t").prop("disabled", true)

  $("#2_11").click(function () {
    $("#2_11t").prop("disabled", false)
    $("#2_11t").focus()
  })

  $(".p2_11").click(function () {
    $("#2_11t").prop("disabled", true)
    $("#2_11t").val("")
  })

  $("#2_12t").prop("disabled", true)

  $("#2_12").click(function () {
    $("#2_12t").prop("disabled", false)
    $("#2_12t").focus()
  })

  $(".p2_12").click(function () {
    $("#2_12t").prop("disabled", true)
    $("#2_12t").val("")
  })

  /* Check */

  $("#sub").click(function () {
    if ($(".group").val() == "") {
      alert("หน่วยงานที่ท่านสังกัด")
      $(".group").focus()
      return false
    }

    if ($(".group_sub").val() == "") {
      alert("หน่วยงานย่อย")
      $(".group_sub").focus()
      return false
    }

    if ($(".sex:checked").length == "") {
      alert("1.1 เพศ")
      $("#sex").focus()
      return false
    }
    if ($("#age").val().length == "") {
      alert("1.2 อายุ")
      $("#age").focus()
      return false
    }
    if ($(".2_3:checked").length == "") {
      alert(
        "1.3 จังหวัดที่ท่านอาศัยอยู่ในปัจจุบันเป็นจังหวัดเดียวกับภูมิลำเนาหรือไม่"
      )
      $(".2_3").focus()
      return false
    }
    if ($(".2_4:checked").length == "") {
      alert("1.4 ปัจจุบันท่านพักอาศัยอยู่ในลักษณะที่พักอาศัยแบบใด")
      $(".2_4").focus()
      return false
    }
    if ($(".p2_5:checked").length == "" && $("#2_5_10:checked").length == "") {
      alert("1.5 ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)")
      $(".p2_5").focus()
      return false
    }
    if ($("#2_5_10:checked").length != "" && $("#2_5t").val() == "") {
      alert("1.5 กรุณาระบุคำตอบด้วย")
      $("#2_5t").focus()
      return false
    }
    if ($("#2_5_10:checked").length == "" && $("#2_5t").val() != "") {
      alert("2.5 กรุณาติ๊กเครื่องหมายหน้าข้อ 10. อื่นๆ (ระบุ) ด้วย")
      $("#2_5_10").focus()
      return false
    }
    if ($(".p2_6:checked").length == "" && $("#2_6:checked").length == "") {
      alert(
        "2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)"
      )
      $(".p2_6").focus()
      return false
    }
    if ($("#2_6:checked").length != "" && $("#2_6t").val() == "") {
      alert("2.6 กรุณาระบุคำตอบด้วย")
      $("#2_6t").focus()
      return false
    }
    if ($(".p2_7:checked").length == "") {
      alert("1.7 สถานภาพสมรส")
      $(".p2_7").focus()
      return false
    }
    if ($(".p2_8:checked").length == "") {
      alert("1.8 ท่านมีบุตรหรือไม่ (รวมลูกบุญธรรม/ลูกติด/ลูกเลี้ยง)")
      $(".p2_8").focus()
      return false
    }
    if ($(".p2_9:checked").length == "") {
      alert("1.9 ขณะนี้ท่านกำลังตั้งครรภ์หรือไม่ (ถามเฉพาะเพศหญิง)")
      $(".p2_9").focus()
      return false
    }
    if ($(".p2_10:checked").length == "" && $("#2_10:checked").length == "") {
      alert("1.10 งานที่ท่านทำเป็นงานลักษณะใด")
      $(".p2_10").focus()
      return false
    }
    if ($("#2_10:checked").length != "" && $("#2_10t").val() == "") {
      alert("2.10 กรุณาระบุคำตอบด้วย")
      $("#2_10t").focus()
      return false
    }
    if ($(".p2_11:checked").length == "" && $("#2_11:checked").length == "") {
      alert("1.11 ท่านปฏิบัติงานในระดับตำแหน่งใด")
      $(".p2_11").focus()
      return false
    }
    if ($("#2_11:checked").length != "" && $("#2_11t").val() == "") {
      alert("2.11 กรุณาระบุคำตอบด้วย")
      $("#2_11t").focus()
      return false
    }

    if ($(".p2_13:checked").length == "") {
      alert("1.12 ท่านทำงานเป็นกะ/ ทำงานเป็นรอบ/ เข้าเวร ใช่หรือไม่")
      $(".p2_13").focus()
      return false
    }
    if ($(".p2_14:checked").length == "") {
      alert("1.13 ระยะเวลาที่ท่านทำงานในองค์กรปัจจุบันรวมทั้งหมด")
      $(".p2_14").focus()
      return false
    }
    if ($(".p2_15:checked").length == "") {
      alert(
        "1.14 ตั้งแต่เริ่มทำงานจนถึงปัจจุบัน ท่านลาออก/ย้าย/เปลี่ยนงานมาแล้วกี่ครั้ง"
      )
      $(".p2_15").focus()
      return false
    }
    if ($(".p2_16:checked").length == "") {
      alert(
        "1.15 ท่านมีรายได้ต่อเดือน โดยประมาณเดือนละเท่าใด (รายได้+เงินเดือน+ค่าตอบแทนอื่น ๆ)"
      )
      $(".p2_16").focus()
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
