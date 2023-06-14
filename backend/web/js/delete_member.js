var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteMember(memberId) {
    if (confirm('Are you sure to delete this member ?')) {
        url = $url + 'member/default/delete'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { memberId: memberId },
            success: function (data) {
                if (data.status) {
                    $("#memberId-" + memberId).hide();
                }
            }
        });
    }
}