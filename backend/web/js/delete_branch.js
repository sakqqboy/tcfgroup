var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteBranch(branchId) {
    if (confirm('Are you sure to delete this branch ?')) {
        url = $url + 'masterdata/branch/delete-branch'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { branchId: branchId },
            success: function (data) {
                if (data.status) {
                    $("#branch-" + branchId).hide();
                }
            }
        });
    }
}