<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <title>Pasien</title>
</head>

<body>
  <div class="container">
    <h2 class="tex-center mb-5"> From Pasien BMI</h2>
    <form action="hasilPasien.php" method="GET">
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
          <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="berat" class="col-4 col-form-label">Berat Badan</label>
        <div class="col-8">
          <input id="berat" name="berat" placeholder="Berat Badan" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
        <div class="col-8">
          <input id="tinggi" name="tinggi" placeholder="Tinggi Badan" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="umur" class="col-4 col-form-label">Umur</label>
        <div class="col-8">
          <input id="umur" name="umur" placeholder="Umur" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label>
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="kelamin" id="radio_0" type="radio" class="custom-control-input" value="laki">
            <label for="radio_0" class="custom-control-label">Laki - Laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="kelamin" id="radio_1" type="radio" class="custom-control-input" value="perempuan">
            <label for="radio_1" class="custom-control-label">Perempuan</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <input type="submit" value="SIMPAN" name="proses">
        </div>
      </div>
    </form>

  </div>
  <hr>
  <?php require_once "class_BmiPasien.php"?>

  <div class="container">
    <h2 class="text-center mb-5"> Data BMI Pasien</h2>
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Gender</th>
          <th scope="col">Umur</th>
          <th scope="col">Berat Badan</th>
          <th scope="col">Tinggi Badan</th>
          <th scope="col">Status BMI</th>
          <th scope="col">Hasil BMI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_pasien as $pasien) {
          echo '<tr><td>'.$nomor.'</td>';
          echo '<td>'.$pasien['nama'].'</td>';
          echo '<td>'.$pasien['kelamin'].'</td>';
          echo '<td>'.$pasien['umur'].'</td>';
          echo '<td>'.$pasien['berat'].'</td>';
          echo '<td>'.$pasien['tinggi'].'</td>';
          $BMI = $pasien["berat"] / (($pasien["tinggi"]/100)**2);
          echo '<td>'.number_format($BMI, 1).'</td>';
          $status = new bmiPasien();
          echo $status->status($BMI);
          echo '</tr>';
          $nomor++;
        }
        ?>
      </tbody>
    </table>
  </div>



</body>

</html>