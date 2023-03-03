<?php
// Format Rupiah
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
// End Format Rupiah

//Apabila belum login arahkan ke login
session_start();
if (!isset($_SESSION['status'])){
header("location:login.php");
}

//Apabila menekan logout hapus session arahkan ke login
if (isset($_POST['logout'])){
  $_SESSION = [];
  session_unset();
  session_destroy();
  header("location:login.php");
}

//Datapaket array
$datapaket = array (
 array("PAKAN IKAN OTOMATIS", "beri makan ikan tanpa repot dengan pakan ikan otomatis produk dari jurusan RPL",10000,"pakanikan.jpg"),
 array("WEBSITE COMPANY PROFILE", "Zaman now masih belum punya website percayakan pembuatan website pada kula koding smkn 2 banjarmasin",45000,"websitecompany.jpg"),
 array("KURSI JATI", "kursi estetik dengan bahan jati dibuat oleh jurusan Teknik Furniture",50000,"kursijati.jpg"),
 array("SABUN LAUNDRY","mewangikan pakain menggunakan bahan yang aman untuk pakaian produksi dari jurusan kimia industri",55000,"sabunlaundry.jpg")
);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="container-fluid">
     <!-- Navbar -->
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark rounded mt-3">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form action="" method="post">
    <div class="collapse navbar-collapse ms-5" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ms-5" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <button class="nav-link bg-transparent border-0 active position-absolute me-5 end-0 text-white" type="submit" name="logout" >Logout</button>
        </li>
      </ul>
      </div>
    </form>
</nav>
<!-- End navbar -->
<!-- Banner -->
<div class="row">
    <div class="col-md-12 mt-3 ">
    <img alt="Make Image responsive" height="400" src="img/dashboardimg.jpg" width="100%" class="rounded" />
    </div>
</div>
<!-- End Banner -->
<!-- Text -->
<div class="m-4">
  <h4>Daftar Produk Technopark Gallery SMKN 2 BANJARMASIN</h4>
</div>
<!-- End Text -->
<!-- Foreach Data Produk -->
<div class="container-fluid">
  <div class="row">
<?php foreach ($datapaket as $key => $value) { ?>
    <div class="col-md">
      <div class="card" style="height: 25rem;">
      <img src="img/<?= $value[3]; ?>" class="card-img-top" style="height: 200px;" alt="...">
        <div class="card-body">
          <p><?= $value[0]; ?><p>
          <p><?= $value[1]; ?><p>
          <p><?= rupiah($value[2]); ?><p>
        </div>
      </div>
      <div class="d-grid gap-2 col-md mx-auto mt-5">
  <a href="transaksi.php?pp=<?= $value[0]?>&hp=<?= $value[2]?>"class="btn p-2 text-white" style="background-color: #596873;" type="button">PILIH PAKET</a>
</div>
    </div>
<?php } ?>
  </div>
  <div class="row mb-3">
    <div class="col-md-12">
      <div class="card mt-5 rounded" style="background-color: #C8D0D5;">
        <div class="card-body">
          <div class="text-center text-black">
            @copyright HafizAbuBakarArsal
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Foreach data produk -->
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>