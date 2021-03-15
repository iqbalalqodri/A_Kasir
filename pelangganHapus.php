<?php
  // defenisikan koneksi
  require('koneksi.php');
  // cek apakah ada parameter ID dikirim
  if (isset($_GET['kode_pelanggan'])) {
    // jika ada, ambil nilai id
    $id     = $_GET['kode_pelanggan'];
    // query SQL menghapus data berdasarkan id yg dipilih
    $sql    = "DELETE from as_customers WHERE kode_pelanggan='".$id."'";
    // hapus data pada database
    $query  = mysqli_query($conn,$sql);
    // cek apakah proses hapus data berhasil
    if(mysqli_affected_rows($conn)) {
      // jika berhasil, redirect kehalaman index.php
      header("Location:pelangganData.php");
   } else {
      // jika tidak redirect juga kehalaman index.php
      header("Location:pelangganData.php");
    }
  }
 ?>