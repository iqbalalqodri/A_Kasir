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
<title>Data supplier</title>
</head>
<body>
  <a href="supplierTambah.php">+</a>
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

    <li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="supplierData.php"><i class="fa fa-database"></i> Daftar Supplier</a></li>
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
        Master Supplier
        <small>Tambah, Lihat, Update dan Hapus Supplier</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="supplierData.php">Supplier</a></li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title">Daftar Seluruh Supplier </span> 
                <a class='btn btn-xs  btn-success' href="supplierTambah.php"><i class ='fa fa-plus'></i> Tambah supplier </a>
              </div>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">



<?php  
    $sql = "SELECT * FROM as_suppliers";
      // tampung data (dalam array) kedalam variable $biodata
      $supplierData = mysqli_query($conn, $sql);

      // cek apakah nilai halaman ada atau tidak
      if (isset($_GET['hal'])) {
        // jika ada, ambil nilai halaman
        $halaman = $_GET['hal'];
      } else {
        // jika tidak, set nilai halaman jadi 1
        $halaman = 1;
      }
      // total data per halaman
      $perHalaman = 5;
      // cek apakah jumlah halaman lebih besar dari 1
      if ($halaman > 1) {
        // jika iya, maka set nilai awal halaman
        $start = ($halaman * $perHalaman) - $perHalaman;
      } else {
        // jika tidak set nilai awal dengan 0
        $start = 0;
      }
      // hitung total baris data dari database
      $totalRow = mysqli_num_rows($supplierData);
      // set nilai total halaman dari baris database
      $TotalHalaman = ceil($totalRow/$perHalaman);
      // ambil data dibatasi sesuai halaman awal dan jumlah per halaman
      $sqlHal = mysqli_query($conn," SELECT * FROM as_suppliers LIMIT $start, $perHalaman");
      // variable nomor urut
      $nomor = $start+1;

      // tampung data (dalam array) kedalam variable $biodata
      $hasil = mysqli_query($conn, $sql);
      // variable untuk membuat tabel HTML
      $tbl= "";
      $tbl.= "<table class='table table-striped'>";
      $tbl.= "<tr>";
      $tbl.= "<td>No</td>";
      // $tbl.= "<td> code supplier</td>";
      $tbl.= "<td> nama supplier</td>";
      $tbl.= "<td> alamat supplier</td>";
      $tbl.= "<td> no telphone supplier</td>";
      $tbl.= "<td> no telp no FAX supplier</td>";
      $tbl.= "<td>nama pemilik supplayer</td>";
      // $tbl.= "<td>no telphone pemilik</td>";
      $tbl.= "<td>status supplayer</td>";
      $tbl.= "<td>aksi</td>";

      $tbl.= "</tr>";
      // variable nomor urut
      // cek apakah $biodata nilai kosong atau tidak
      if (mysqli_num_rows($sqlHal) > 0) {
        // jika ada looping untuk membaca seluruh data
        // dan tampilkan kedalam tabel
        while ( $value = mysqli_fetch_assoc($sqlHal)) {

          $tbl.= "<tr>";
          $tbl.= "<td>".$nomor."</td>";
          // $tbl.= "<td>".$value['supplierCode']."</td>";
          $tbl.= "<td>".$value['supplierName']."</td>";
          $tbl.= "<td>".$value['supplierAddress']."</td>";
          $tbl.= "<td>".$value['supplierPhone']."</td>";
          $tbl.= "<td>".$value['supplierFax']."</td>";
          $tbl.= "<td>".$value['supplierContactPerson']."</td>";
          // $tbl.= "<td>".$value['supplierCPHp']."</td>";
          $status = $value['supplierStatus'];
          if ($status == "Y" ) {
            $status = "ready";
          }else {
            $status = "Unready";
          }
          $tbl.= "<td>".$status."</td>";
          // $tbl.= "<td>".$value['createdDate']."</td>";

          // $createdID =$value['createdUserID'];
          // $sql_Modified= "SELECT * FROM as_users 
          //     WHERE userID='$createdID'";
          //     $query_modifiedID = mysqli_query($conn,$sql_Modified);
          //     $modifiedID= mysqli_num_rows($query_modifiedID);
          //     if ($modifiedID > 0) {
          //        foreach ($query_modifiedID as $key =>$create) { 
          //              $tbl.= "<td>".$create['userFullName']."</td>";   
          //         }
          //     }

          // $tbl.= "<td>".$value['modifiedDate']."</td>";

          // $modifiedID =$value['modifiedUserID'];
          // $sql_Modified= "SELECT * FROM as_users 
          //     WHERE userID='$modifiedID'";
          //     $query_modifiedID = mysqli_query($conn,$sql_Modified);
          //     $modifiedID= mysqli_num_rows($query_modifiedID);
          //     if ($modifiedID > 0) {
          //        foreach ($query_modifiedID as $key =>$modified) { 
          //              $tbl.= "<td>".$modified['userFullName']."</td>";   
          //         }
          //     }
          //     else{
          //              $tbl.= "<td>belum di edit</td>";   

          //     }
        
        
          $tbl.= "<td>
        <a class='btn btn-xs btn-primary' href='supplayerDetail.php?supplierID=".$value['supplierID']."''><i class='fa fa-eye'></i></a>
          <a class='btn btn-xs btn-warning' href=supplayerUpdate.php?supplierID=".$value['supplierID']."><i class='fa fa-edit'></i></a>
          <a class='btn btn-xs btn-danger' href='javascript:hapus(".$value['supplierID'].")'><i class='fa fa-trash'></i></a></td>";
          $tbl.= "</tr>";
          $nomor++;
        }
      } else {
        $tbl.="<tr><td colspan='4'>Ooouppsss... Maaf, data masih kosong, tambahkan data dari Database terlebih dahulu</td></tr>";
      } 
      $tbl.= "</table>";
      print($tbl);
     ?>


            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              

              <ul class="pagination pagination-sm no-margin pull-right">
                     <?php       
                for ($i=1; $i <= $TotalHalaman ; $i++) {
                
                 echo  "<li><a href='?hal=".$i."'>$i</a><li>";
                          } 
                ?>
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


   <script language="JavaScript" type="text/javascript">
      function hapus(supplierID){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'supplierHapus.php?supplierID=' + supplierID;
        }
      }
    </script>
</body>
</html>
<?php require_once('footer.php'); ?>

























































<?php
include "koneksi.php";
// session_start();
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
}
 ?>
<html>
<head>
<title>supplier data</title>
</head>
<body>
	<a href="supplierTambah.php">+</a>

     	 <script language="JavaScript" type="text/javascript">
      function hapusData(supplierID){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'supplierHapus.php?supplierID=' + supplierID;
        }
      }
    </script>	
</body>
</html>