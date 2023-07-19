function showContentAdmin(i) {
    var total = $("#total-company").val(); //total คือ การเก็บค่าทั้งหมดว่ามีเท่าไหร่
    var a = 0;
    while (a < total) { //การซ่อนข้อความที่ไม่ต้องการให้แสดงโดยใช้ while
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
        $("#bangladresh-detail3-" + b).css("display", "none");
        b++;
    }
    $("#bangladresh-detail-" + i).slideDown('slow');
    $("#bangladresh-detail2-" + i).slideDown('slow');
    $("#bangladresh-detail3-" + i).fadeIn();
}

function showSiteindex2(i) {
    $("#content2-siteindex-" + i).css("display", "none");
    $("#content2-siteindex2-" + i).show();
}

function showSiteindex1(i) {
    $("#content2-siteindex2-" + i).css("display", "none");
    $("#content2-siteindex-" + i).show();
}


$('.no-underline-new').click(function() {
    $('.moretext').slideToggle();
    if ($('.no-underline-new').text() == "READ MORE") {
        $(this).text("READ MORE").style(color = "bule");
    } else {
        $(this).text("read more")
    }
});
$('.no-underline-new1').click(function() {
    $('.moretext').slideToggle();
    if ($('.no-underline-new1').text() == "READ MORE") {
        $(this).text("READ MORE")
    } else {
        $(this).text("READ MORE")
    }
})

function showPassword(i) {
    $("#password").removeAttr("type");
}

function setPassword(i) {
    $("#password").attr("type", "password");
}

function showPassword2(i) {
    $("#password_hash").removeAttr("type");
}

function setPassword2(i) {
    $("#password_hash").attr("type", "password");
}

function showPassword3(i) {
    $("#password3").removeAttr("type");
}

function setPassword3(i) {
    $("#password3").attr("type", "password");
}

function showLimited2(i) {
    $("#limited-" + i).css("display", "none");
    $("#limited2-" + i).show();
}

function showLimited1(i) {
    $("#limited2-" + i).css("display", "none");
    $("#limited-" + i).show();
}

function showLegal2(i) {
    $("#content2-legal-" + i).css("display", "none");
    $("#content2-legal2-" + i).show();
}

function showLegal1(i) {
    $("#content2-legal2-" + i).css("display", "none");
    $("#content2-legal-" + i).show();
}

function showServicescard2(i) {
    $("#iconcard-" + i).css("display", "none");
    $("#iconcard2-" + i).show();
}

function showServicescard1(i) {
    $("#iconcard2-" + i).css("display", "none");
    $("#iconcard-" + i).show();
}