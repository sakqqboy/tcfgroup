var $baseUrl = window.location.protocol + "/ / " + window.location.host;
if (window.location.host == 'localhost') {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/tcfgroup/frontend/web/';
} else {
    $baseUrl = window.location.protocol + "//" + window.location.host + '/';
}
$url = $baseUrl;


function newContact() {
    var hearUs = $("#hearus").val();
    //var typeperson = $("input[name='typeperson']:checked").val();
    var countryName = $("#countryname").val();
    var fullName = $("#fullname").val();
    var birthdate = $("#birthdate").val();
    var address = $("#address").val();
    var cityName = $("#cityname").val();
    var postalCode = $("#postalcode").val();
    var email = $("#email").val();
    var phoneNumber = $("#phonenumber").val();
    var image = $("#image").val();

    canSave = 1;
    if(hearUs == '' || countryName == '' || fullName == '' || birthdate == '' || address == '' || cityName == '' || postalCode == '' || email == '' || phoneNumber == '' || image == '') {
        canSave = 0;
    }

    if(canSave == 1){
        url = $url + 'contact-us/save-contact'
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: url,
            data: {
                hearus: hearUs,
                countryname: countryName,
                fullname: fullName,
                birthdate: birthdate,
                address: address,
                cityname: cityName,
                postalcode: postalCode,
                email: email,
                phonenumber: phoneNumber,
                image : image,
            },
            success: function (data) {
                if (data.status) {
                    //ให้ alert ว่า your request was successful  และ เคลียร์ทุกช่องที่กรอกให้ว่าง
                    alert('Your request was successful !');
                    $("#hearus").val('');
                    //$("input[name='typeperson']").prop('checked', false);
                    $("#countryname").val('');
                    $("#fullname").val('');
                    $("#birthdate").val('');
                    $("#address").val('');
                    $("#cityname").val('');
                    $("#postalcode").val('');
                    $("#email").val('');
                    $("#phonenumber").val('');
                    $("#image").val('');
                }
            }
        });
    } else {
        alert('Please enter your contact !');
    }
}