<?php
  // defenisikan koneksi
  require('koneksi.php');
  // cek apakah ada parameter ID dikirim
  if (isset($_GET['productID'])) {
    // jika ada, ambil nilai id
    $id     = $_GET['productID'];
    // query SQL menghapus data berdasarkan id yg dipilih
    $sql    = "DELETE from as_products WHERE productID='".$id."'";
    // hapus data pada database
    $query  = mysqli_query($conn,$sql);
    // cek apakah proses hapus data berhasil
    if(mysqli_affected_rows($conn)) {
      // jika berhasil, redirect kehalaman index.php
      header("Location:productData.php");
   } else {
      // jika tidak redirect juga kehalaman index.php
      header("Location:productData.php");
    }
  }
 ?>