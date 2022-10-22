

document.getElementById('y2').style.display = "none"
document.getElementById('image1').style.display = "block"
document.getElementById('wsp').style.display = "none"
document.getElementById('psw').style.display = "none"


function register(why) {
  var name = document.getElementById('name').value
  var user = document.getElementById('username').value
  var pass = document.getElementById('password').value
  var ps = document.getElementById('ps')
  var psa = document.getElementById('psa')
  var pss = document.getElementById('pss')
  if (name == "") {
    ps.innerHTML = "Mohon isi Namanya"
    ps.style.display = "block"
  } else {
    ps.style.display = "none"
  }
  if (user == "") {
    psa.innerHTML = "Mohon isi Usernamenya"
    psa.style.display = "block"
  } else {
    psa.style.display = "none"
  }
  if (pass == "") {
    pss.innerHTML = "Mohon isi Passwordnya"
    pss.style.display = "block"
  } else {
    pss.style.display = "none"
  }
  if (why == "Username Sudah Ada") {
    alert('Username tidak Unik')
  } else if (why == "Registrasi Berhasil") {
    alert('registrasi berhasil')
  }
}

function myFunction() {
  var x = document.getElementById("password12");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function onana() {
  document.getElementById('y3').style.display = "none"
  document.getElementById('y2').style.display = "block"
  document.getElementById('y6').style.display = "block"
}

function ona() {
  document.getElementById('y3').style.display = "block"
  document.getElementById('y2').style.display = "none"
  document.getElementById('y6').style.display = "block"
}

function submitData(tipe) {
  if (tipe == "login2") {
    $(document).ready(function () {
      var data = {
        username: $("#username12").val(),
        password: $("#password12").val(),
        action: "login"
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success: function (response2) {
          login(response2)
          if (response2 == "lb") {
            Swal.fire({
              icon: 'success',
              title: 'Hallo ' + data["username"] + ' Selamat Datang Kembali!',
              timer: 5000,
              showConfirmButton: false,
            })
            setTimeout(re, 5000)
            function re(){
              window.location.reload()
            }
          } else {
            console.log("gagal")
          }
        }
      });
    });
  } else if (tipe == "regis") {
    $(document).ready(function () {
      var data = {
        name: $("#name").val(),
        username: $("#username").val(),
        password: $("#password").val(),
        action: "register"
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success: function (response) {
          register(response)
          alert(response);
          if (response == "Registrasi Berhasil") {
            Swal.fire({
              icon: 'success',
              title: 'Registrasi Berhasil',
              timer: 5000,
              showConfirmButton: false,
            })
            setTimeout(resw, 5000)
            function resw(){
              window.location.reload()
            }
          }else{
            console.log("gagal")
          }
        }
      })
    })

  }

}

function submitdata() {
  document.getElementById('game').style.display = "block"
  document.getElementById('y2').style.display = "none"
  document.getElementById('image1').style.display = "none"

}

function login(ysw) {
  var as = document.getElementById('username12').value
  var da = document.getElementById('password12').value
  var err = document.getElementById('psw')
  var ere = document.getElementById('wsp')
  if (as == "") {
    err.innerHTML = "Mohon isi Username Anda"
    err.style.display = "block"
  } else {
    err.style.display = "none"
  }
  if (da == "") {
    ere.innerHTML = "Mohon isi Password Anda"
    ere.style.display = "block"
  } else {
    ere.style.display = "none"
  }
  if(as == ""){

  }
  else if (ysw == "Wrong Password") {
    alert('password Kamu Salah')
  } else if (ysw == "User Not Registered") {
    alert('User Tidak Ada')
  }
}