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
    <div class="logo"><a href="index.php"><h1>Provinsi dan kabupaten</h1></a></div>
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
    $sqlHobby = "SELECT * FROM hobby_tb";
    $queryHobby = $con->query($sqlHobby);
  ?>

    <form action="" method="post" class='form__tambah' enctype="multipart/form-data">
      <h2>Tambah Provinsi</h2>
      <label>Nama Provinsi</label><input type="text" name="nama">
      <label>Diresmikan</label><input type="date" name="diresmikan">
      <label>Photo (Endpoint) </label><input type="text" name="photo">
      <label>Pulau</label><select name="pulau">
        <option value="Sumatra">Sumatra</option>
        <option value="Jawa">Jawa</option>
        <option value="Kalimantan">Kalimantan</option>
        <option value="Sulawesi">Sulawesi</option>
        <option value="Papua">Papua</option>
        <?php 
          // while ($dataHobby = $queryHobby->fetch_assoc()){
          //   echo "
          //   <option value='$dataHobby[id]'>$dataHobby[name]</option>
          //   ";
          // }
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
    $pulau = $_POST['pulau'];

    $sql = "INSERT INTO provinsi_tb (id, nama, diresmikan, photo, pulau) VALUES ('', '$nama', '$diresmikan', '$photo', '$pulau')";
    if ($con->query($sql)) {
      header('location:index.php');
    }else{
      echo "gagal";
    }
  }
?>