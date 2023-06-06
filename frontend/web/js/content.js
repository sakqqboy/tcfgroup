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
function showBangladresh(i) {
    var total = $("#total-servicesbangladesh").val();
    var b = 0;
    while (b < total) {
        $("#bangladresh-detail-" + b).css("display", "none");
        $("#bangladresh-detail2-" + b).css("display", "none");
        b++;
    }
    $("#bangladresh-detail-" + i).slideDown('slow');
    $("#bangladresh-detail2-" + i).slideDown('slow');
}
function showSiteindex2(i) {
    $("#content2-siteindex-" + i).css("display", "none");
    $("#content2-siteindex2-" + i).show();
}
function showSiteindex1(i) {
    $("#content2-siteindex2-" + i).css("display", "none");
    $("#content2-siteindex-" + i).show();
}

function showAsset2(i) {
    $("#content2-asset-" + i).css("display", "none");
    $("#content2-asset2-" + i).show();
}
function showAsset1(i) {
    $("#content2-asset2-" + i).css("display", "none");
    $("#content2-asset-" + i).show();
}
function showAsset1(i) {
    $("#content2-asset2-" + i).css("display", "none");
    $("#content2-asset-" + i).show();
}
$('.no-underline-new').click(function () {
    $('.moretext').slideToggle();
    if ($('.no-underline-new').text() == "READ MORE") {
        $(this).text("READ MORE").style(color = "bule");
    } else {
        $(this).text("read more")
    }
});
$('.no-underline-new1').click(function () {
    $('.moretext').slideToggle();
    if ($('.no-underline-new1').text() == "READ MORE") {
        $(this).text("READ MORE")
    } else {
        $(this).text("READ MORE")
    }
});
