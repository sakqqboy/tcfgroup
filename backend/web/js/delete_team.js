var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteTeam(teamId) {
    if (confirm('Are you sure to delete this team ?')) {
        url = $url + 'masterdata/team/delete-team'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { teamId: teamId },
            success: function (data) {
                if (data.status) {
                    $("#team-" + teamId).hide();
                }
            }
        });
    }
}