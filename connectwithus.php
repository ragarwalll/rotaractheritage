<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.png" />
    <link rel="stylesheet" href="./css/main.css">
    <title>Connect With Us | Rotaract</title>
  </head>
  <body>
    <?php include ( "./inc/header.inc.php");
    include ( "./inc/login.inc.php" );?>
    <!--Staart for login, register-->

        <div class="form">
          <h2>Members Login</h2>
          <form action="connectwithus.php" method="POST">
            <input type="text" name="user_login" size="25" placeholder="Username" /><p />
            <input type="password" name="password_login" size="25" placeholder="Password" /><p />
            <input type="submit" name="login" class="btn btn--secondary" value="Sign In">
          </form>
        </div>
  </body>
</html>
