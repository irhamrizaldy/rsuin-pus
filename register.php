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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
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
      <form enctype="multipart/form-data" action="includes/register.inc.php" method="post">
        <div>
          <input type="text" id="name" name="name" class="fadeIn third" placeholder="full name" minlength="4" oninvalid="setCustomValidity('Name should be at least 4 characters')" oninput="setCustomValidity('')" required>
        </div>
        <div>
          <input type="text" id="username" name="username" class="fadeIn second" placeholder="username" minlength="4" oninvalid="setCustomValidity('Username should be at least 4 characters')" oninput="setCustomValidity('')" required>
        </div>
        <div>
          <input type="email" id="email" name="email" class="fadeIn third" placeholder="email" oninvalid="setCustomValidity('The email should be in the format: @mail')" oninput="setCustomValidity('')" required>
        </div>
        <div>
          <input type="text" id="phone" name="phone" class="fadeIn third" placeholder="phone number" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" oninvalid="setCustomValidity('Enter 12 numerical value as a phone number')" oninput="setCustomValidity('')" required>
        </div>
        <div>
          <input type="password" id="password" name="password" class="fadeIn third" placeholder="password" minlength="5" oninvalid="setCustomValidity('Password should be at least 5 characters')" oninput="setCustomValidity('')" required>
        </div>
        <div>
          <input type="password" id="repeatpassword" name="repeatpassword" class="fadeIn third" placeholder="repeat password" required>
        </div><br>
        <div>
          <input type="file" id="foto" name="foto" class="fadeIn third" placeholder="foto" oninvalid="setCustomValidity('You need profile image for identity')" oninput="setCustomValidity('')" required>
        </div><br>
        <input type="submit" class="fadeIn fourth" value="Register" name="submit">
      </form>
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="login.php">Have an account?</a>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var password = document.getElementById("password"),
      repeat_pass = document.getElementById("repeatpassword");

    function validatePassword() {
      if (password.value != repeat_pass.value) {
        repeat_pass.setCustomValidity("Passwords Doesn't Match");
      } else {
        repeat_pass.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    repeat_pass.onkeyup = validatePassword;
  </script>
</body>

</html>