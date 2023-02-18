$( "#btnLogin" ).click(function() {
    // if ($('#login_form').valid()) {
        let form = document.getElementById("login_form");
        let fd = new FormData(form);

        $('#custom-loader').css('width','100%');

        $.ajax({
            enctype: 'multipart/form-data',
            url: base_url + "send-to-login",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                $('#custom-loader').css('width','0');
                
                var myObj = JSON.parse(data);

                if(myObj['status'])
                {
                    window.location.href = base_url;
                }
            }
        });
    // }
});

$( "#btnSignup" ).click(function() {
    // if ($('#signup_form').valid()) {
        let form = document.getElementById("signup_form");
        let fd = new FormData(form);

        $('#custom-loader').css('width','100%');

        $.ajax({
            enctype: 'multipart/form-data',
            url: base_url + "send-to-signup",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                $('#custom-loader').css('width','0');
                
                var myObj = JSON.parse(data);

                if(myObj['status'])
                {
                    window.location.href = base_url;
                }
            }
        });
    // }
});

$( "#btnfollow" ).click(function() {
    // if ($('#signup_form').valid()) {

        let user_code = $("#user_code").val();
        
        $('#custom-loader').css('width','100%');

        $.ajax({
            enctype: 'multipart/form-data',
            url: base_url + "follow-user",
            data: {'user_code':user_code},
            type: 'POST',
            success: function (data) {
                $('#custom-loader').css('width','0');
                
                var myObj = JSON.parse(data);

                if(myObj['status'])
                {
                    $('#btnfollow').html('Followed');
                    $('#btnfollow').removeClass('follow-button');
                    $('#btnfollow').addClass('edit-button');
                    $('#btnfollow').attr('disabled',true);
                }
            }
        });
    // }
});

$( "#btnAcceptFollowRequest" ).click(function() {
    // if ($('#signup_form').valid()) {

        let followid = $("#followid").val();
        
        $('#custom-loader').css('width','100%');

        $.ajax({
            enctype: 'multipart/form-data',
            url: base_url + "accept-follow-request",
            data: {'followid':followid},
            type: 'POST',
            success: function (data) {
                $('#custom-loader').css('width','0');
                
                var myObj = JSON.parse(data);

                if(myObj['status'])
                {
                    location.reload();
                }
            }
        });
    // }
});

$( document ).ready(function() {
    setTimeout(function () {
        $('.splash-screen').addClass('d-none');
        $('.main-div').removeClass('d-none');
    }, 2000);    
});

function fullscreen()
{
    var elem = document.getElementsByTagName("BODY")[0];
    if($("#screen-expand" ).hasClass("d-none"))
    {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) { /* Safari */
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) { /* IE11 */
            document.msExitFullscreen();
        }
        $('#screen-expand').removeClass('d-none');
        $('#screen-compress').addClass('d-none');
    }
    else{
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) { /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE11 */
            elem.msRequestFullscreen();
        }
        $('#screen-expand').addClass('d-none');
        $('#screen-compress').removeClass('d-none');
    }
}