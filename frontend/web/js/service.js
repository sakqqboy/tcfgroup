function nextContent(x) {

    var totalContent = $("#total-background").val();
    if (x == totalContent) {
        var next = 1;
    } else {
        var next = x + 1;
    }


    $("#background-" + x).hide();
    $("#background-" + next).fadeIn();
}

function previousContent(y) {
    var totalContent = $("#total-background").val();
    var prev = (y - 1);
    if (y == 1) {
        var prev = totalContent;
    } else {
        var prev = y - 1;
    }
    $("#background-" + y).hide();
    $("#background-" + prev).fadeIn();
}

function servicesPart3(i) {
    var a = 0;
    while (a < 4) { //การซ่อนข้อความที่ไม่ต้องการให้แสดงโดยใช้ while
        $("#newservices-" + a).css("display", "none");
        a++;
    }
    $("#newservices-" + i).show();
}
