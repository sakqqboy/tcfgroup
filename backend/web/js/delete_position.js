var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deletePosition(positionId) {
    if (confirm('Are you sure to delete this position ?')) {
        url = $url + 'masterdata/position/delete-position'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { positionId: positionId },
            success: function (data) {
                if (data.status) {
                    $("#position-" + positionId).hide();
                }
            }
        });
    }
}