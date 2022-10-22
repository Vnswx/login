<?php
session_start();
$error = "";
$validate = "";
$conn = mysqli_connect("localhost", "root", "", "loginregister");


if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }else if($_POST["action"] == "login"){
    login();
  }
}




function register(){
  global $conn;
  $id = rand(100000,9999);
  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $ps = "tolong isi Usernamenya";
  $date = date("Y-m-d");


   if(empty($username)){
    echo "$ps";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Sudah Ada";
    exit;
  }

  $query = "INSERT INTO tb_user (id,name,username,password,created_at)VALUES('$id', '$name', '$username', '$password', '$date')";
  $resultt = mysqli_query($conn, $query);
  echo "Registrasi Berhasil";

}


function login(){
  global $conn;

  $username2 = $_POST["username"];
  $password2= $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username2'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password2 == $row['password']){
      echo "lb";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      exit;
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>