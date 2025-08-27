
  <!-- Header End -->
  <div id="app" class="app">

    <!-- MENU SECTION -->
     <section id="menu-left" class="menu-left">
      <ul class="list-group">
        <li class="list-group-item menu-buttons border-0 mb-5">
          <img class="menu-logo" src="<?php echo base_url('public/assets/images/message-svgrepo-com.svg'); ?>" alt="">
        </li>
        <li class="list-group-item border-0 p-0">
          <div class="menu-buttons">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-dots menu-bi" viewBox="0 0 16 16">
              <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
              <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
            </svg>
            <span class="tooltiptext">Chats</span>
          </div>
          
        </li>
        <li class="list-group-item border-0 p-0">
          <div class="menu-buttons">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person menu-bi" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
            <span class="tooltiptext">Friends</span>
          </div>
          
        </li>
        <li class="list-group-item border-0 p-0">
          <div class="menu-buttons">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-archive menu-bi" viewBox="0 0 16 16">
              <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
            </svg>
            <span class="tooltiptext">Archive</span>
          </div>
        </li>
      </ul>

      <div class="menu-divider">
        <hr>
      </div>
      <div class="menu-profile" onclick="profileInfo()">
        <div class="profile your-photo">
          <img src="<?php echo base_url('public/assets/images/ava4.jpg'); ?>" alt="">
        </div>
        <span class="tooltiptext">Profile</span>
      </div>
     </section>

    <!-- LEFT SECTION -->

    <section id="main-left" class="main-left">
      <div id="header-left" class="header-left">
        <div class="header-left-upper">
          <h1 class="header-left-title"><strong>Chats</strong></h1>
          <div class="header-left-upper-logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-people header-left-upper-logo-button" viewBox="0 0 16 16">
              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
            </svg>
            <span class="tooltiptext">New Group</span>
          </div>
          <div class="header-left-upper-logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-plus-circle header-left-upper-logo-button" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
            <span class="tooltiptext">New Chat</span>
          </div>
        </div>
        <form class="d-flex">
          <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
        <!-- header -->
        
        
        
        <!-- <span class="glyphicon glyphicon-menu-hamburger hamburger-btn"></span>
        <span class="glyphicon glyphicon-search search-btn"></span>
        <span class="glyphicon glyphicon-option-vertical option-btn"></span> -->
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
    
      <!-- <div id="self-info" class="self-info">
       
        <div class="profile your-photo">
          <img src="<?php echo base_url('public/assets/images/ava4.jpg'); ?>" alt="">
        </div>
        
        <h4 class="name your-name"><?= session()->get('userName') ?></h4>
        
        <span class="glyphicon glyphicon-cog"></span>
        
      </div> -->

      <div class="profile-information">
        <h1>Profile</h1>
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
        <div class="some-btn" id="chat-info" onclick="chatInfo()">
          <span class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
              <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
            </svg>
          </span>
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
        <input type="file" id="file-input"  name="input-file[]" multiple style="display: none;" onchange="sendFiles(this)">
        <input type="file" id="image-input" name="input-file[]" multiple style="display: none;" accept="image/*" onchange="sendFiles(this)">
        <div class="attach-btn">
          <span class="glyphicon file-btn" onclick="selectFiles('files')">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z"/>
            </svg>
          </span>
        </div>
        <div class="attach-btn">
          <span class="glyphicon picture-btn" onclick="selectFiles('images')">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1z"/>
            </svg>
          </span>
        </div>
        <!-- send btn -->
         <div class="attach-btn">
          <span class="glyphicon send-btn" onclick="send_message(event)">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16">
              <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
              <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
            </svg>
          </span>
         </div>
        
      </div>
      <?php else: ?>
        <p>You have no friends nibba</p>
      <?php endif ?>
    </section>

    <!-- Main Right Info -->
    <section class="main-right-info">
      <h1>Chat Information</h1>
    </section>
  </div>

  
  <!-- Footer Start -->
