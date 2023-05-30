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
    $("#cotent2-siteindex2-" + i).css("display", "none");
    $("#content2-siteindex-" + i).show();
}

function showCountry(i) {
    var total = $("#total-countryindex2").val();
    var b = 0;
    while (b < total) {
        $("#content2-button-" + b).css("display", "none");
        $("#content2-button2-" + b).css("display", "none");
        $b++;
    }
    $("#content2-button-" + i).fadeIn("slow");
    $("#content2-button2-" + i).fadeIn("slow");
}
function showCountry1(i) {
    $("#content2-button2-" + i).css("display", "none");
    $("#content2-button-" + i).fadeIn("slow");
}
function showAsset2(i) {
    $("#content2-asset-" + i).css("display", "none");
    $("#content2-asset2-" + i).show();
}
function showAsset1(i) {
    $("#content2-asset2-" + i).css("display", "none");
    $("#content2-asset-" + i).show();
}
