<?php 
  include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal Nomor 4</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
     $id = $_GET['id'];
     $sql = "SELECT * FROM kabupaten_tb WHERE id = $id";
     $query = $con->query($sql);
    ?>
  <header>
    <div class="logo"><a href="./index.php"><h1>Provinsi dan Kabupaten</h1></a></div>
    <nav class="mainnav">
      <ul>
        <li><a href="../provinsi.php">Add Provinsi</a></li>
        <li><a href="../kabupaten.php">Add Kabupaten</a></li>
      </ul>
    </nav>
  </header>
  <div class="main mid">
    <?php 
        $data = $query->fetch_assoc();
        $id = $data['id'];
        $nama = $data['nama'];
        $photo = $data['photo'];
        $diresmikan = $data['diresmikan'];
        $provinsi_id = $data['provinsi_id'];

        $queryProvinsi = $con->query("SELECT * FROM provinsi_tb WHERE id = '$provinsi_id'");
        $dataProvinsi = $queryProvinsi->fetch_assoc();
        $nama_provinsi = $dataProvinsi['nama'];

    ?>
    <div class='doingFlex'>
      <div class="fotobutton">
        <img src="<?= $photo ?>" alt="Foto" height='450'>
        <a href="index.php" class='btn-submit'>Back</a>
      </div>
      <div class="detailprofil">
        <h3>Detail Kabupaten</h3>
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
          </tr>
          <tr>
            <td>Diresmikan</td>
            <td>:</td>
            <td><?= $diresmikan ?></td>
          </tr>
          <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><?= $nama_provinsi ?></td>
          </tr>
        </table>
      </div>
    </div>
    
  </div>
</body>
</html>