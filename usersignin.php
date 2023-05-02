<?php
  require_once('connect.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ITS351_PROJECT</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
    <style>
    .navactive {
        color: white;
        background-color: #bcb562;
    }
    </style>
  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="BNN.png" border="0" />
      <div class="topnav">
        <a href="usersignin.php">Log in</a>
        <a href="userregister.php">Sign up</a>
        <a href="usermanagement.php">Home</a>
      </div>
    </div>

  </div>
  <body>
    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign In (USER)</h1>
        <hr>
        <br>
        <form action="userchecklogin.php" method="post">


          <label for="userId">username</label>
          <input type="text" id="userId" name="userId" placeholder="userId">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">



          <input type="submit" name="userSignInSubmit" value="SignIn">
        </form>
      </div>
</div>
</body>

</html>
