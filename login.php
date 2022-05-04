<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link href="Assets/styles/login.css" rel="stylesheet">
  <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body> 

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
    <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
            <div class="form__input-group">
                <input type="text" name="username" class="form__input" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
  	</div>
    <div class="form__input-group">
                <input type="password" name="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
  <button class="form__button" type="submit" class="btn" name="login_user">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a href="register.php">Don't have an account? Create account</a>
            </p>
        </form>
  </form>
</body>
</html>