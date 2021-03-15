




 <?php
 date_default_timezone_set('Asia/Jakarta');
include "koneksi.php";
session_start();
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
}
include 'kodepj.php'; 
require_once('header.php');
 ?>
<html>
<head>
<title>Data brand</title>
</head>
<body>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php  
          $user=$_SESSION['userid'];
          $sql_USER="SELECT * FROM as_users WHERE userID='$user'";
                            $query = mysqli_query($conn,$sql_USER);
                            $userID= mysqli_num_rows($query);
                    if ($userID > 0) {
                              $user = mysqli_fetch_assoc($query);
                              
                            echo "<img src=image/".$user['gambar']."  class='img-circle' alt='User  Image'>";  
                    }





?>
        </div>
        <div class="pull-left info">
          <p><?php 
              $user=$_SESSION['userid'];
              $sql_user= mysqli_query($conn,"SELECT * FROM as_users where userID='$user' ");
              $hasil_user=mysqli_num_rows($sql_user);
            if ($hasil_user > 0) {
              $user = mysqli_fetch_assoc($sql_user);
              echo $user['userFullName'];
            }

             ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Halaman Utama</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Pengguna/Akun</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pengguna.php"><i class="fa fa-users"></i> Daftar pengguna</a></li>
            <li class="active"><a href="penggunaTambah.php"><i class="fa fa-user-plus"></i> Tambah pengguna</a></li>
          </ul>
        </li>
<li class="treeview">
          <a href="#">
            <i class="fa fa-user "></i>
            <span>Pelanggan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="pelangganData.php"><i class="fa fa-users"></i> Daftar pelanggan</a></li>
            <li><a href="pelangganTambah.php"><i class="fa fa-user-plus"></i> Tambah pelanggan</a></li>
          </ul>
        </li>
        

<li class="treeview">
          <a href="#">
            <i class="fa  fa-list"></i>
              <span>MASTER DATA</span>
              <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

 <ul class="treeview-menu">
    <li class="treeview">
      <a href="#">
        <i class="fa  fa-cubes -chart"></i>
          <span>Produk</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a><ul class="treeview-menu">
          <li><a href="productData.php"><i class="fa fa-database"></i> Daftar Produk</a></li>
        <li><a href="productTambah.php"><i class="fa fa-plus"></i> Tambah Produk</a></li>
      </ul>
    </li>

    <li class="treeview">
          <a href="#">
            <i class="fa fa-photo"></i>
            <span>Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="brandData.php"><i class="fa fa-database"></i> Daftar Brand</a></li>
            <li><a href="brandTambah.php"><i class="fa fa-plus"></i> Tambah Brand</a></li>
          </ul>
        </li>

    <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="supplierData.php"><i class="fa fa-database"></i> Daftar Supplier</a></li>
            <li><a href="supplierTambah.php"><i class="fa fa-plus"></i> Tambah Supplier</a></li>
          </ul>
        </li> 

    <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-tags"></i> <span>Kategori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="categoryData.php"><i class="fa fa-database"></i> Daftar Kategori</a></li>
            <li><a href="categoryTambah.php"><i class="fa fa-plus"></i> Tambah Kategori</a></li>
          </ul>
        </li>
</ul>
</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="salesTransactions.php?&kodepj=<?php echo $kode; ?>"><i class="fa fa-circle-o"></i> Transaksi Penjualan</a></li>
            <li><a href="sales_report.php"><i class="fa fa-circle-o"></i> Laporan penjualan</a></li>
          </ul>
        </li>
                <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart "></i> <span>Pembelian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Transaksi Pembelian</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Daftar Pembelian</a></li>
          </ul>
        </li>
   
                  <li class="treeview">
          <a href="#">
            <i class="fa fa-reply"></i> <span>Retur</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Daftar Retur</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Tambah Retur</a></li>
          </ul>
        </li>

      </ul>
    </section>
 </aside>

 <div class="content-wrapper">

      <section class="content-header">
      <h1>
        Master Pengguna
        <small>""</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Pengguna.php"><i class="fa fa-home"></i> Pengguna</a></li>
        <li><a href="penggunaTambahg.php">Pengguna</a></li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title">Tambah Pengguna </span> 
              </div>
              <div class="box-tools">
              </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">

<?php 
include "koneksi.php";
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>

 </head>
 <body>
  <?php 
   ?>
<form action="#" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body"> 
              <div class="form-group">
                 <div class="col-sm-3"> <a  href="pengguna.php" >[<i class="fa fa-fw fa-reply" >KEMBALI]</i></a></div>
              </div> 
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIP Pengguna :</label>

                  <div class="col-sm-10">
                    <input name="userNIP" type="text" class="form-control" placeholder="NIP Pengguna"  required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap Pengguna :</label>

                  <div class="col-sm-10">
                    <input name="userFullName" type="text" class="form-control" placeholder="Nama Lengkap Pengguna "  required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Nomor Tlp Pengguna:</label>

                  <div class="col-sm-10">
                    <input name="userPhone" type="text" class="form-control" placeholder="Nomor Tlp Pengguna "  required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">level Pengguna :</label>

                  <div class="col-sm-10">
                    <select name="userLevel" type="text" class="form-control" placeholder="level Pengguna "  required="">
                      <option value="">-----pilih Level------</option>
                      <option value="1">admin</option>
                      <option value="2">kasir</option>
                      <option value="3"></option>

                      </select>
                  </div></div>
              
          




 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">userBlocked :</label>

                  <div class="col-sm-10">
                    <input name="userBlocked" type="text" class="form-control" placeholder="userBlocked "  required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">userName :</label>

                  <div class="col-sm-10">
                    <input name="userName" type="text" class="form-control" placeholder="userName "  required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">userPassword :</label>

                  <div class="col-sm-10">
                    <input name="userPassword" type="text" class="form-control" placeholder="userPassword "  required="">
                  </div>

  </div>            
<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">foto :</label>

                  <div class="col-sm-10">
                    <input name="file" type="file" >
                  </div>
                </div>


                </div>
                </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                <button  name="submit" class="btn btn-block btn-success">Tambah</button>                
                  </div>


                  </div>

                  
                 </div>
                </div>
                </div>

</form>





 <?php



// if (isset($_POST['submit'])) { //Jika tombol unggah di klik

//     $userNIP=$_POST['userNIP'];
//     $userFullName=$_POST['userFullName'];
//     $userPhone=$_POST['userPhone'];
//     $userLevel=$_POST['userLevel'];
//     $userBlocked=$_POST['userBlocked'];
//     $userName=$_POST['userName'];
//     $userPassword=$_POST['userPassword'];
//      $gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"
//  $alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"
//  $folder = "image/";
//     $createdUserID =$_SESSION ['userid'];
//     $createdDate     = date("Y-m-d H:i:s");

//     $tambah = "INSERT INTO as_users (userNIP,userFullName,userPhone,userLevel,userBlocked,userName,userPassword,createdUserID,createdDate) VALUES ('$userNIP','$userFullName','$userPhone','$userLevel','$userBlocked','$userName','$userPassword','$alamat','$createdUserID','$createdDate')";
//           if (mysqli_query($conn,$tambah)) {
//           // header("location:brandData.php");
//         echo "tambah user berhasil";
//       }else{
//           echo "maaf data gagal disimpan";
//       }
// }



//  $pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi
//  if ($pindah) { //Jika gambar berhasil dipindah
//   mysqli_query($conn, "INSERT INTO as_users VALUES('','$alamat')"); //Masukan alamat gambar ke database
//   echo "<div>Berhasil Upload Gambar!</div>";
//  }
//  else{//Jika gambar gagal dipindah
//   echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan
//  }
// }


















  if (isset($_POST['submit'])) {
  
    $userNIP=$_POST['userNIP'];
    $userFullName=$_POST['userFullName'];
    $userPhone=$_POST['userPhone'];
    $userLevel=$_POST['userLevel'];
    $userBlocked=$_POST['userBlocked'];
    $userName=$_POST['userName'];
    $userPassword=$_POST['userPassword'];
     $alamat = $_FILES['file']['name'];
    $createdUserID =$_SESSION ['userid'];
    $createdDate     = date("Y-m-d H:i:s");

    $tambah = "INSERT INTO as_users (userNIP,userFullName,userPhone,userLevel,userBlocked,userName,userPassword,gambar,createdUserID,createdDate) VALUES ('$userNIP','$userFullName','$userPhone','$userLevel','$userBlocked','$userName','$userPassword','$alamat','$createdUserID','$createdDate')";
      if (mysqli_query($conn,$tambah)) {
          // header("location:brandData.php");
        echo "tambah user berhasil";
      $gambar = $_FILES['file']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"
      $alamat = $_FILES['file']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"
      $folder = "image/";
      $pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

      }else{
          echo "maaf data gagal disimpan";
      }}


  
 // if ($pindah) { //Jika gambar berhasil dipindah
 //  mysqli_query($conn, "INSERT INTO as_users(gambar) VALUES('$alamat')"); //Masukan alamat gambar ke database
 //  echo "<div>Berhasil Upload Gambar!</div>";
 // }
 // else{//Jika gambar gagal dipindah
 //  echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan
 // }

 //    }
  ?> 
 </body>
 </html></div>
</div>
</div>
</div>
</section>


</div>

<?php require_once('footer.php'); ?>

