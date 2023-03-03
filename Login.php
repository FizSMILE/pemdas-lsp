<?php
//Session Start Login ("Apabila belum login tidak bisa mengakses home")
session_start();

//Cek apakah user sudah login? apabila sudah langsung arahkan ke home
if (isset($_SESSION['status'])){
  header("location:home.php");
}

//Apabila tombol login ditekan cek apakah username == userlsp dan password == smkn2bjm apabila benar arahkan ke home apabila salah munculkan alert 
if (isset($_POST['login'])) {
  if ($_POST['username'] == "userlsp" && $_POST['password'] == "smkn2bjm"){
    //Session Login
    $_SESSION['status'] = true;
    //End Session Login
    header("location:home.php");
  } else {
    echo "<script>alert('Username atau Password Salah')</script>";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <!-- css untuk placeholder ketengah -->
    <style>
      ::placeholder {
        text-align: center;
      }
    </style>
    <!-- end css untuk placeholder ketengah -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <div class="container mt-2 mb-5">
    <!-- GAMBAR -->
    <div class="row justify-content-md-center">
      <div class="col-md-auto mt-5">
        <img src="img/loginimg.jpg" alt="" srcset="" class="rounded-circle" width="120" height="120">
      </div>
    </div>
    <!-- END GAMBAR -->
    <!-- TEXT WELCOME -->
    <div class="row justify-content-md-center text-center">
      <div class="col-md-auto mt-3">
        SELAMAT DATANG DI TECHNOPARK GALLERY <br> SMKN 2 BANJARMASIN
      </div>
    </div>
    <!-- END TEXT WELCOME -->
    <!-- CARD LOGIN -->
    <div class="row justify-content-md-center text-center">
      <div class="col-md-3 mt-2">
        <div class="card" style="background-color: #C8D0D5;">
          <div class="card-body  mt-5">
          <form action="" method="POST">
            <div class="row justify-content-md-center text-center mt-3">
              <div class="col-md-9 mt-2">
                  <input type="text" class="form-control" placeholder="Username" id="username" name="username" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="row justify-content-md-center text-center mt-3">
              <div class="col-md-9 mt-2">
                  <input type="password" placeholder="Password" class="form-control" id="password" name="password" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="row">
              <div class="d-grid gap-4 d-md-flex justify-content-md-center offset-md-2 mt-5">
                <button class="btn btn-light col-md-5" name="login" type="submit">Login</button>
              </div>
          </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END CARD LOGIN -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>