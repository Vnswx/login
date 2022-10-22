
<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style><?php include 'regi.css'; ?></style>
    <title>Register</title>
  </head>
  <body>

  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div id="y3" class="op">
          <div class="y6" id="y6"></div>
          <h2>Registrasi</h2>
    <form autocomplete="off" action="" method="post">
      <label for="name">Name: </label>
      <br>
      <input type="text" id="name" value="">
      <br> 
      <p id="ps" class="ps"></p> 
      <label for="username">Username: </label>
      <br>
      <input type="text" id="username" value=""> 
      <br>
      <p id="psa"></p> 
      <label for="password">Password: </label>
      <br>
      <input type="password" id="password" value=""> 
      <br>
      <p id="pss" class="pss"></p>
      <button type="button" onclick="submitData('regis');">Buat</button>
      <p id="ok">Sudah Punya Akun? <a onclick="onana()"style="cursor: pointer;" id="sws">Login</a></p>
    </form>
    <br>
    </div>
      <div id="y2" class="opo">
      <div class="y6" id="y6"></div>
            <h2>Login</h2>
    <form autocomplete="off" action="" method="post">
      <label for="username12">Username</label>
      <br>
      <input type="text" id="username12" value="">
      <br>
      <p id="psw" class="ps"></p>
      <br>
      <label for="password12">Password</label>
      <br>
      <input type="password" id="password12" value="">
      <br>      
      <p id="wsp" class="pss"></p>
      <input type="checkbox" onclick="myFunction()">
      <br>
      <button type="button" onclick="submitData('login2')">Login</button>
      <p id="ok">Belum Punya Akun? <a onclick="ona()"style="cursor: pointer;" id="sws">Login</a></p>
    </form>
    <br>
      </div>

    
      
      <div class="image1" id="image1">
        <img src="asset/fwc.png" alt="">
      </div>
      <script>
  <?php include 'ayam.js'; ?>
</script>
  </body>
</html>