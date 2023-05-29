function showContent(i) {
    var total = $("#total-company").val();   //total คือ การเก็บค่าทั้งหมดว่ามีเท่าไหร่
    var a = 0;
    while (a < total) {    //การซ่อนข้อความที่ไม่ต้องการให้แสดงโดยใช้ while
        $("#content-title-" + a).css("display", "none");
        $("#content-title2-" + a).css("display", "none");
        a++;
    }
    $("#content-title-" + i).slideDown('slow');
    $("#content-title2-" + i).slideDown('slow');
}
function showSiteindex2(i) {
    $("#cotent2-siteindex-" + i).css("display", "none");
    $("#content2-siteindex2-" + i).show();
}
function showSiteindex1(i) {
    $("#content2-siteindex2-" + i).css("display", "none");
    $("#cotent2-siteindex-" + i).show();
}


function showButtonservices(i) {
    $("#content2-services-" + i).css("display", "none");
    $("#content2-services2-" + i).show();
}


