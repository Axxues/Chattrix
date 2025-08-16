
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
        <?php foreach($users as $user): 
          if(!($user['user_admin_id'] == session()->get('loggedUser'))) :
        ?>
        <div id="friends<?= $user['user_admin_id'] ?>" class="friends"  onclick="window.location.href='<?= site_url('t/' . $user['user_admin_id']) ?>'" style="cursor: pointer;">
          <!-- photo -->
          <div class="profile friends-photo profie-picture">
            <img src="<?php echo base_url('public/assets/images/ava2.jpg'); ?>" alt="">
          </div>
          
          <div id="user-information<?= $user['user_admin_id'] ?>" class="friends-credent profile-name">
            <!-- name -->
            <span class="friends-name"><?= $user['first_name'] ?> <?= $user['last_name'] ?></span>
            <!-- last message -->

          </div>
          <!-- notification badge -->
          
        </div>
        <?php 
        endif;
        endforeach; 
        ?>
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
        <h4 class="name your-name"><?= session()->get('userName') ?></h4>
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

      </div>

      <!-- typing area -->
      <div id="typing-area" class="typing-area">
        <!-- input form -->
        <input id="message_text" class="type-area" onfocus="user_typing('focus')" onblur="user_typing('blur')" onkeydown="if(event.key==='Enter'){ send_message(event); }" placeholder="Type something...">
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
