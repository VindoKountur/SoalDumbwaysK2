<?php 
  include '../koneksi.php';
  
  $id = $_GET['id'];
  
  $sqlhapus = "DELETE FROM kabupaten_tb WHERE id = '$id'";
  $del = $con->query($sqlhapus);
  if ($del === true) {
    header('location:index.php');
  }else{
    echo "gagal hapus";
  }
  ?>