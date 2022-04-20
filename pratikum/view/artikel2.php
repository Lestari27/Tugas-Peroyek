<?php
include '../layout/header.php';
?>
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
<h2 style="text-align: center;">Comentar articel Pertama</h2>
<form action="artikel2.php" method="post"> 
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
        <input id="nama" name="nama" placeholder=" nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="comentar" class="col-4 col-form-label">Comentar</label> 
    <div class="col-8">
      <textarea id="comentar" name="comentar" cols="40" rows="" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
        <div class="offset-4 col-8">
            <input name="proses" type="submit" value="SIMPAN" class="btn btn-primary" />
        </div>
    </div>
</form>
<?php
$proses = $_POST["proses"];
$nama = $_POST["nama"];
$comentar = $_POST["comentar"];
echo 'Proses : ' . $proses;
echo '<br> Nama  :' . $nama;
echo '<br> Comentar : ' . $comentar;
include '../layout/footer.php';
?>
</body>
</html>