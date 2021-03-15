<?php
  // defenisikan koneksi
  require('koneksi.php');
  // cek apakah ada parameter ID dikirim
  if (isset($_GET['supplierID'])) {
    // jika ada, ambil nilai id
    $id     = $_GET['supplierID'];
    // query SQL menghapus data berdasarkan id yg dipilih
    $sql    = "DELETE from as_suppliers WHERE supplierID='".$id."'";
    // hapus data pada database
    $query  = mysqli_query($conn,$sql);
    // cek apakah proses hapus data berhasil
    if(mysqli_affected_rows($conn)) {
      // jika berhasil, redirect kehalaman index.php
      header("Location:supplierData.php");
   } else {
      // jika tidak redirect juga kehalaman index.php
      header("Location:supplierData.php");
    }
  }
 ?>
