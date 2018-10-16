<!--===========header=============-->

<header class="main-header" style="z-index:99;">
      <div class="grid-header contain-header">
        <div class="rota-150-logo"><img src="./assets/img/logo-150.png" alt=""></div>
        <nav class="main-nav" id="nav__login">
          <ul class="unstyled-list new-header-ul">
            <li class="new-header-li"><a href="<?php print $_SERVER['MYVAR'];?>home" id="main-nav-a">Home</a></li>
            <li class="new-header-li"><a href="<?php print $_SERVER['MYVAR'];?>profile/user/<?php echo $userid;?>" id="main-nav-a">Profile</a></li>
            <li class="new-header-li"><a href="<?php print $_SERVER['MYVAR'];?>message" id="main-nav-a">Messages</a></li>
            <li class="new-header-li"><a href="javascript: void(0);" id="main-nav-a">Account Settings</a></li>
            <li class="new-header-li"><a href="<?php print $_SERVER['MYVAR'];?>subscription_management" id="main-nav-a">Subscripton</a></li>
        </nav>

        <nav class="main-nav" id="nav2__login">
          <ul class="unstyled-list new-header-ul">
            <li class="new-header-li"><a href="<?php print $_SERVER['MYVAR'];?>settings/account/picture" id="main-nav-a">Change profile picture</a></li>
            <li class="new-header-li"><a href="<?php print $_SERVER['MYVAR'];?>settings/account/password" id="main-nav-a">Update password</a></li>
            <li class="new-header-li"><a href="<?php print $_SERVER['MYVAR'];?>settings/account/name" id="main-nav-a">Update name</a></li>
            <li class="new-header-li"><a onclick="backtomain();" id="main-nav-a">Back</a></li>
        </nav>

        <div class="nav-toggle">
          <div class="hamburger"></div>
        </div>
      </div>
    </header>
    <script>
    var all_ul = document.getElementById("nav__login").getElementsByTagName('ul');
    var settings_ul = document.getElementById("nav2__login");
    $(settings_ul).hide();
    for (var i = 0; i < all_ul.length; i++) {
        all_ul[i].addEventListener('click', clickHandler2)
      }

      function clickHandler2(e) {
        if(e.target.innerHTML == "Account Settings"){
          $(all_ul).hide();
          $(settings_ul).show();
        }
      }
    
      function backtomain(){
        $(all_ul).show();
        $(settings_ul).hide();
      }
    </script>
    <script>
    $(document).ready(function() {

      $('.nav-toggle').click(function() {
        $('.main-nav').toggleClass('is-open')
        $('.hamburger').toggleClass('is-open')
        $('.nav-btn').toggleClass('hidden') 

      })
    })
    </script>