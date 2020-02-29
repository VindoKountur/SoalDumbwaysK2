<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal Nomor 4</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo"><a href="./index.php"><h1>Provinsi dan Kabupaten</h1></a></div>
    <nav class="mainnav">
      <ul>
        <li><a href="./provinsi.php">Add Provinsi</a></li>
        <li><a href="./kabupaten.php">Add Kabupaten</a></li>
      </ul>
    </nav>
  </header>
  <div class="main mid">
  <?php 
    include 'koneksi.php';
    $id = $_GET['id'];
    $sqlGet = "SELECT * FROM provinsi_tb WHERE id = '$id'";
    $queryGet = $con->query($sqlGet);
    $dataGet = $queryGet->fetch_assoc();

    $daftarPulau = ['Sumatra', 'Jawa', 'Kalimantan', 'Sulawesi', 'Papua'];
  ?>

    <form action="" method="post" class='form__tambah' enctype="multipart/form-data">
      <h2>Edit Provinsi</h2>
      <label>Nama</label><input type="text" name="nama" value="<?= $dataGet['nama'] ?>">
      <label>Diresmikan</label><input type="date" name="diresmikan" value="<?= $dataGet['diresmikan'] ?>">
      <label>Photo</label><input type="text" name="photo" value="<?= $dataGet['photo'] ?>">
      <label>Pulau</label><select name="pulau">
        <?php 
          for ($i=0; $i < count($daftarPulau); $i++) { 
            if ($dataGet['pulau'] == $daftarPulau[$i]) {
              echo "
              <option value='$daftarPulau[$i]' selected>$daftarPulau[$i]</option>
              ";
            }else{
              echo "
              <option value='$daftarPulau[$i]'>$daftarPulau[$i]</option>
              ";
            }
          }
        ?>
      </select>
      <button type="submit" class='btn-submit'>Edit</button>
    </form>
  </div>
</body>
</html>

<?php 
  if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $diresmikan = $_POST['diresmikan'];
    $photo = $_POST['photo'];
    $pulau = $_POST['pulau'];
    $sql = "UPDATE provinsi_tb SET nama = '$nama', diresmikan = '$diresmikan', photo = '$photo', pulau = '$pulau' WHERE id = '$id'";

    if ($con->query($sql)) {
      header('location:index.php');
    }else{
      echo "gagal";
    }
  }
?>