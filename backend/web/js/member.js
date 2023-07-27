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

function saveMemberType(memberId, memberTypeId) {
    if($( "#checkbox-" + memberTypeId + "-" + memberId ).prop("checked") == true){
        var fag = 1;
    } else {
        var fag = 0;
    }
    url = $url + 'member/default/save-member-check'
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: url,
        data: { 
            memberId: memberId, 
            memberTypeId: memberTypeId, 
            fag: fag
        },
        success: function (data) {}
    });
}