var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteContentBranch(contentBranchId) {
    if(confirm('Are you sure to delete this content ?')) {
        url = $url + 'content/default/delete-content-branch'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { contentBranchId:contentBranchId},
            success: function(data) {
                if(data.status) {
                    $("#contentbranch-" + contentBranchId).hide();
                }
            }  
        });
    }
}