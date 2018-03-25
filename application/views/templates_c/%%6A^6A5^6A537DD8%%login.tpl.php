<?php /* Smarty version 2.6.31, created on 2018-03-24 19:28:21
         compiled from login.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/style_sheet.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- <h2>Login Form</h2> -->
<h2><?php echo $this->_tpl_vars['login_form']; ?>
</h2>
<form action="" action="get" id="login_form">
  <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    <label for="email_id"><b>Username</b></label>
    <input type="email" placeholder="Enter Email Id" name="email_id" id="email_id" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="pwd" required>
        
    <button type="submit">Login</button>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>