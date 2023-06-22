var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/backend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function deleteMemberType(memberTypeId) {
    if (confirm('Are you sure to delete this member type ?')) {
        url = $url + 'member/default/delete-member-type'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: { memberTypeId: memberTypeId },
            success: function (data) {
                if (data.status) {
                    $("#membertypeid-" + memberTypeId).hide();
                }
            }
        });
    }
}