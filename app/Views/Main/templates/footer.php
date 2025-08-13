<div id="creator" class="creator">
    <p>&copy; 2020 | Created by <span>Iqbal Taufiq</span></p>
  </div>
  <script>

    //------------------------Sending and Receiving Messages Start------------------------
    window.onload = function() {//Function to load messages right away whenever you change chatbox
      fetch_message();
      activeStatus();
    };

    function chatUpdates() {
    fetch_message();
    getUsersActiveStatus();
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
              $('#message_text').val('');
              fetch_message();
              setTimeout(function() {
              $('#chat-area').scrollTop($('#chat-area')[0].scrollHeight);

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

            jsonData.forEach(function(message) {
              if(message.sender == '<?= session()->get('loggedUser') ?>'){
                container.append(`
                  <div id="chat-template" class="your-chat">
                    <p class="your-chat-balloon">${message.message}</p>
                    <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> ${message.created_at} </p>
                  </div>
                `);
              } else {
                  container.append(`
                    <div id="chat-template" class="friends-chat">
                      <div class="profile friends-chat-photo">
                        <img src="<?php echo base_url('public/assets/images/ava2.jpg'); ?>" alt="">
                      </div>
                      <div class="friends-chat-content">
                        <p class="friends-chat-name"><?= isset($friend) ? htmlspecialchars($friend['first_name']) : 0 ?> <?= isset($friend) ? htmlspecialchars($friend['last_name']) : 0 ?></p>
                        <p class="friends-chat-balloon">${message.message}</p>
                        <h5 class="chat-datetime">${message.created_at}</h5>
                      </div>
                    </div>
                `);
              }
                    
            });

            //-----------------------------User Typing...-----------------------------
            var userData = response.user_log;
            if(userData.is_typing == 1){
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
            } else if (userData.is_typing == 0){
                if($('#friend_typing').length) {
                  $('#friend_typing').remove();
                }
            }
            
            $('#chat-area').scrollTop($('#chat-area')[0].scrollHeight);
          },
          
          error: function(error){
          }
        });
        
    }
    //------------------------Sending and Receiving Messages End------------------------

    //------------------------When user is typing start------------------------

    function user_typing(e){
      const user_id = <?= session('loggedUser') ?>;
      let is_typing = (e === 'focus') ? 1 : 0;
      $.ajax({
        type: "POST",
        url: "messages/is_typing",
        data:{
          is_typing: is_typing,
          user_id: user_id

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

    function getUsersActiveStatus(){
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
          jsonData.forEach(function(minutes) {
            if(minutes.minutes_idle < 5){
              if($('#friends-inactive-status' + minutes.user_admin_id).length){
                $('#friends-inactive-status' + minutes.user_admin_id).remove();
              }
              if($('#friends-active-status' + minutes.user_admin_id).length){
                $('#friends-active-status' + minutes.user_admin_id).remove();
                $('#friends' + minutes.user_admin_id).append(`
                <span id="friends-active-status` +  minutes.user_admin_id + `" class="badge active-badge">A</span>
                `);
              } else {
                $('#friends' + minutes.user_admin_id).append(`
                <span id="friends-active-status` +  minutes.user_admin_id + `" class="badge active-badge">A</span>
                `);
              }
            } else {
              if($('#friends-active-status' + minutes.user_admin_id).length > 0){
                $('#friends-active-status' + minutes.user_admin_id).remove();
              }
              if($('#friends-inactive-status' + minutes.user_admin_id).length){
                $('#friends-inactive-status' + minutes.user_admin_id).remove();
                $('#friends' + minutes.user_admin_id).append(`
                <span id="friends-inactive-status` +  minutes.user_admin_id + `" class="badge inactive-badge">` +  minutes.minutes_idle + `m</span>`);
              } else {
                $('#friends' + minutes.user_admin_id).append(`
                <span id="friends-inactive-status` +  minutes.user_admin_id + `" class="badge inactive-badge">` + minutes.minutes_idle + `m</span>
                `);
              }
            }
          });
          

          
        },
        error: function(error){

        }
        });
    }

  //   function getCurrentTimestamp() {
  //   const now = new Date();

  //   const year = now.getFullYear();
  //   const month = String(now.getMonth() + 1).padStart(2, '0');
  //   const day = String(now.getDate()).padStart(2, '0');

  //   const hours = String(now.getHours()).padStart(2, '0');
  //   const minutes = String(now.getMinutes()).padStart(2, '0');
  //   const seconds = String(now.getSeconds()).padStart(2, '0');

  //   return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
  // }

      
  </script>
    <!--
    <script src="<?php echo base_url('public/assets/js/jquery-3.3.1.min.js"'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/bootstrap.min.js"'); ?>"></script> -->
</body>
</html>