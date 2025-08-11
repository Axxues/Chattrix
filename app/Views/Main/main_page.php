
  <!-- Header End -->
  <div id="app" class="app">

    <!-- LEFT SECTION -->

    <section id="main-left" class="main-left">
      <!-- header -->
      <div id="header-left" class="header-left">
        <span class="glyphicon glyphicon-menu-hamburger hamburger-btn"></span>
        <span class="glyphicon glyphicon-search search-btn"></span>
        <span class="glyphicon glyphicon-option-vertical option-btn"></span>
      </div>

      <!-- chat list -->
      <?php if (!empty($users) && is_array($users)): ?>
      <div id="chat-list" class="chat-list">
        <!-- user lists -->
        <?php foreach($users as $user): ?>
        <div id="friends" class="friends"  onclick="window.location.href='<?= site_url('t/' . $user['user_admin_id']) ?>'" style="cursor: pointer;">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="<?php echo base_url('public/assets/images/ava2.jpg'); ?>" alt="">
          </div>
          
          <div class="friends-credent">
            <!-- name -->
            <span class="friends-name"><?= $user['first_name'] ?> <?= $user['last_name'] ?></span>
            <!-- last message -->
            <span class="friends-message">Crap! I forgot my shoes. Can you bring extra pair for me?</span>
          </div>
          <!-- notification badge -->
          <span class="badge notif-badge">7</span>
        </div>
        <?php endforeach; ?>
      </div>
      <?php else: ?>
        <p>No friends found!</p>
      <?php endif ?>
      <!-- self-profile -->
      <div id="self-info" class="self-info">
        <!-- photo -->
        <div class="profile your-photo">
          <img src="<?php echo base_url('public/assets/images/ava4.jpg'); ?>" alt="">
        </div>
        <!-- name -->
        <h4 class="name your-name">Iqbal Taufiq</h4>
        <!-- setting btn -->
        <span class="glyphicon glyphicon-cog"></span>
      </div>
    </section>



    <!-- RIGHT SECTION -->

    <section id="main-right" class="main-right">
      <?php if(isset($friend)): ?>
      <!-- header -->
      <div id="header-right" class="header-right">
        <!-- profile pict -->
        <div id="header-img" class="profile header-img">
          <img src="<?php echo base_url('public/assets/images/ava2.jpg'); ?>" alt="">
        </div>

        <!-- name -->
        <h4 class="name friend-name"><?= htmlspecialchars($friend['first_name']) ?> <?= htmlspecialchars($friend['last_name']) ?></h4>

        <!-- some btn -->
        <div class="some-btn">
          <span class="glyphicon glyphicon-facetime-video"></span>
          <span class="glyphicon glyphicon-earphone"></span>
          <span class="glyphicon glyphicon-option-vertical option-btn"></span>
        </div>
      </div>

      <!-- chat area -->
      <div id="chat-area" class="chat-area">
        <!-- chat content -->

        <!-- FRIENDS CHAT TEMPLATE -->
        <div id="chat-template" class="friends-chat">
          <div class="profile friends-chat-photo">
            <img src="<?php echo base_url('public/assets/images/ava2.jpg'); ?>" alt="">
          </div>
          <div class="friends-chat-content">
            <p class="friends-chat-name"><?= htmlspecialchars($friend['first_name']) ?> <?= htmlspecialchars($friend['last_name']) ?></p>
            <p class="friends-chat-balloon">Yo Dybala!</p>
            <h5 class="chat-datetime">Sun, Aug 30 | 15:41</h5>
          </div>
        </div>

        
        <!-- YOUR CHAT TEMPLATE -->
        <!-- <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div>
        <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div>
        <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div>
        <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div>
        <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div>
        <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div>
        <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div>
        <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div>
        <div id="chat-template" class="your-chat">
          <p class="your-chat-balloon">'sup</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> Sun, Aug 30 | 15:45</p>
        </div> -->

      </div>

      <!-- typing area -->
      <div id="typing-area" class="typing-area">
        <!-- input form -->
        <input id="message_text" class="type-area" placeholder="Type something...">
        <!-- attachment btn -->
        <div class="attach-btn">
          <span class="glyphicon glyphicon-paperclip file-btn"></span>
          <span class="glyphicon glyphicon-camera"></span>
          <span class="glyphicon glyphicon-picture"></span>
        </div>
        <!-- send btn -->
        <span class="glyphicon glyphicon-send send-btn" onclick="send_message(event)"></span>
      </div>
      <?php else: ?>
        <p>You have no friends nibba</p>
      <?php endif ?>
    </section>
  </div>
  <!-- Footer Start -->
