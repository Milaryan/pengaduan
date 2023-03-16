<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>AP2M - Login</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

  <link rel="stylesheet" href={{ asset("logincss/style.css") }} media="screen" type="text/css" />
  <!-- fevicon -->
  <link rel="icon" href={{ asset("images/logo1.png") }} type="image/gif" />

</head>

<body>

  <div class="login-card">
      <h1>Login</h1>
      <h4>Silahkan Login Sebelum Menggunakan Website</h4><br>
        <form>
            <input type="text" name="user" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" name="login" class="login login-submit" value="login">
        </form>

        <div class="login-help">
            <p>Belum Memiliki Akun ? <a href="/register">Register</a></p>
        </div>
    </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>
