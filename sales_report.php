<?php
error_reporting(0);
  date_default_timezone_set('Asia/Jakarta');
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
<title>Data Kategori</title>
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

        <?php if ($_SESSION['userlevel']==1) { ?>


        <li>
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Halaman Utama</span>
          </a>
        </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            </span>
            <span> Pengguna/Akun</span>
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
          Produk
            <!-- <span class="pull-right-container"> -->
            <i class="fa fa-angle-left pull-right"></i>
              <!-- </span> -->
            </a>
            <ul class="treeview-menu">

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


     <li class=" active treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="salesTransactions.php?&kodepj=<?php echo $kode; ?>"><i class="fa fa-circle-o"></i> Transaksi Penjualan</a></li>
            <li class="active"><a href="sales_report.php"><i class="fa fa-circle-o"></i> Laporan penjualan</a></li>
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

        <?php  } if ($_SESSION['userlevel']== 2) { ?>
<li>
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Halaman Utama</span>
          </a>
        </li>

          
                 <li class="active treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="salesTransactions.php?&kodepj=<?php echo $kode; ?>"><i class="fa fa-circle-o"></i> Transaksi Penjualan</a></li>
            <li class="active"><a href="sales_report.php"><i class="fa fa-circle-o"></i> Daftar Transaksi</a></li>
          </ul>
        </li>

      <?php   } ?>

      </ul>
    </section>
 </aside>

 <div class="content-wrapper">

      <section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i></a></li>
        <li><a href="#"></a></li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">

 <form action="" method="post">
<div class="form-group">
                
                  <div class="col-sm-8">
                    <input name="tgl_awal" type="date"  class="form-group">
                    <input name="tgl_akhir" type="date"class="form-group"  > 
                    
                   <button type="download" name="submit_1" class="btn btn-warning" style="margin-right: 5px;" >
                  <i class="fa fa-eye"></i> Lihat
                  </button>

                  </div>
                </div>
</form>


 <form action="sales_report_print.php" method="post">
<div class="form-group">
                
                  <div class="col-sm-4">
                    <input name="tgl_awal" type="date"  class="form-group">
                    <input name="tgl_akhir" type="date"class="form-group" value="" > 
                    <?php if ($_POST['tgl_awal']) {
                        



                    } ?>
                   <button type="download" name="submit" class="btn btn-success " style="margin-right: 5px;" >
                  <i class="fa fa-print"></i> cetak
                  </button>

                  </div>
                </div>
</form>



<?php if (isset($_POST['submit_1'])) {
 ?>
<table  class='table table-striped'>
      <thead>
<tr>
<th style='width: 10px'>No</th>
<th style='width: 10px'>Tanggal</th>
<th style='width: 140px'>kode Produk</th>
<th style='width: 140px'>Nama Produk</th>
<th style='width: 140px'>Harga_beli</th>
<th style='width: 140px'>Harga_jual</th>
<th style='width: 200px'>stok</th>
<th style='width: 100px'>Gambar</th>
<th style='width: 100px'>Jumlah</th>
<th style='width: 100px'>Total</th>
</tr>
</thead>
<tbody>
  <?php   
      $tgl_awal = $_POST['tgl_awal'];
      $tgl_akhir = $_POST['tgl_akhir'];

     $sql_t= "SELECT * FROM as_sales_detail_transactions,as_products where
      as_sales_detail_transactions.productBarcode=as_products.productBarcode AND date_sale BETWEEN '$tgl_awal' and '$tgl_akhir' ";
      $sql_tt = mysqli_query($conn,$sql_t);


 $no=1;    
        while ($value = mysqli_fetch_assoc($sql_tt)) {


   ?>
<tr>
<td><?php echo $no++;   ?></td>
<td><?php echo date('d F Y', strtotime($value['date_sale']));   ?></td>
<td><?php echo $value['productBarcode'];   ?></td>
<td><?php echo $value['productName'];   ?></td>
<td><?php echo $value['productBuyPrice'];   ?></td>
<td><?php echo $value['productSalePrice'];   ?></td>
<td><?php echo $value['productStock'];   ?></td>
<td><img src="gambar_produk/<?php echo  $value['image'];  ?> " width="50"  height="50"></td>
<td><?php echo $value['detailQty'];   ?></td>
<td><?php echo $value['detailSubtotal'];   ?></td>



</tr>

 <?php 

$total_pj = $total_pj + $value['detailSubtotal'];

} 

?>
</tbody>

<tr>
  <th style='width: 10px'></th>
<th style='width: 10px'></th>
<th style='width: 140px'></th>
<th style='width: 140px'></th>
<th style='width: 140px'>Total Penjualan</th>
<th style='width: 140px'></th>
<th style='width: 200px'></th>
<th style='width: 100px'></th>
<th style='width: 100px'></th>
<th style='width: 100px'><?php echo number_format($total_pj) ?></th>
</tr>
<?php } ?>
         
        </table>

            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              

              <ul class="pagination pagination-sm no-margin pull-right">
                  
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

</body>
</html>
<?php require_once('footer.php'); ?>

