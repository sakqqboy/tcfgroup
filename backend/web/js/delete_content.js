var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteContent(contentId) {
    if(confirm('Are you sure to delete this content ?')) {
        url = $url + 'content/default/delete-content'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { contentId:contentId},
            success: function(data) {
                if(data.status) {
                    $("#content-" + contentId).hide();
                }
            }  
        });
    }
}