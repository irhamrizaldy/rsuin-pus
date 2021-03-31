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
      <form id="reg-form" action="includes/register.inc.php" method="post">
        <div>
          <input type="text" id="name" name="name" class="fadeIn third" placeholder="full name" minlength="4" oninvalid="setCustomValidity('Name should be at least 4 characters')" oninput="setCustomValidity('')">
        </div>
        <div>
          <input type="text" id="username" name="username" class="fadeIn second" placeholder="username" minlength="4" oninvalid="setCustomValidity('Username should be at least 4 characters')" oninput="setCustomValidity('')">
        </div>
        <div>
          <input type="email" id="email" name="email" class="fadeIn third" placeholder="email" oninvalid="setCustomValidity('The email should be in the format: @mail')" oninput="setCustomValidity('')">
        </div>
        <div>
          <input type="text" id="phone" name="phone" class="fadeIn third" placeholder="phone number" pattern="[0-9]{10-12}" oninvalid="setCustomValidity('Please enter your phone number as a numerical value')" oninput="setCustomValidity('')">
        </div>
        <div>
          <input type="password" id="password" name="password" class="fadeIn third" placeholder="password" minlength="5" oninvalid="setCustomValidity('Password should be at least 5 characters')" oninput="setCustomValidity('')">
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
    // $(document).ready(function() {
    //   $("#reg-form").validate({
    //     rules: {
    //       name: {
    //         minlength: 4
    //       },
    //       username: {
    //         minlength: 4
    //       },
    //       email: {
    //         email: true
    //       },
    //       phone: {
    //         number: true,
    //         minlength: 10
    //       },
    //       password: {
    //         minlength: 5
    //       }
    //     },
    //     messages: {
    //       name: {
    //         minlength: "Name should be at least 4 characters"
    //       },
    //       username: {
    //         minlength: "Username should be at least 4 characters"
    //       },
    //       email: {
    //         email: "The email should be in the format: @mail"
    //       },
    //       phone: {
    //         number: "Please enter your phone number as a numerical value"
    //       },
    //       password: {
    //         minlength: "Password should be at least 5 characters"
    //       }
    //     }
    //   });
    // });
    // var inputName = document.getElementById('name');
    // var inputUsername = document.getElementById('username');
    // var inputEmail = document.getElementById('email');
    // var inputPhone = document.getElementById('phone');
    // var inputPassword = document.getElementById('password');

    // inputName.oninvalid = function(event) {
    //   event.target.setCustomValidity('Name must be longer than 4');
    // }
    // inputUsername.oninvalid = function(event) {
    //   event.target.setCustomValidity('Username must be longer than 4');
    // }
    // inputEmail.oninvalid = function(event) {
    //   event.target.setCustomValidity('Must be an email');
    // }
    // inputPhone.oninvalid = function(event) {
    //   event.target.setCustomValidity('Phone must be numeric');
    // }
    // inputPassword.oninvalid = function(event) {
    //   event.target.setCustomValidity('Password must longer than 5');
    // }
  </script>
</body>

</html>