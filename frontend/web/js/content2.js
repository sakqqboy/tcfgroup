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