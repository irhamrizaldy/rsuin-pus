<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/register_page.css" type="text/css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <h2>Register</h2>
      </div>

      <!-- Login Form -->
      <form action="includes/register.inc.php" method="post">
        <div>
          <input type="text" id="name" name="name" class="fadeIn third" placeholder="full name">
        </div>
        <div>
          <input type="text" id="username" name="username" class="fadeIn second" placeholder="username">
        </div>
        <div>
          <input type="email" id="email" name="email" class="fadeIn third" placeholder="email">
        </div>
        <div>
          <input type="text" id="phone" name="phone" class="fadeIn third" placeholder="phone number">
        </div>
        <div>
          <input type="password" id="password" name="password" class="fadeIn third" placeholder="password">
        </div>
        <div>
          <input type="password" id="repeatpassword" name="repeatpassword" class="fadeIn third" placeholder="repeat password">
        </div>
        <div>
          <input type="file" id="foto" name="foto" class="fadeIn third" placeholder="foto">
        </div>
        <input type="submit" class="fadeIn fourth" value="Register" name="submit">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="login.php">Have an account?</a>
      </div>

    </div>
  </div>
  <script type="text/javascript">

  </script>
</body>

</html>