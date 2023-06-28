var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/frontend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;


function newClient() {
    var country = $("#countryid").val();
    var typeperson = $("input[name='typeperson']:checked").val();
    var company = $("#company").val();
    var name = $("#name").val();
    var position = $("#position").val();
    var email = $("#email").val();
    var phonenumber = $("#phonenumber").val();
    var businesstype = $("#businesstype").val();
    var question = $("#question").val();
    var detail = $("#detail").val();

    url = $url + 'site-country/save-client'
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: url,
        data: {
            country: country,
            typeperson: typeperson,
            company: company,
            name: name,
            position: position,
            email: email,
            phonenumber: phonenumber,
            businesstype: businesstype,
            question: question,
            detail: detail,
        },
        success: function (data) {
            if (data.status) {
                //ให้ alert ว่า your request was successful  และ เคลียร์ทุกช่องที่กรอกให้ว่าง
                alert('Your request was successful');
                $("#countryid").val('');
                $("input[name='typeperson']").prop('checked', false);
                $("#company").val('');
                $("#name").val('');
                $("#position").val('');
                $("#email").val('');
                $("#phonenumber").val('');
                $("#businesstype").val('');
                $("#question").val('');
                $("#detail").val('');
            }
        }
    });
}