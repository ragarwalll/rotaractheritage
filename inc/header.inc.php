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
    <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php if($carousel == "yes"){
      echo '<link rel="stylesheet" type="text/css" href="slick/slick.css">';
      echo '<link rel="stylesheet" type="text/css" href="./css/slider.css">';
      echo '<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">';
      echo '<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">';
    }
    ?>
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/preloader.js"></script>
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
            
            <div class="nav-wrapper">
            <ul>
                <li><a href="./" id="na">Home</a></li>
                <li><a href="./login" id="na">Sign In/Sign Up</a></li>
                <li><a href="#" id="na">Clubs</a></li>
                <li><a href="#" id="na">Events</a></li>
                <li><a href="./members" id="na">Board Members</a></li>
                <li><a href="#" id="na">Contact Us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <script>
      var nav = document.querySelectorAll("#na")
      for(i=0;i<nav.length;i++){
      $(nav[i]).click(function(){
        $('input[type="checkbox"]:checked').prop('checked',false);
      });}
    </script>
