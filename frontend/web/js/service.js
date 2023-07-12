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
