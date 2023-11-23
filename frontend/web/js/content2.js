var figure = $(".video").hover(hoverVideo, hideVideo);

function hoverVideo(e) {
    $('video', this).get(0).play();
}

function hideVideo(e) {
    $('video', this).get(0).pause();
}

function selectedbuttom2(i) {
    $("#buttom1-" + i).css("display", "none");
    $("#buttom2-" + i).show();
}
function selectedbuttom1(i) {
    $("#buttom2-" + i).css("display", "none");
    $("#buttom1-" + i).show();
}
function selectedbuttom4(i) {
    $("#buttom3-" + i).css("display", "none");
    $("#buttom4-" + i).show();
}
function selectedbuttom3(i) {
    $("#buttom4-" + i).css("display", "none");
    $("#buttom3-" + i).show();
}
function selectedbuttom6(i) {
    $("#buttom5-" + i).css("display", "none");
    $("#buttom6-" + i).show();
}
function selectedbuttom5(i) {
    $("#buttom6-" + i).css("display", "none");
    $("#buttom5-" + i).show();
}
function selectedbuttom8(i) {
    $("#buttom7-" + i).css("display", "none");
    $("#buttom8-" + i).show();
}
function selectedbuttom7(i) {
    $("#buttom8-" + i).css("display", "none");
    $("#buttom7-" + i).show();
}
function selectedbuttom10(i) {
    $("#buttom9-" + i).css("display", "none");
    $("#buttom10-" + i).show();
}
function selectedbuttom9(i) {
    $("#buttom10-" + i).css("display", "none");
    $("#buttom9-" + i).show();
}
function selectedbuttom12(i) {
    $("#buttom11-" + i).css("display", "none");
    $("#buttom12-" + i).show();
}
function selectedbuttom11(i) {
    $("#buttom12-" + i).css("display", "none");
    $("#buttom11-" + i).show();
}
function selectedbuttom14(i) {
    $("#buttom13-" + i).css("display", "none");
    $("#buttom14-" + i).show();
}
function selectedbuttom13(i) {
    $("#buttom14-" + i).css("display", "none");
    $("#buttom13-" + i).show();
}


