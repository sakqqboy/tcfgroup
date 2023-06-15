var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;
function findInfo() {
    var branchId = $("#branchId").val();
    url = $url + 'member/default/find-branch-info'
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: url,
        data: { branchId: branchId },
        success: function (data) {
            if (data.status) {
                $("#sectionId").html(data.textSection);
                $("#positionId").html(data.textPosition);
                $("#teamId").html(data.textTeam);
            }
        }
    });
}