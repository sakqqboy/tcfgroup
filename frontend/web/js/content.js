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

function imageasset2(i) {
    $("#imageasses-" + i).css("display", "none")
    $("#imageasses2-" + i).show()


}
function imageasset1(i) {
    $("#imageasses2-" + i).css("display", "none")
    $("#imageasses-" + i).show()
}
function imageasset4(i) {
    $("#imageasses3-" + i).css("display", "none")
    $("#imageasses4-" + i).show()
}
function imageasset3(i) {
    $("#imageasses4-" + i).css("display", "none")
    $("#imageasses3-" + i).show()
}
function imageasset6(i) {
    $("#imageasses5-" + i).css("display", "none")
    $("#imageasses6-" + i).show()
}
function imageasset5(i) {
    $("#imageasses6-" + i).css("display", "none")
    $("#imageasses5-" + i).show()
}
function imageasset8(i) {
    $("#imageasses7-" + i).css("display", "none")
    $("#imageasses8-" + i).show()
}
function imageasset7(i) {
    $("#imageasses8-" + i).css("display", "none")
    $("#imageasses7-" + i).show()
}
function imageasset10(i) {
    $("#imageasses9-" + i).css("display", "none")
    $("#imageasses10-" + i).show()
}
function imageasset9(i) {
    $("#imageasses10-" + i).css("display", "none")
    $("#imageasses9-" + i).show()
}
function imageasset12(i) {
    $("#imageasses11-" + i).css("display", "none")
    $("#imageasses12-" + i).show()
}
function imageasset11(i) {
    $("#imageasses12-" + i).css("display", "none")
    $("#imageasses11-" + i).show()
}
function imageasset14(i) {
    $("#imageasses13-" + i).css("display", "none")
    $("#imageasses14-" + i).show()
}
function imageasset13(i) {
    $("#imageasses14-" + i).css("display", "none")
    $("#imageasses13-" + i).show()
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
