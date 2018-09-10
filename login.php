<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php include ( "./inc/connect.inc.php");
include ( "./inc/login.inc.php" );?>
<head>
  <link rel="stylesheet" href="./css/main.css">
</head>

<script>
  window.onload = function() {
    var name = localStorage.getItem("email");
    var status = localStorage.getItem("email_status");

    if (name !== null){
      $('.user').val(name);
    }
    if (status !== null){
      $( '#email_status' ).html(status);
    }
  }
</script>
<script type="text/javascript" src="./js/ajax.js"></script>
<body translate="no">
  <div class="form">
    <a href="#" class="previous round hide">&#8249;</a>
    <h3 id="area">Rotaract</h3>
    <h2 id="log">Sign in<br></h2>
    <h2 id="new-details">with your Rotaract account</h2>
    <div class="input">
      <div class="email">
        <form action="" method="POST">
          <div class="username">
            <input type="text" name="user_login" autocomplete="off" onkeyup="checkit();" placeholder="Enter your username" class="user" />
            <input type="password" name="password_login" class="pass hidden" placeholder="Enter your password" />
            <span id="email_status" class="email_status"></span>
            <div class="line"></div>
            <div class="pass_status hide"></div>
          </div>
          <div class="lining">
            <button class="next" href="" >Next</button>

            <div class="center">
              <a class="newpass" href="" >forgot password?</a></div>
          </div>
            <input type="submit" name="login" class="final hide" style="float: right" value="Login">
            
        </form>
      </div>
    </div>
  </div>
  <script src=./js/hover-email.js></script>
  <script>
    window.onbeforeunload = function() {
    localStorage.setItem("email", $('.user').val());
    localStorage.setItem("email_status", document.querySelector("#email_status").innerHTML);
    }
  </script>
</body>
