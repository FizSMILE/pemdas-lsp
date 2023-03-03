
<?php
//Hasil dari get laman home
@ $pproduk = $_GET['pp'];
@ $hproduk = $_GET['hp'];
//End hasil dari get laman home

//////////////////////////////////////////////////////////////////////////////////////

//Hasil dari input atas
@ $notrfp = $_POST['notrf'];
@ $radiop = $_POST['radio'];
@ $tgltrfp = $_POST['tgltrf'];
@ $namacsp = $_POST['namacs'];
@ $jumlahpp = $_POST['jumlahp'];
//END hasil dari input atas


if (isset($_POST['totalh'])){
  $hasilj = intval($hproduk) * intval($jumlahpp); 
  header("location:transaksi.php?pp=$pproduk&hp=$hproduk&hasilj=$hasilj&notrf=$notrfp&radio=$radiop&tgltrf=$tgltrfp&namacs=$namacsp&jumlahp=$jumlahpp");
 }

//////////////////////////////////////////////////////////////////////////////////////

//GET UNTUK MENAMPILKAN DATA YANG DI INPUT atas
@ $notrfg = $_GET['notrf'];
@ $radiog = $_GET['radio'];
@ $tgltrfg = $_GET['tgltrf'];
@ $namacsg = $_GET['namacs'];
@ $jumlahpg = $_GET['jumlahp'];
//END GET atas

//////////////////////////////////////////////////////////////////////////////////////

//Hasil dari input bawah
@ $bayar = $_POST['bayar'];

//END hasil dari input bawah

if (isset($_POST['hitungk'])){
  $hasilb = intval($bayar) - intval($hasilj);

  header("location:transaksi.php?pp=$pproduk&hp=$hproduk&hasilj=$hasilj&notrf=$notrfg&radio=$radiog&tgltrf=$tgltrfg&namacs=$namacsg&jumlahp=$jumlahpg&bayar=$bayar&hasilb=$hasilb");
}

//////////////////////////////////////////////////////////////////////////////////////

//GET UNTUK MENAMPILKAN DATA YANG DI INPUT bawah
@ $hasilj = $_GET['hasilj'];
@ $hasilbuy = $_GET['bayar'];
@ $hasilb = $_GET['hasilb'];
//END GET bawah

//////////////////////////////////////////////////////////////////////////////////////

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <!-- Navbar -->
   <div class="container-fluid">
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark rounded mt-3 ms-2 me-2">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-5" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ms-5" href="#">Transaksi</a>
        </li>
        <li class="nav-item">
          <button class="nav-link bg-transparent border-0 active position-absolute me-5 end-0 text-white" type="submit" name="logout" >Logout</button>
        </li>
      </ul>
    </div>
</nav>
</div>
<!-- End navbar -->
<!-- Bagian Tengah -->
<div class="container-fluid mt-3">
<div class="card mt-3 pt-3" style="background-color: #C8D0D5;">
            <div class="card-body">
                <form action="" method="post">
                <div class="row">
                    <div class="col-sm-2 mt-2">No Transaksi</div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="text" required class="form-control" name="notrf" id="" aria-describedby="helpId" placeholder="" value="<?= $notrfg ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                
            <div class="form-check">
  <input class="form-check-input" type="radio" required name="radio" value="0" id="flexRadioDefault1" <?php if($radiog == "0"){ echo"checked"; } ?> >
  <label class="form-check-label" for="flexRadioDefault1">
    Tidak ada tambahan - Rp.0
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="radio" value="10000" id="flexRadioDefault2" <?php if($radiog == "10000"){ echo"checked"; } ?>>
  <label class="form-check-label" for="flexRadioDefault2">
    Pelembut - Rp 10.000
  </label>
</div>
            
                </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 mt-2">Tanggal Transaksi</div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="date" required class="form-control" name="tgltrf" id="" aria-describedby="helpId" placeholder="" value="<?= $tgltrfg ?>">
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 mt-2">Nama Customer</div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="text"  required class="form-control" name="namacs" id="" aria-describedby="helpId" placeholder="" value="<?= $namacsg; ?>">
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 mt-2">Pilihan Produk</div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="text" required class="form-control" value="<?= $pproduk; ?>" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 mt-2">Harga Produk</div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="text" required class="form-control" value="<?= $hproduk; ?>" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 mt-2">Jumlah Produk</div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="text" class="form-control" value="<?= $jumlahpg; ?>" name="jumlahp" required id="" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col-sm-3">
                      <button type="submit" name="totalh" id="" class="btn btn-light">Hitung Total Harga</button>
                </div>
                </div>
                </form>
            </div>
        </div>
        <!-- End Bagian Tengah -->
            <!-- Perhitungan -->
        <div class="card border-0">
            <div class="card-body">
                <form action="" method="post">
            <div class="row">
                    <div class="col-sm-2 mt-2">Total Harga</div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="text" class="form-control" value="<?= @$hasilj; ?>" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col-sm-2 ms-5 mt-2">Pembayaran Berhasil</div>
                </div>
            <div class="row">
                    <div class="col-sm-2 mt-2">Pembayaran</div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="text" class="form-control" value="<?= @$hasilbuy; ?>" name="bayar" id="" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                <div class="col-sm-2 ms-5 mt-2">Kembalian</div>
                <div class="col-sm-3">
                      <div class="mb-3">
                      <input type="text" class="form-control" value="<?= @$hasilb; ?>" name="" id="" aria-describedby="helpId" placeholder="">
                    </div>
                </div>
                </div>
            <div class="row">
                    <div class="col-sm-3 ms-3 mt-2"></div>
                    <div class="col-sm-3">
                      <div class="mb-3">
                          <button type="submit" name="hitungk" id="" class="btn btn-light">Hitung Kembalian</button>
                    </div>
                </div>
                <div class="col-sm-2 me-5 mt-2"></div>
                    <div class="col-sm-3 ms-1">
                      <div class="mb-3">
                          <button type="submit" name="simpan" id="" class="btn btn-light">Simpan Transaksi</button>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <!-- End Perhitungan -->

<!-- Footer -->
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-5 rounded" style="background-color: #C8D0D5;">
        <div class="card-body">
          <div class="text-center text-black">
            @copyright namapeserta
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($_POST['simpan'])) : ?>
  <?php if (intval($hasilb) > 0) : ?>
    <script>
      Swal.fire({
        width: 500,
        padding: '4em',
        html: 'Transaksi Berhasil <br> Kembali Ke Home',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "home.php";
        }
      })
    </script>
  <?php else : ?>
    <script>
      Swal.fire({
        width: 500,
        padding: '4em',
        html: 'Transaksi Gagal <br> Kembali Ke Home',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "transaksi.php?pp=<?= $pproduk ?>&hp=<?= $hproduk ?>&hasilj=<?= $hasilj ?>&notrf=<?= $notrfg ?>&radio=<?= $radiog ?>&tgltrf=<?= $tgltrfg ?>&namacs=<?= $namacsg ?>&jumlahp=<?= $jumlahpg ?>&bayar=<?= $bayar ?>&hasilb=<?= $hasilb ?>";
        }
      })
    </script>
  <?php endif; ?>
<?php endif; ?>
<!-- End Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>