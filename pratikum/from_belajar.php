<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>from belanja</title>
</head>

<body>
  <div class="container shadow-sm p-5 position-relative">
    <div class="row">
      <div class="col-8 border">
        <form method="POST" action="from_belajar.php">
          <div class="form-group row">
            <label for="cs" class="col-4 col-form-label">Coustamer</label>
            <div class="col-5">
              <input id="nama" name="nama" placeholder="Name nama" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS">
                <label for="produk_1" class="custom-control-label">KULKAS</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI">
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-4">
              <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input name="proses" type="submit" value="SIMPAN" class="btn btn-primary" />
            </div>
          </div>
        </form>
      </div>
 
      <div class="col-4">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true" name="harga" id="harga">Daftar Harga</li>
          <li class="list-group-item" name="harga" id="harga">TV : 4.200.000</li>
          <li class="list-group-item" name="harga" id="harga">KULKAS : 3.100.000</li>
          <li class="list-group-item" name="harga" id="harga">MESIN CUCI : 3.800.000</li>
          <li class="list-group-item active" name="harga" id="harga">Harga Dapat Berubah Setiap Saat</li>
        </ul>
      </div>
    </div>
  </div>

 
  <?php

  // Menangkap Data
$proses = $_POST["proses"];
$nama = $_POST["nama"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"]; 

if ($produk == "TV") {
    $total_produk = $jumlah * 4200000;
} elseif ($produk == "KULKAS") {
  $total_produk = $jumlah * 3100000;
} elseif ($produk == "MESIN CUCI") {
    $total_produk = $jumlah * 3800000;
} else {
    $total_produk =0;
}
// $bayar = $harga*$jumlah*$produk ;
echo 'Proses : ' . $proses;
echo '<br> Nama Coustomer :' . $nama;
echo '<br> Produk : ' . $produk;
echo '<br> jumlah : ' . $jumlah;
echo '<br> Harga : ' . $total_produk;
// echo '<br> bayar :' . $bayar";


?>

</body>

</html>