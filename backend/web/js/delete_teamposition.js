var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteTeamPosition(id) {
    if (confirm('Are you sure to delete this team position ?')) {
        url = $url + 'masterdata/team-position/delete-team-position'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { id: id },
            success: function (data) {
                if (data.status) {
                    $("#id-" + id).hide();
                }
            }
        });
    }
}