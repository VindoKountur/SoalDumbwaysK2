<?php include 'koneksi.php'; ?>
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
    <div class="logo"><a href="index.php"><h1>Provinsi dan Kabupaten</h1></a></div>
    <nav class="mainnav">
      <ul>
        <li><a href="./provinsi.php">Add Provinsi</a></li>
        <li><a href="./kabupaten.php">Add Kabupaten</a></li>
      </ul>
    </nav>
  </header>
  <div class="main mid">
    <?php 
      $sqlProvinsi = "SELECT * FROM provinsi_tb";
      $queryProvinsi = $con->query($sqlProvinsi);
    ?>
    <form action="" method="post" class='form__tambah'>
      <h2>Tambah Kabupaten</h2>
      <label>Nama Kabupaten</label><input type="text" name="nama">
      <label>Diresmikan</label><input type="date" name="diresmikan">
      <label>Photo (Endpoint) </label><input type="text" name="photo">
      <label>Provinsi</label><select name="provinsi">
        <?php 
          while ($dataProvinsi = $queryProvinsi->fetch_assoc()){
            echo "
            <option value='$dataProvinsi[id]'>$dataProvinsi[nama]</option>
            ";
          }
        ?>
      </select>
      <button type="submit" class='btn-submit'>Tambah</button>
    </form>
  </div>
</body>
</html>
<?php 
  if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $diresmikan = $_POST['diresmikan'];
    $photo = $_POST['photo'];
    $provinsi = $_POST['provinsi'];

    $sql = "INSERT INTO kabupaten_tb (id, nama, provinsi_id, diresmikan, photo) VALUES ('', '$nama', '$provinsi', '$diresmikan', '$photo')";

    if ($con->query($sql)) {
      header('location:index.php');
    }else{
      echo "gagal";
    }
  }
?>