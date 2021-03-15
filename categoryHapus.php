<?php
  // defenisikan koneksi
  require('koneksi.php');
  // cek apakah ada parameter ID dikirim
  if (isset($_GET['categoryID'])) {
    // jika ada, ambil nilai id
    $id     = $_GET['categoryID'];
    // query SQL menghapus data berdasarkan id yg dipilih
    $sql    = "DELETE from as_categories WHERE categoryID='".$id."'";
    // hapus data pada database
    $query  = mysqli_query($conn,$sql);
    // cek apakah proses hapus data berhasil
    if(mysqli_affected_rows($conn)) {
      // jika berhasil, redirect kehalaman index.php
      header("Location:categoryData.php");
   } else {
      // jika tidak redirect juga kehalaman index.php
      header("Location:categoryData.php");
    }
  }
 ?>