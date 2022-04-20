<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
  <div class="container">
    <h2 style="text-algin: center;"> From Nilai Siswa</h2>
    <hr/>
<form method="POST" action="from.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">Nim :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="Masukan Nim Kalian" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih MK :</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="basdat">Basis Data</option>
        <option value="pw">PW</option>
        <option value="ppkn">PPKN</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai :</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
require_once 'class_nilaimahasiswa.php';
if($_POST){
  $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
  $keterangan = $ns->hitungNilai();
  $hasil = $ns->grade($keterangan);
  $hasil2 = $ns->predikat($keterangan);
  echo "Nim : " .$ns->nim;
  echo "<br>";
  echo "Pilih MK: ".$ns->matkul;
  echo "<br>";
  echo "Nilai : ".$ns->nilai;
  echo "<br>";
  echo "Status : " .$hasil;
  echo "<br>";
  echo "grade : " .$hasil2;

}


?>
    
</body>
</html>