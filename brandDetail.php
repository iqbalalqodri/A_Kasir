
 <?php
include "koneksi.php";
include 'kodepj.php';
session_start();
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
}
require_once('header.php');
 ?>
<html>
<head>
<title>brand Detail</title>
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Pengguna/Akun</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pengguna.php"><i class="fa fa-users"></i> Daftar pengguna</a></li>
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

<li class="active treeview">
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

    <li class="active treeview">
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
           <li><a href="sales_report.php"><i class="fa fa-circle-o"></i> Laporan Penjualan </a></li>
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
        Master Brand
        <small>Tambah, Lihat, Update dan Hapus Brand</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="brandData.php">Brand</a></li>
        <li><a href="#">Detail Brand</a></li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title">Detail Brand </span> 
                
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
if (isset($_GET['brandID'])) {
    // jika ada ambil nilai id
    // $id = $_GET['productID'];
    //    $id=$_GET['productID'];
    // $supplierID=$_GET['supplierID'];
    $brandID=$_GET['brandID'];
    // $categoryID=$_GET['categoryID'];
  } else {
    // jika tidak ada redirect ke index.php
    header('Location:brandData.php');
  } 
 
      // query SQL menampilkan data dari table tbl_biodata
      $sql_brand= "SELECT * FROM as_brands 
              WHERE brandID='$brandID'";
              $brand = mysqli_query($conn, $sql_brand);

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 <title>Detail Produk</title>
 </head>
 <body>
 
<form action="#" method="POST">
  <?php
  $strTbl = "";
      $strTbl .= "<table>";
 if (mysqli_num_rows($brand) > 0) {
        // jika ada tampilkan kedalam tabel
                      $data = mysqli_fetch_assoc($brand);
                     
                      $strTbl .= "<tr>";
                      $strTbl .= "<td>brandName</td>";
                      $strTbl .= "<td> : ".$data['brandName']."</td>";
                      $strTbl .= "</tr>";
                      $strTbl .= "<tr>";
                      $strTbl .= "<td>brandStatus:</td>";
                      $strTbl .= "<td> : ".$data['brandStatus']."</td>";
                      $strTbl .= "</tr>";
                      $strTbl .= "<tr>";
                      $strTbl .= "<td>createdDate</td>";
                      $strTbl .= "<td> : ".$data['createdDate']."</td>";
                      $strTbl .= "</tr>";
                      $createdid = $data['createdUserID'];
                       $sql_userc="SELECT * FROM as_users 
                            WHERE userID='$createdid'";
                            $query_userc = mysqli_query($conn,$sql_userc);
                            $userc= mysqli_num_rows($query_userc);
                            if ($userc > 0) { 
                              $usercreate = mysqli_fetch_assoc($query_userc);
                            }
                      $strTbl .= "<tr>";
                      $strTbl .= "<td>createdUserID</td>";
                      $strTbl .= "<td> : ".$usercreate['userName']."</td>";
                      $strTbl .= "</tr>";
                      $strTbl .= "<tr>";
                      $strTbl .= "<td>modifiedDate</td>";
                      $strTbl .= "<td> : ".$data['modifiedDate']."</td>";
                      $strTbl .= "</tr>";
                      $strTbl .= "<tr>";
                      $modifiedid= $data['modifiedUserID'];
                      $strTbl .= "<td>modifiedUserID</td>";

                      $sql_userid="SELECT * FROM as_users
                                    WHERE userID='$modifiedid'";
                            $query_userid = mysqli_query($conn,$sql_userid);
                            $userid= mysqli_num_rows($query_userid);
                    if ($userid > 0) {
                              $usermodified = mysqli_fetch_assoc($query_userid);
              
                      $strTbl .= "<td> : ".$usermodified['userFullName']."</td>";
                      $strTbl .= "</tr>";       
                    } else {
                      $strTbl .="<td colspan='2'> : belum di modifikasi</td>";
                    }
                    $strTbl .= "</table>";
    }
      // tampilkan tabel pada halaman
        print($strTbl); 
        ?>      
 </body>
 </html>
 </body>
 </html></div>
</div>
</div>
</div>
</section>

   <script language="JavaScript" type="text/javascript">
      function hapus(categoryID){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'categoryHapus.php?categoryID=' + categoryID ;
        }
      }
    </script>
</body>
</html>


























</div>


   <script language="JavaScript" type="text/javascript">
      function hapus(brandID){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'brandHapus.php?brandID=' + brandID;
        }
      }
    </script>
</body>
</html>
<?php require_once('footer.php'); ?>



































 <?php 
// session_start();
include'koneksi.php';
// Cek apakah parameter ID ada
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
}
  
      
      // cek apakah $biodata nilai kosong atau tidak
     ?>
  </body>
</html>       