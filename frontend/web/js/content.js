function showContent(i) {
    var total = $("#total-company").val();
    var a = 0;
    while (a < total) { //การซ่อนข้อความที่ไม่ต้องการให้แสดง
        $("#content-title-" + a).css("display", "none");
        $("#content-title2-" + a).css("display", "none");
        a++;
    }
    $("#content-title-" + i).fadeIn();
    $("#content-title2-" + i).slideDown();
}