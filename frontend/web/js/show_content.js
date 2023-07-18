var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/frontend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function showContent(partId) {
    var switches = $("#switch-" + partId).val();
    if(switches == 1) {
        $("#switch-" + partId).val(0);
    } else {
        $("#switch-" + partId).val(1);
    }

    url = $url + 'site-country/update-show-content'
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: url,
        data: {
            switches: switches,
            partId: partId,
           
        },
        success: function (data) {
            if(data.status) {
                if(switches == 0) {
                    $("#"+ partId).css("opacity", "0.3");
                } else {
                    $("#"+ partId).css("opacity", "1");
                }
            }
        }
    });
}

var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/frontend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;

function showContentBranch(partId, branchId) {
    var switches = $("#switch-" + partId).val();
    if(switches == 1) {
        $("#switch-" + partId).val(0);
    } else {
        $("#switch-" + partId).val(1);
    }

    url = $url + 'site-country/update-show-content-branch'
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: url,
        data: {
            switches: switches,
            partId: partId,
            branchId: branchId,
           
        },
        success: function (data) {
            if(data.status) {
                if(switches == 0) {
                    $("#"+ partId).css("opacity", "0.3");
                } else {
                    $("#"+ partId).css("opacity", "1");
                }
            }
        }
    });
}