
<?php 
error_reporting(0);
include "koneksi.php";
session_start();
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
}
include 'kodepj.php'; 
require_once('header.php');
?>
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
                              
                            echo "<img src=image/".$user['gambar']."  class='img-circle' width='50'  height='50'>";  
                    }





?>
        </div>
        <div class="pull-left info">
          <p><?php  
          $user=$_SESSION['userid'];
          $sql_USER="SELECT * FROM as_users WHERE userID='$user'";
                            $query = mysqli_query($conn,$sql_USER);
                            $userID= mysqli_num_rows($query);
                    if ($userID > 0) {
                              $user = mysqli_fetch_assoc($query);
                            echo $user['userFullName'];    
                    }
                    echo "<br>"."anda sebagai"; 

          $user_L=$_SESSION['userid'];
          $sql_L="SELECT * FROM as_users WHERE userID='$user_L'";
                            $query_L = mysqli_query($conn,$sql_L);
                            $user_LL= mysqli_num_rows($query_L);
                            
                    if ($user_LL > 0) {

                      $user_L = mysqli_fetch_assoc($query_L);

                       if ($user_L['userLevel'] == 1) {
                         echo " "."admin";
                       }elseif ($user_L['userLevel'] == 2) {
                         echo " "."kasir";
                       } elseif ($user_L['userLevel'] == 3) {
                         echo " "."sss";
                       }   
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
            <li class="active"><a href="pengguna.php"><i class="fa fa-users"></i> Daftar pengguna</a></li>
            <li><a href="penggunaTambah.php"><i class="fa fa-user-plus"></i> Tambah pengguna</a></li>
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
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Daftar Pengguna</a></li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <form action="" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title">Daftar Seluruh Pengguna </span> 
                <a class='btn btn-xs  btn-success' href="penggunaTambah.php"><i class ='fa fa-plus'></i> Tambah Pengguna </a>
              </div>
              
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="search" class="form-control pull-right" placeholder="Search">

                  <!-- <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
                </div>
              </div>
              </form>
            </div>

            <!-- /.box-header -->
            <div class="box-body">



<?php  
$cari= $_POST['search'];
    $sql_serch= "SELECT * FROM as_users WHERE userFullName LIKE '%$cari%'";
    $hasil_Serch =  mysqli_query($conn,$sql_serch);
  


if (!isset($_POST['search'])) {
 

      $tbl= "";
      $tbl.= "<table class='table table-striped'>";
      $tbl.= "<tr>";
      $tbl.= "<th style='width: 10px'>No</th>";
      // $tbl.= "<th>supplier</th>";
      // $tbl.= "<th>categoryID</th>";
      // $tbl.= "<th>brandID</th>";
      $tbl.= "<th style='width: 100px'>userNIP</th>";
      $tbl.= "<th style='width: 250px'>userFullName </th>";
      // $tbl.= "<th>productImei</th>";
      $tbl.= "<th style='width: 100px'>userPhone</th>";
      $tbl.= "<th style='width: 100px'>userLevel</th>";
      
      $tbl.= "<th style='width: 100px'>blok</th>";
      $tbl.= "<th style='width: 100px'>userName</th>";
      $tbl.= "<th style='width: 100px'>password</th>";
      $tbl.= "<th style='width: 100px'>foto</th>";
      $tbl.= "<th>Aksi</th>";
      $tbl.= "</tr>";
      // variable nomor urut
      $nomor = 1;
      // cek apakah $biodata nilai kosong atau tidak
      if (mysqli_num_rows($hasil_Serch) > 0) {
        // jika ada looping untuk membaca seluruh data
        // dan tampilkan kedalam tabel
        foreach ($hasil_Serch as $key => $value) {
          $tbl.= "<tr>";
          $tbl.= "<td>".$nomor."</td>";
          // $tbl.= "<td>".$value['supplierName']."</td>";
          // $tbl.= "<td>".$value['categoryName']."</td>";
          // $tbl.= "<td>".$value['brandName']."</td>";
          $tbl.= "<td>".$value['userNIP']."</td>";
          $tbl.= "<td>".$value['userFullName']."</td>";
          // $tbl.= "<td>".$value['productImei']."</td>";
          $tbl.= "<td>".$value['userPhone']."</td>";

           $userr=$value['userLevel'];
          if ($userr==1) {
           $tbl.= "<td>"."admin"."</td>";
          }elseif ($userr==2) {
            $tbl.= "<td>"."kasir"."</td>";
}else{
              echo "maaf user level tidar tersedi";
            }



            
          
          $tbl.= "<td>".$value['userBlocked']."</td>";
          $tbl.= "<td>".$value['userName']."</td>";
          $tbl.= "<td>".$value['userPassword']."</td>";
          $tbl.= "<td>"."<img src=image/".$value['gambar']." width='50'  height='50' >"."</td>";
          $tbl.= "<td>
         <a class='btn btn-xs btn-warning' href='penggunaUpdate.php?userID=".$value['userID']."'><i class='fa fa-edit'></i></a>
         <a class='btn btn-xs btn-danger' href='javascript:hapus(".$value['userID'].")'><i class='fa fa-trash'></i></a></td>";
          $tbl.= "</tr>";
          $nomor++;
        }
      } else {
        $tbl.="<tr><td colspan='4'>Ooouppsss... Maaf, data masih kosong, tambahkan data dari Database terlebih dahulu</td></tr>";
      } 
      $tbl.= "</table>";
      print($tbl);

} if (isset($_POST['search'])) {



      $tbl= "";
      $tbl.= "<table class='table table-striped'>";
      $tbl.= "<tr>";
      $tbl.= "<th style='width: 10px'>No</th>";
      // $tbl.= "<th>supplier</th>";
      // $tbl.= "<th>categoryID</th>";
      // $tbl.= "<th>brandID</th>";
      $tbl.= "<th style='width: 100px'>userNIP</th>";
      $tbl.= "<th style='width: 250px'>userFullName </th>";
      // $tbl.= "<th>productImei</th>";
      $tbl.= "<th style='width: 100px'>userPhone</th>";
      $tbl.= "<th style='width: 100px'>userLevel</th>";
      
      $tbl.= "<th style='width: 100px'>blok</th>";
      $tbl.= "<th style='width: 100px'>userName</th>";
      $tbl.= "<th style='width: 100px'>password</th>";
      $tbl.= "<th style='width: 100px'>foto</th>";
      $tbl.= "<th>Aksi</th>";
      $tbl.= "</tr>";
      // variable nomor urut
      $nomor = 1;
      // cek apakah $biodata nilai kosong atau tidak
      if (mysqli_num_rows($hasil_Serch) > 0) {
        // jika ada looping untuk membaca seluruh data
        // dan tampilkan kedalam tabel
        foreach ($hasil_Serch as $key => $value) {
          $tbl.= "<tr>";
          $tbl.= "<td>".$nomor."</td>";
          // $tbl.= "<td>".$value['supplierName']."</td>";
          // $tbl.= "<td>".$value['categoryName']."</td>";
          // $tbl.= "<td>".$value['brandName']."</td>";
          $tbl.= "<td>".$value['userNIP']."</td>";
          $tbl.= "<td>".$value['userFullName']."</td>";
          // $tbl.= "<td>".$value['productImei']."</td>";
          $tbl.= "<td>".$value['userPhone']."</td>";

           $userr=$value['userLevel'];
          if ($userr==1) {
           $tbl.= "<td>"."admin"."</td>";
          }elseif ($userr==2) {
            $tbl.= "<td>"."kasir"."</td>";
}else{
              echo "maaf user level tidar tersedi";
            }



            
          
          $tbl.= "<td>".$value['userBlocked']."</td>";
          $tbl.= "<td>".$value['userName']."</td>";
          $tbl.= "<td>".$value['userPassword']."</td>";
          $tbl.= "<td>"."<img src=image/".$value['gambar']." width='80%' >"."</td>";
          $tbl.= "<td>
         <a class='btn btn-xs btn-warning' href='penggunaUpdate.php?userID=".$value['userID']."'><i class='fa fa-edit'></i></a>
         <a class='btn btn-xs btn-danger' href='javascript:hapus(".$value['userID'].")'><i class='fa fa-trash'></i></a></td>";
          $tbl.= "</tr>";
          $nomor++;
        }
      } else {
        $tbl.="<tr><td colspan='4'>Ooouppsss... Maaf, data masih kosong, tambahkan data dari Database terlebih dahulu</td></tr>";
      } 
      $tbl.= "</table>";
      print($tbl);

  
}




     ?>








            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              

              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


</div>



<?php require_once('footer.php'); ?>
<?php
include "koneksi.php";
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
}
 ?>
<html>
<head>
<title>Data category</title>
</head>
<body>
  <a href="categoryTambah.php">+</a>

   <script language="JavaScript" type="text/javascript">
      function hapus(userID){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'penggunaHapus.php?userID=' + userID ;
        }
      }
    </script>
</body>
</html>
