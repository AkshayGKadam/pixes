$chat = $(".chat");
$profile = $(".user-profile");

$(window).on('hashchange', function (e) {
    getchatwindow();
});

$(document).ready(function() {
    getchatwindow();
    define_drag();
});

var lastmsgtime = "";
var first_scroll = false;

function getchatwindow()
{
    first_scroll = false;
    var hashvalue = window.location.hash.substring(1);
    
    if(hashvalue != "")
    {
        $.ajax({
          enctype: 'multipart/form-data',
          url: base_url + "get-chat-window",
          data: {'chatcode':hashvalue},
          type: 'POST',
          success: function (data) {
              $('#custom-loader').css('width','0');
              
              var myObj = JSON.parse(data);

              if(myObj.lastmsgtime != lastmsgtime)
              {
                  $('#message-box').html(myObj.chat);
        
                  lastmsgtime = myObj.lastmsgtime;

                  getHeaderInfo();
                            
                  $chat.fadeIn();
                  $chat.addClass("chat--show");
              }
          }
      });
    }
    else{
        $chat.removeClass("chat--show");
        $profile.removeClass("user-profile--show");
    }
}

function getNewMsg()
{
    if(!first_scroll && $(".chat__content")[0].scrollHeight > 0)
    {
      $(".chat__content").scrollTop($(".chat__content")[0].scrollHeight);
      first_scroll = true;
      define_drag();
    }

    var hashvalue = window.location.hash.substring(1);

    $.ajax({
      enctype: 'multipart/form-data',
      url: base_url + "get-new-msg",
      data: {'chatcode':hashvalue,'lastmsgtime':lastmsgtime},
      type: 'POST',
      success: function (data) {
          $('#custom-loader').css('width','0');
          
          var myObj = JSON.parse(data);

          if(myObj.lastmsgtime != lastmsgtime)
          {
              $('#message-box').append(myObj.chat);

              $(".chat__content").scrollTop($(".chat__content")[0].scrollHeight);
    
              lastmsgtime = myObj.lastmsgtime;
          }
      }
  });
}

$('#btnsubmit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    // $('#btnsubmit').focus();
    newMessage();
    return false;
  }
});

$(document).ready(function() {
  setInterval(function(){
    if(window.location.hash.substring(1) != "") {
      getNewMsg();
    }
  },1000);
});

function newMessage() {

  var hashvalue = window.location.hash.substring(1);
  var message = $("#message").val();
	var reply_id = $("#reply-id").val();

  $.ajax({
    enctype: 'multipart/form-data',
    url: base_url + "send-new-msg",
    data: {'chatcode':hashvalue,'message':message,"reply_id":reply_id},
    type: 'POST',
    success: function (data) {
      $('#message').val('');
      $('#message').focus();
      first_scroll = false;
      $('#reply-div').addClass('d-none');
      $('#reply-div').html('');
      $('#reply-id').val(0);
    }
  });
};

function getHeaderInfo()
{
  var hashvalue = window.location.hash.substring(1);

  $.ajax({
    enctype: 'multipart/form-data',
    url: base_url + "get-header",
    data: {'chatcode':hashvalue},
    type: 'POST',
    success: function (data) {
      $('#chat-header').html(data);
    }
  });
}
  
  function chatMobile() {
    $chat.addClass("chat--mobile");
  }
  
  function chatDesktop() {
    $chat.removeClass("chat--mobile");
  }
  
  function profileToogleOnLarge() {
    $profile.addClass("user-profile--large");
  }
  
  function profileExtraLarge() {
    $profile.removeClass("user-profile--large");
  }
  
  /* ===================================
      Events
  ====================================== */
  
  
  $(".chat__previous").click(function () {
    $chat.removeClass("chat--show");
  });
  
  $(".chat__details").click(function () {
    var hashvalue = window.location.hash.substring(1);

    $.ajax({
      enctype: 'multipart/form-data',
      url: base_url + "get-profile-details",
      data: {'chatcode':hashvalue},
      type: 'POST',
      success: function (data) {
        $('#user-profile').html(data);
        $profile.fadeIn();
        $profile.addClass("user-profile--show");
        $chat.removeClass('col-md-9 col-lg-8 col-xl-9');
        $chat.addClass('col-md-8 col-lg-7 col-xl-6');
      }
    });
  });
  
  $(".user-profile__close").click(function () {
    $profile.removeClass("user-profile--show");
    $chat.removeClass('col-md-8 col-lg-7 col-xl-6');
    $chat.addClass('col-md-9 col-lg-8 col-xl-9');
  });

  // Drag Event
  
  let drag, animInterval;
  
  function define_drag() {
    var slides = document.getElementsByClassName("drag-div");
    for (var i = 0; i < slides.length; i++) {
        [drag] = Draggable.create(slides[i], {
        bounds: {
            left: 4,
            width: "10rem" },
    
        type: 'x',
        onDrag() {
            const percent = this.x / this.maxX;
            const completedOpacity = Math.pow(percent, 4);
        },
        onDragEnd(event) {
            const isSlideCompleted = this.x > this.maxX * 0.4;
            const destinationX = 0;
            const duration = isSlideCompleted ? .2 : .5;
            const toCompleteOpacity = isSlideCompleted ? 0 : 1;
            const completedOpacity = isSlideCompleted ? 1 : 0;
            const ease = isSlideCompleted ? '' : 'back.out(1.05)';

            var html = '<span class="reply-container"><i class="fa fa-close" onclick="hide_send_reply()"></i>'+$(this.target).attr('data-msg')+'</span>';
            make_reply($(this.target).attr('data-id'),html);
            
            TweenMax.to(this.target, duration, {
            x: destinationX,
            ease });
        } 
        });
    }
  }

  function hide_send_reply()
  {
      $('#reply-div').addClass('d-none');
      $('#reply-div').html('');
      $('#reply-id').val(0);
  }

  function dobleclick_to_reply(li)
  {
    var chat_bubble = $(li);
    var html = '<span class="reply-container"><i class="fa fa-close" onclick="hide_send_reply()"></i>'+chat_bubble.attr('data-msg')+'</span>';
    make_reply(chat_bubble.attr('data-id'),html);
  }

  function make_reply(reply_id,html)
  {
      $('#reply-id').val(reply_id);
      $('#reply-div').html(html);
      $('#reply-div').removeClass('d-none');
      $('#message').focus();
  }

  // right click event listner  

  // video call js code
  
  var isadmin = false;
  
  $('#make-call').on('click', function(e){

    $('#main-chat-window').addClass("d-none");
    $('#Meeting-main-div').removeClass("d-none");

    const domain = 'meet.jit.si';
    var disable_Remote_Mute = false;
    var disable_Kick = false;
    var meetings_id = 13;
    // var liveRoomName = "<?php //echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name').''?>";
    var liveRoomName = "abcdefghijk";
    var liveemail = "abc@gmail.com";
    var liveDisplayName = "video call";
    const options = {
      roomName: liveRoomName,
      configOverwrite: { prejoinPageEnabled: false, remoteVideoMenu: { disableKick: disable_Kick, }, disableRemoteMute: disable_Remote_Mute, disableProfile: true, disableInviteFunctions: true, enableWelcomePage: false, enableClosePage: false,deeplinking : { disabled : true } },
      interfaceConfigOverwrite: { CLOSE_PAGE_GUEST_HINT: false, SHOW_PROMOTIONAL_CLOSE_PAGE: false, SHOW_CHROME_EXTENSION_BANNER: false, HIDE_INVITE_MORE_HEADER: true, SETTINGS_SECTIONS: [ 'devices', 'language', 'moderator', 'profile' ], SHARING_FEATURES: [], TOOLBAR_BUTTONS: [ 'microphone', 'camera', 'closedcaptions', 'desktop', 'fullscreen',
      'fodeviceselection', 'profile', 'chat',
      'etherpad', 'sharedvideo', 'settings', 'raisehand',
      'videoquality', 'filmstrip', 'stats', 'shortcuts',
      'tileview', 'select-background', 'download', 'mute-everyone', 'mute-video-everyone', 'security' ] },
      userInfo: {
        email: liveemail,
        displayName: liveDisplayName
      },
      parentNode: document.querySelector('#meetting')
    };

    const api = new JitsiMeetExternalAPI(domain, options);
  
    api.addListener('endpointTextMessageReceived', function(event) {
      console.log(event.data.eventData.text);
      if(event.data.eventData.text == 'leave'){
        api.dispose();
        $('#main-chat-window').removeClass("d-none");
        $('#Meeting-main-div').addClass("d-none");
      }
    });

    $(document).on('click', '#leave', function(e){
      e.preventDefault();
      var participants = api.getParticipantsInfo();
      $(participants).each(function(key, value){
        api.executeCommand('sendEndpointTextMessage', value.participantId, 'leave');
      });
      api.dispose();

      $('#main-chat-window').removeClass("d-none");
      $('#Meeting-main-div').addClass("d-none");
   });

    // api.addEventListener('videoConferenceJoined', function () {
    //   $('#leave').removeClass("d-none");
    // });
 });

