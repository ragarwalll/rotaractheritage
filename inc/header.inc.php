<?php include ( "./inc/connect.inc.php");
include ( "./checkcookie.php");
//Checks if a user is logged in or not
if(Login::isloggedIn())
{
  $userid=Login::isloggedIn();
  $username= DB::query('SELECT username from users WHERE id=:id', array(':id'=>$userid))[0]['username'];
}
else {
  $userid=Login::isloggedIn();
}//End of checking ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="https://127.0.0.1/rotaractheritage/assets/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://127.0.0.1/rotaractheritage/js/w3sort.js"></script>
    <?php if($carousel == "yes"){
      echo '<link rel="stylesheet" type="text/css" href="https://127.0.0.1/rotaractheritage/slick/slick.css">';
      echo '<link rel="stylesheet" type="text/css" href="https://127.0.0.1/rotaractheritage/css/slider.css">';
      echo '<link rel="stylesheet" type="text/css" href="https://127.0.0.1/rotaractheritage/slick/slick-theme.css">';
      echo '<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">';
    }
    ?>
    <link rel="stylesheet" href="https://127.0.0.1/rotaractheritage/css/main.css">
    <script src="https://127.0.0.1/rotaractheritage/js/preloader.js"></script>
    <title>Rotaract | THA</title>
  </head>
  <body>
    <div class="spinner-wrapper" id="loader">
        <div class="spinner"></div>
    </div>
    <!--- Preload End-->
    <section class="cover">
        <div class="container">
        <nav>
            <input type="checkbox" id="nav" class="hidden">
            <label for="nav" class="nav-btn">
                <i id="bar"></i>
                <i id="bar"></i>
                <i id="bar"></i>
            </label>
            
            <div class="nav-wrapper" id="nav__">
              <ul>
                  <li><a href="javascript: void(0);" id="na">About us</a></li>
                  <li><a href="http://localhost/rotaractheritage/index" id="na">Home</a></li>
                  <li><a href="http://localhost/rotaractheritage/login" id="na">Sign In/Sign Up</a></li>
                  <li><a href="http://localhost/rotaractheritage/events" id="na">Events</a></li>
                  <li><a href="http://localhost/rotaractheritage/members" id="na">Board Members</a></li>
                  <li><a href="https://www.rotasiagoa2019.com/" id="na" target="_blank">Rotasia Goa 2019</a></li>
                  <li><a href="http://127.0.0.1/rotaractheritage/contact" id="na">Contact Us</a></li>
              </ul>
          </div>
          <div class="nav-wrapper hidden" id="nav__2">
              <ul>
                  <li><a href="http://localhost/rotaractheritage/" id="na">Home</a></li>
                  <li><a href="http://localhost/rotaractheritage/login" id="na">Sign In/Sign Up</a></li>
                  <li><a href="#" id="na">Clubs</a></li>
              </ul>
          </div>
          <div class="nav-wrapper" id="nav__aboutus">
              <ul>
                  <li><a href="overview" id="na">Rotaract Overview</a></li>
                  <li><a href="history" id="na">Rotaract History</a></li>
                  <li><a href="" id="na">Standard Rotaract Consitution</a></li>
                  <li><a href="https://www.rsamdio.org/" id="na" target="_blank">MDIO - RSAMDIO</a></li>
                  <li><a href="https://www.rotary.org/" id="na" target="_blank">Rotaract International</a></li>
                  <li><a href="http://rotaract3170.org" id="na" target="_blank">Rotaract 3170</a></li>
                  <li><a onclick="back();" id="na">back</a></li>
              </ul>
          </div>
        </nav>
      </div>
    </section><!--
    <script>
      var nav = document.querySelectorAll("#na")
      for(i=0;i<nav.length;i++){
      $(nav[i]).click(function(){
        $('input[type="checkbox"]:checked').prop('checked',false);
      });}
    </script>-->
    <script>
      var ul = document.getElementById("nav__").getElementsByTagName('ul');
      var aboutus = document.getElementById("nav__aboutus");
      $(aboutus).hide();
      for (var i = 0; i < ul.length; i++) {
        ul[i].addEventListener('click', clickHandler)
      }

      function clickHandler(e) {
        if(e.target.innerHTML == "About us"){
          $(ul).hide();
          $(aboutus).show();
        }
      }

      function back(){
        $(aboutus).hide();
        $(ul).show();
      }
    </script>
