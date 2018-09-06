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

  <div class="container">
    <nav>
      <input type="checkbox" id="nav" class="hidden">
        <label for="nav" class="nav-btn">
          <i></i>
          <i></i>
          <i></i>
      </label>
      <div class="logo">
        <img src="./assets/img/logo.png" alt="Rotaract" id="logo" width="100">
      </div>
      <div class="nav-wrapper">
        <ul>
          <li><a href="./">Home</a></li>
          <li><a href="./connectwithus.php">Sign In/Sign Up</a></li>
          <li><a href="#">Clubs</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Board Members</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </div>
