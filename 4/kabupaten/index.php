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
     $sql = "SELECT * FROM kabupaten_tb";
     $query = $con->query($sql);
    ?>
  <header>
    <div class="logo"><a href="../index.php"><h1>Provinsi dan Kabupaten</h1></a></div>
    <nav class="mainnav">
      <ul>
        <li><a href="../provinsi.php">Add Provinsi</a></li>
        <li><a href="../kabupaten.php">Add Kabupaten</a></li>
      </ul>
    </nav>
  </header>
  <div class="judul">
    <h2>Daftar Kabupaten</h2>
  </div>
  <div class="main">
    <?php 
      while ($data = $query->fetch_assoc()) {
        $id = $data['id'];
        $nama = $data['nama'];
        $diresmikan = $data['diresmikan'];
        $photo = $data['photo'];
        $provinsi_id = $data['provinsi_id'];

        echo "
        <div class='box'>
        <div class='box__data'>
          <img src='$photo' alt='Foto' width='150' height='150'>
          <h3 class='box__data__nama'>$nama</h3>
          <p class='box__data__hobby'>$diresmikan</p>
        </div>
        <div>
          <button class='box__btn'><a href='detail.php?id=$id'>Detail</a></button>
        </div>
        <div>
          <button class='box__btn edit'><a href='edit.php?id=$id'>Edit</a></button>
        </div>
        <div>
          <button class='box__btn hapus'><a href='del.php?id=$id'>Hapus</a></button>
        </div>
      </div>
        ";
      }
    ?>
    
  </div>
</body>
</html>