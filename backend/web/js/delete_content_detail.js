var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteContentDetail(contentDetailId) {
    if(confirm('Are you sure to delete this content detail ?')) {
        url = $url + 'content/default/delete-content-detail'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { contentDetailId:contentDetailId},
            success: function(data) {
                if(data.status) {
                    $("#content-detail-" + contentDetailId).hide();
                }
            }  
        });
    }
}