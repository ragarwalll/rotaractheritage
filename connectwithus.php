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
    include ( "./inc/register.inc.php" );
    include ( "./inc/login.inc.php" );?>
    <!--Staart for login, register-->
    <div class="extra"></div>
      <div id="wrapper">
        <br></br>
        <table align="center">
          <tr>
            <td class="box1">
              <h2>Already a member? Log in now!</h2>
              <form action="connectwithus.php" method="POST">
                <input type="text" name="user_login" size="25" placeholder="Username" /><p />
                <input type="password" name="password_login" size="25" placeholder="Password" /><p />
                <input type="submit" name="login" class="btn btn--secondary" value="Sign In">
              </form>
            </td>
            <td class="box2">
              <h2>Create a new account</h2>
              <form action="connectwithus.php" method="POST">
                <p /><input type="text" name="fname" size="25" placeholder="First Name" /><p />
                <input type="text" name="lname" size="25" placeholder="Last Name" /><p />
                <input type="text" name="username" size="25" placeholder="Username" /><p />
                <input type="text" name="email" size="25" placeholder="Email" /><p />
                <input type="text" name="email2" size="25" placeholder="Retype Email" /><p />
                <input type="password" name="password" size="25" placeholder="Password" /><p />
                <input type="password" name="password2" size="25" placeholder="Retype Password" /><p />
                <input type="submit" name="reg" class="btn btn--primary" value="Sign Up">
              </form>
            </td>
          </tr>
        </table>
    </div>
  </body>
</html>
