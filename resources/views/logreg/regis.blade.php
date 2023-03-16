<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>AP2M - Registrasi</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

  <link rel="stylesheet" href={{ asset("logincss/style.css") }} media="screen" type="text/css" />
  <!-- fevicon -->
  <link rel="icon" href={{ asset("images/logo1.png") }} type="image/gif" />

</head>

<body>

  <div class="login-card">
      <h1>Registrasi</h1>
      <h4>Silahkan Mengisi Form Sesuai Data Diri</h4><br>
        <form>
            @csrf
            <input type="text" name="nik" placeholder="Masukkan NIK">
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
            <input type="text" name="username" placeholder="Masukkan Username">
            <input type="text" name="telp" placeholder="Masukkan No. Telepon">
            <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap">
            <input type="password" name="password" placeholder="Masukkan Password" min="3">
            <input type="submit" name="login" class="login login-submit" value="Submit">
        </form>

        <div class="login-help">
            <p>Sudah Memiliki Akun ? <a href="/login">Login</a></p>
        </div>
    </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>
