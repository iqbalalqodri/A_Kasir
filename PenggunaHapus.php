<?php
  // defenisikan koneksi
  require('koneksi.php');
  // cek apakah ada parameter ID dikirim
  if (isset($_GET['userID'])) {
    // jika ada, ambil nilai id
    $id     = $_GET['userID'];
    // query SQL menghapus data berdasarkan id yg dipilih
    $sql    = "DELETE from as_users WHERE userID='".$id."'";
    // hapus data pada database
    $query  = mysqli_query($conn,$sql);
    // cek apakah proses hapus data berhasil
    if(mysqli_affected_rows($conn)) {
      // jika berhasil, redirect kehalaman index.php
      header("Location:pengguna.php");
   } else {
      // jika tidak redirect juga kehalaman index.php
      header("Location:pengguna.php");
    }
  }
 ?>