var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteSection(sectionId) {
    if (confirm('Are you sure to delete this branch ?')) {
        url = $url + 'masterdata/section/delete-section'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { sectionId: sectionId },
            success: function (data) {
                if (data.status) {
                    $("#section-" + sectionId).hide();
                }
            }
        });
    }
}