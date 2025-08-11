<div id="creator" class="creator">
    <p>&copy; 2020 | Created by <span>Iqbal Taufiq</span></p>
  </div>
  <script>
    setInterval(fetch_message, 1000);


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
            fetch_message()
          },
          error: function(error){
            console.log(error);
          }
        });
      }
    }

    function fetch_message(){
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
            const jsonData = response;
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

            
            // console.log("First message content:", response[0].message);
            // console.log("First message content:", response[1].message);
            // console.log("First message content:", response[2].message);
          },
          error: function(error){
          }
        });
    }

    
  </script>
    <!--
    <script src="<?php echo base_url('public/assets/js/jquery-3.3.1.min.js"'); ?>"></script>
    <script src="<?php echo base_url('public/assets/js/bootstrap.min.js"'); ?>"></script> -->
</body>
</html>