

  <script>
    let initialScroll = false;
    let previous_last_id = 0;

    let isFriendInfoToggled = false;
    let isProfileInfoToggled = false;

    $(function() {
      fetch_message();       // Load messages
      activeStatus();
    });

    function chatUpdates() {
    fetch_message();
    getUsersStatus();
    }

    function activeStatus(){
      updateTimestamp();
    }

    setInterval(chatUpdates, 1000);
    setInterval(activeStatus, 5000);

    function send_message(e){
      const senderId = <?= session()->get('loggedUser') ?>;
      const receiverId = <?= isset($friend)? $friend['user_admin_id'] : 0 ?>;
      const message_text = $('#message_text');
      if(message_text.val().trim()){
        // alert(message_text.val());
        $.ajax({
          type: "POST",
          url: "messages/send",
          data:{
            senderId: senderId,
            receiverId: receiverId,
            message: message_text.val()
          },
          success: function(data){
            message_text.blur();
              $('#message_text').val('');
              fetch_message();
              setTimeout(function() {
              autoScrollIfAtBottom(71);

            }, 200);
          },
          error: function(error){
            console.log(error);
          }
        });
      }
    }

    function fetch_message(){
      // chatAreaHeight = $('#chat-area').height();
      const senderId = <?= session()->get('loggedUser') ?>;
      const receiverId = <?= isset($friend)? $friend['user_admin_id'] : 0 ?>;
      const message_text = $('#message_text');
        $.ajax({
          type: "POST",
          url: "messages/fetch",
          data:{
            senderId: senderId,
            receiverId: receiverId,
            action: "get_data"
          },
          success: function(response){
            var jsonData = response.message_log;
            const container = $('#chat-area');
            container.empty();
            const seen = `glyphicon-ok-sign`;
            const not_seen = `glyphicon-ok-circle`;
            let last_id = 0;

            jsonData.forEach(function(message) {
              if(message.sender == '<?= session()->get('loggedUser') ?>'){
                if(message.is_seen == '1'){
                  container.append(`
                    <div id="chat-template${message.messages_id}" class="your-chat">
                      <p class="your-chat-balloon fetch-chat" onmouseover="messageTimestamp('${message.created_at}', ${message.messages_id})" onmouseout="messageTimestampRemove(${message.messages_id})">${message.message}<span class="glyphicon glyphicon-ok-sign"></span></p>
                    </div>
                  `);
                } else {
                  container.append(`
                    <div id="chat-template${message.messages_id}" class="your-chat">
                      <p class="your-chat-balloon fetch-chat" onmouseover="messageTimestamp('${message.created_at}', ${message.messages_id})" onmouseout="messageTimestampRemove(${message.messages_id})">${message.message}<span class="glyphicon glyphicon-ok-sign"></span></p>
                    </div>
                  `);
                }
                
              } else {
                  container.append(`
                    <div id="chat-template" class="friends-chat">
                      <div class="profile friends-chat-photo">
                        <img src="<?php echo base_url('public/assets/images/ava2.jpg'); ?>" alt="">
                      </div>
                      <div id="chat-template${message.messages_id}" class="friends-chat-content">
                        <p class="friends-chat-name"><?= isset($friend) ? htmlspecialchars($friend['first_name']) : 0 ?> <?= isset($friend) ? htmlspecialchars($friend['last_name']) : 0 ?></p>
                        <p class="friends-chat-balloon fetch-chat" onmouseover="messageTimestamp('${message.created_at}', ${message.messages_id})" onmouseout="messageTimestampRemove(${message.messages_id})">${message.message}</p>
                      </div>
                    </div>
                `);
              }
              last_id = message.messages_id;
                    
            });

            //-----------------------------User Typing...-----------------------------
            var userData = response.user_log;
            if(userData.is_typing == 1 && $('#friends-active-status' + <?= isset($friend)? $friend['user_admin_id'] : 0 ?>).length){
              if(userData.is_typing_to == <?= session()->get('loggedUser') ?>){
                if($('#friend_typing').length) {
                  $('#chat-area').append(`
                      <div id="friend_typing" class="friends-chat">
                        <div class="profile friends-chat-photo">
                          <img src="<?php echo base_url('public/assets/images/ava2.jpg'); ?>" alt="">
                        </div>
                        <div class="friends-chat-content">
                          <p class="friends-chat-name"><?= isset($friend) ? htmlspecialchars($friend['first_name']) : 0 ?> <?= isset($friend) ? htmlspecialchars($friend['last_name']) : 0 ?></p>
                          <p class="friends-chat-balloon">Typing...</p>
                        </div>
                      </div>
                  `);
                } else {
                  $('#chat-area').append(`
                      <div id="friend_typing" class="friends-chat">
                        <div class="profile friends-chat-photo">
                          <img src="<?php echo base_url('public/assets/images/ava2.jpg'); ?>" alt="">
                        </div>
                        <div class="friends-chat-content">
                          <p class="friends-chat-name"><?= isset($friend) ? htmlspecialchars($friend['first_name']) : 0 ?> <?= isset($friend) ? htmlspecialchars($friend['last_name']) : 0 ?></p>
                          <p class="friends-chat-balloon"><?= isset($friend) ? htmlspecialchars($friend['first_name']) : 0 ?> <?= isset($friend) ? htmlspecialchars($friend['last_name']) : 0 ?> is Typing...</p>
                        </div>
                      </div>
                  `);
                }
                // $('#chat-area').scrollTop($('#chat-area')[0].scrollHeight);
                // $("#chat-area").animate({ scrollTop: $('#chat-area')[0].scrollHeight }, 'fast');
                autoScrollIfAtBottom(71)
              }
              
            } else if (userData.is_typing == 0){
                if($('#friend_typing').length) {
                  $('#friend_typing').remove();
                }
            }
            scrollOnce();
            if(previous_last_id != last_id){
              autoScrollIfAtBottom(71);
              previous_last_id = last_id;
            }

            

          },
          
          error: function(error){
          }
        });
        
    }
    //------------------------Sending and Receiving Messages End------------------------

    //------------------------Showing timestamp on hover------------------------

    function messageTimestamp(timestamp, messages_id){

      if($(`#chat-datetime${messages_id}`).length > 0){
        $(`#chat-datetime${messages_id}`).remove();
      }

      $(`#chat-template${messages_id}`).append(`
         <p id="chat-datetime${messages_id}" class="chat-datetime">${timestamp}</p>
      `);

    }

    function messageTimestampRemove(messages_id){

      if($(`#chat-datetime${messages_id}`).length > 0){
        $(`#chat-datetime${messages_id}`).remove();
      }
    }

    //------------------------When user is typing start------------------------

    function user_typing(e){
      const user_id = <?= session('loggedUser') ?>;
      let friend_id = <?= isset($friend)? $friend['user_admin_id'] : 0 ?>;
      let is_typing = (e === 'focus') ? 1 : 0;
      $.ajax({
        type: "POST",
        url: "messages/is_typing",
        data:{
          is_typing: is_typing,
          user_id: user_id,
          friend_id: friend_id

        },
        success: function(data){
          
        },
        error: function(error){

        }
        });
    }

    //------------------------When user is typing end------------------------

    //------------------------Getting current timestamp------------------------

    function updateTimestamp(){
      const user_id = <?= session()->get('loggedUser') ?>;
      // users.forEach(function(user_id){
      //   console.log(user_id.user_admin_id);
      // });
      
      $.ajax({
        type: "POST",
        url: "messages/update_time",
        data:{
          user_id: user_id
        },
        success: function(data){
        },
        error: function(error){

        }
        });
    }

    function getUsersStatus(){
      const user_id = <?= session()->get('loggedUser') ?>;
      const users_id = <?= isset($users) ? json_encode($users) : '[]' ?>;
      // users.forEach(function(user_id){
      //   console.log(user_id.user_admin_id);
      // });
      
      $.ajax({
        type: "POST",
        url: "messages/idle_time",
        data:{
          user_id: user_id,
          users_id: users_id,
          action: "get_data"
        },
        success: function(data){
          var jsonData = data;

          jsonData.latest_messages.forEach(function(friend_details){
            if(friend_details.receiver == <?= session()->get('loggedUser') ?>){
              if(friend_details.message != null || friend_details.files != null){
                if($('#user-information-latest-message' + friend_details.sender).length){
                  $('#user-information-latest-message' + friend_details.sender).remove();
                }
                if(friend_details.is_seen == 0){
                  $('#user-information' + friend_details.sender).append(`
                    <span id="user-information-latest-message` + friend_details.sender + `" class="friends-message-not-seen"><b>${friend_details.message}</b></span>
                  `);
                } else {
                  $('#user-information' + friend_details.sender).append(`
                    <span id="user-information-latest-message` + friend_details.sender + `" class="friends-message">${friend_details.message}</span>
                  `);
                }
                
              }
            }
          });
          jsonData.unread_messages.forEach(function(friend_details) {
            if(friend_details.receiver == <?= session()->get('loggedUser') ?>){
              if(friend_details.unread_messages > 0){
                if($("#unread-messages-count" + friend_details.sender).length){
                  $("#unread-messages-count" + friend_details.sender).remove();
                }
                $('#friends' + friend_details.sender).append(`
                <span id="unread-messages-count${friend_details.sender}" class="badge notif-badge profile-unread-message">${friend_details.unread_messages}</span>
                `);
              }
            }
          });

          jsonData.active_minutes.forEach(function(friend_details) {
            if(friend_details.minutes_idle < 5){
              if($('#friends-inactive-status' + friend_details.active_user_admin_id).length){
                $('#friends-inactive-status' + friend_details.user_admin_id).remove();
              }
              if($('#friends-active-status' + friend_details.user_admin_id).length){
                $('#friends-active-status' + friend_details.user_admin_id).remove();
              }
              $('#friends' + friend_details.user_admin_id).append(`
              <span id="friends-active-status${friend_details.user_admin_id}" class="badge active-badge profile-status">A</span>
              `);
            } else {
              if($('#friends-active-status' + friend_details.user_admin_id).length > 0){
                $('#friends-active-status' + friend_details.user_admin_id).remove();
              }
              if($('#friends-inactive-status' + friend_details.user_admin_id).length){
                $('#friends-inactive-status' + friend_details.user_admin_id).remove();
              }
                if(friend_details.minutes_idle < 60){
                  $('#friends' + friend_details.user_admin_id).append(`
                  <span id="friends-inactive-status${friend_details.user_admin_id}" class="badge inactive-badge profile-status">${friend_details.minutes_idle}m</span>`);
                } else if(friend_details.minutes_idle > 59 && friend_details.minutes_idle < 1440){
                  $('#friends' + friend_details.user_admin_id).append(`
                  <span id="friends-inactive-status${friend_details.user_admin_id}" class="badge inactive-badge profile-status">` +  Math.floor(friend_details.minutes_idle / 60) + `h</span>`);
                } else if(friend_details.minutes_idle >= 1440){
                  $('#friends' + friend_details.user_admin_id).append(`
                  <span id="friends-inactive-status${friend_details.user_admin_id}" class="badge inactive-badge profile-status">` +  Math.floor((friend_details.minutes_idle / 60)/12) + `d</span>`);
                }
            }
          });
          

          
        },
        error: function(error){

        }
        });
    }

    //-------------------------------Autoscroll function--------------------------------
    function autoScrollIfAtBottom(threshold) {
      const $container = $("#chat-area");
      const scrollThreshold = threshold; // Pixels from bottom to consider "at bottom"

      // Check if user is near the bottom
      const isNearBottom = $container.scrollTop() + $container.innerHeight() + scrollThreshold >= $container[0].scrollHeight;

      // Auto-scroll only if at bottom
      if (isNearBottom) {
        $container.animate({ scrollTop: $container[0].scrollHeight }, 'fast');
      }
    }

    function scrollOnce(){
      if(!initialScroll){
        $('#chat-area').scrollTop($('#chat-area')[0].scrollHeight);
        initialScroll = true;
      }
    }

    // ----------------------------Send Files-----------------------------
    function selectFiles(e){
      if(e == "files"){
        $('#file-input').click();
      } else if(e == "images"){
        $('#image-input').click();
      }
    }

    // function sendFiles(input){
    //   const user_id = <?= session()->get('loggedUser'); ?>;
    //   const friend_id = <?= isset($friend)? $friend['user_admin_id'] : 0 ?>;
    //   const files = input.files;
    //   var formData = new FormData();

    //   console.log(6);
    //   console.log(friend_id);

    //   $.each(files, function(i, file) {
    //     formData.append('files', file);
    //   }); 
      
    //   $.ajax({
    //     type: "POST",
    //     url: "messages/upload",
    //     data:{
    //       user_id: user_id,
    //       friend_id: friend_id,
    //       formData: formData
    //     },
    //     processData: false,
    //     contentType: false,

    //     success: function(response){
    //       var here = response;
    //       console.log(here);
    //       console.log('yes');
    //     },
    //     error: function(error){
    //       console.log('error: ')
    //     }
    //     });
    // }

    //-----------------------------------Chat Info---------------------------------
    function chatInfo(){
      isFriendInfoToggled = !isFriendInfoToggled

      // console.log('yes');
      if(isFriendInfoToggled){
        document.querySelector('.app').style.removeProperty('grid-template-columns');
        document.querySelector('.app').style.gridTemplateColumns = '0.15fr 0.7fr 1.5fr 0.5fr';

        document.querySelector('.main-right-info').style.display = 'inline';
        document.querySelector('.main-right-info').style.visibility = 'visible';

      } else if (!isFriendInfoToggled){
        document.querySelector('.app').style.removeProperty('grid-template-columns');
        document.querySelector('.app').style.gridTemplateColumns = '0.15fr 0.7fr 2fr';

        document.querySelector('.main-right-info').style.display = 'none';
        document.querySelector('.main-right-info').style.visibility = 'hidden';
      }
      
    }  

    function profileInfo(){
      isProfileInfoToggled = !isProfileInfoToggled

      // console.log('yes');
      if(isProfileInfoToggled){
        document.querySelector('.main-left').style.removeProperty('grid-template-columns');
        document.querySelector('.main-left').style.gridTemplateRows = '0.9fr 2fr 4.2fr';

        document.querySelector('.profile-information').style.display = 'inline';
        document.querySelector('.profile-information').style.visibility = 'visible';

      } else if (!isProfileInfoToggled){
        document.querySelector('.main-left').style.removeProperty('grid-template-columns');
        document.querySelector('.main-left').style.gridTemplateRows = '0.9fr 6.2fr';

        document.querySelector('.profile-information').style.display = 'none';
        document.querySelector('.profile-information').style.visibility = 'hidden';
      }
      
    } 
  </script>
    <!--
    <script src="<?php echo base_url('public/assets/js/jquery-3.3.1.min.js"'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/bootstrap.min.js"'); ?>"></script> -->
</body>
</html>