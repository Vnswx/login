
<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = '$id'");
  $sfs = mysqli_fetch_assoc($user);
}
else{
  echo "gagal";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      <?php
      include "regi2.css";
      ?>
    </style>
    <title>Index</title>
  </head>
  <body>

    <div class="in" id="hide">
      <h1 id="plyr">Welcome <?php echo $sfs["name"];?></h1>
      <br>
      <br>
      <label for="Warna">Pilih Warna: </label>
      <input type="color" id="warna">
      <br>
      <br>
      <button onclick="mulai()">Start</button>
      <br>
      <br>
      <a href="logout.php">Logout</a>
    </div>

    <div class="game" id="game">
    <h1 id="player">Welcome <?php echo $sfs["name"];?></h1>
      <div id="area"></div>
      <div class="btn-game"  id="btn-g" style="display: none;">
      <button onclick="ulang()" class="ulang">Try Again</button> 
      <button onclick="kembali()" class="ulang">Back</button>
      </div>
      </div>
    </div>
    <footer>
      <h1>Developed by Dexx</h1>
    </footer>
    <script><?php include 'game.js' ?></script>
  </body>
</html>