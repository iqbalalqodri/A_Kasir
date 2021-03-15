  <?php 
  error_reporting(0);
  date_default_timezone_set('Asia/Jakarta');
  session_start();
  include 'koneksi.php';

  if (isset($_GET['productBarcode'])) {

  $Barcode=$_GET['productBarcode'];

}
include 'kodepj.php'; 
   ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transaksi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

<?php require_once('header.php'); ?>
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


<li class="">
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
            <li class="active"><a href="salesTransactions.php?&kodepj=<?php echo $kode; ?>"><i class="fa fa-circle-o"></i> Transaksi Penjualan</a></li>
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

        <?php }if ($_SESSION['userlevel']== 2) { ?>
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
            <li class="active"><a href="salesTransactions.php?&kodepj=<?php echo $kode; ?>"><i class="fa fa-circle-o"></i> Transaksi Penjualan</a></li>
            <li><a href="sales_report.php"><i class="fa fa-circle-o"></i>Laporan Penjualan</a></li>
          </ul>
        </li>
      <?php   } ?>

      </ul>
    </section>
 </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#007612</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">transaksi Penjualan</a></li>
        <li class="#"></li>
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <b>DELTA<b>
            <small class="pull-right">||Jam :<?php $Jam = date('H:i:s'); echo " ".$Jam; ?></small>
            <small class="pull-right">Tanggal :<?php $waktu = date('d-M-Y'); echo " ".$waktu; ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

 <section class="content">



<?php   

$kode = $_GET['kodepj'];   


 ?>


 <section class="content">
  <form action="" method="post">
<div class="form-group">
                
                  <div class="col-sm-10">
                    InvoiceID : <input name="kode" type="text" value=" <?php echo $kode; ?>" class="form-group" readonly="">
                    Barcode_produk : <input name="barcode" type="text"class="form-group" autofocus > 
                    <input type="submit" name="submit" class="btn btn-success" value="tambahkan">
                  </div>
                </div>
</form>

<?php 

  if (isset($_POST['submit'])) {
    $date = date("Y-m-d");
    $kode = $_POST['kode'];

    $barcode = $_POST['barcode'];

$createdDate     = date("Y-m-d H:i:s");
$date_sale     = date("Y-m-d ");

    $createdUserID   =$_SESSION['userid'];

    $modifiedDate    ="0000-00-00";

    $modifiedUserID  ='';


    $barang = mysqli_query($conn,"SELECT * FROM as_products  where productBarcode = '$barcode'");


while ($data_barang2 = $barang->fetch_assoc()) {
      $sisa = $data_barang2['productStock'];
      $harga_jual = $data_barang2['productSalePrice']; ///
      $jumlah = 1;
     $total = $jumlah * $harga_jual;
      if ($sisa < 1) {
        echo "stok habis";
      }else{
         $conn ->query("INSERT INTO as_sales_detail_transactions (
          invoiceID,
          productBarcode,
          detailQty,
          detailSubtotal,
          createdDate,
          date_sale,
          createdUserID,
          modifiedDate,
          modifiedUserID
          )
          VALUES(
          '$kode',
          '$barcode',
          '$jumlah',
          '$total',
          '$createdDate',
          '$date_sale',
          '$createdUserID',
          '$modifiedDate',
          '$modifiedUserID'

        )");
      }

    }



    } 



 ?>
            <div class="box-body">
              <div class="form-group">
<div class="col-sm-10">
              <center>daftar produk</center>
            </div></div>
<form action="#" method="post">
  <table  class='table table-bordered table-striped'>
      <thead>
<tr>
<th style='width: 10px'>No</th>
<th style='width: 140px'>kode Produk</th>
<th style='width: 140px'>Nama Produk</th>
<th style='width: 140px'>Harga</th>
<th style='width: 100px'>jumlah</th>
<th style='width: 100px'>Gambar</th>
<th style='width: 100px'>total</th>

<th>Aksi</th>
</tr>
</thead>
<tbody>
  <?php   
     $sql_t= "SELECT * FROM as_sales_detail_transactions,as_products where
      as_sales_detail_transactions.productBarcode=as_products.productBarcode AND invoiceID='$kode'";
      $sql_tt = mysqli_query($conn,$sql_t);


      // cek apakah $biodata nilai kosong atau tidak
        // jika ada looping untuk membaca seluruh data
        // dan tampilkan kedalam tabel
      $no=1;    
        while ($value = mysqli_fetch_assoc($sql_tt)) {
   ?>
<tr>
<td><?php echo $no++;   ?></td>
<td><?php echo $value['productBarcode'];   ?></td>
<td><?php echo $value['productName'];   ?></td>
<td><?php echo "Rp."."&nbsp".number_format($value['productSalePrice']);   ?></td>
<td><?php echo $value['detailQty'];   ?></td>
<td><img src="gambar_produk/<?php echo  $value['image'];  ?> " width="50"  height="50"></td>
<td><?php echo "Rp."."&nbsp".number_format($value['detailSubtotal']);   ?></td>
<td> 
 <a class="btn btn-xs btn-success" href="salesTransactionsTambah.php?detailID=<?php echo $value['detailID'] ?>&kodepj=<?php echo $kode; ?>&harga_jual=<?php echo $value['productSalePrice'] ?>&kode_b=<?php echo $value['productBarcode'] ?> " title="tambah"> <i class="fa fa-plus"></i></a>

  <a class="btn btn-xs btn-success" href="salesTransactionsKurang.php?detailID=<?php echo $value['detailID'] ?>&kodepj=<?php echo $kode; ?>&harga_jual=<?php echo $value['productSalePrice'] ?>&kode_b=<?php echo $value['productBarcode'] ?> " title="kurang"> <i class="glyphicon glyphicon-minus"></i></a>



<a class="btn btn-xs btn-danger" onclick="return confirm('apakah anda yakin mengahapus data ini ....?')" href="salesTransactionsHapus.php?detailID=<?php echo $value['detailID'] ?>&kodepj=<?php echo $kode; ?>&kode_b=<?php echo $value['productBarcode'] ?>&jumlah=<?php echo $value['detailQty'] ?> " title="hapus"> <i class="glyphicon glyphicon-remove"></i></a>
</td>
</tr>

 <?php 
$total_bayar = $total_bayar + $value['detailSubtotal'];
} 

?>


<?php $sql_tt= "SELECT * FROM as_sales_detail_transactions,as_products where
      as_sales_detail_transactions.productBarcode=as_products.productBarcode AND invoiceID='$kode'";
      $sql_ttt = mysqli_query($conn,$sql_tt); 

      $data = mysqli_fetch_assoc($sql_ttt);

        

      ?>

 <td colspan="6" style="text-align:right">Total</td>
 <td><input type="number" style="text-align:right" name="total_bayar" id="total_bayar" value="<?php echo $total_bayar  ?>" onkeyup="hitung();" ></td>
 <tr>
 <td colspan="6" style="text-align:right">Diskon</td>
 <td><input type="number" style="text-align:right" name="diskon" id="diskon"  value="<?php echo $data['productDiscount'];  ?>" onkeyup="hitung();" ></td>
 </tr>
 <td colspan="6" style="text-align:right">Potongan Diskon</td>
 <td><input type="number" style="text-align:right" name="potongan" id="potongan" ></td>
 <tr>
 <td colspan="6" style="text-align:right">Sub Total</td>
 <td><input type="number" style="text-align:right" name="total" id="s_total"></td>
 </tr>
 <tr>
 <td colspan="6" style="text-align:right">Bayar</td>
 <td><input type="number" style="text-align:right" name="bayar" id="bayar" onkeyup="hitung();"></td>
 </tr>
 <tr>
 <td colspan="6" style="text-align:right">Kembalian</td>
 <td><input type="number" style="text-align:right" name="k" id="kembali">
 </td>
 </tr>




</tbody>
    </table>
          <div class="row no-print">
        <div class="col-xs-12">
  
          <button type="download" name="simpan_pj" class="btn btn-success pull-right" style="margin-right: 5px;" onclick="window.open('salesprintSalesTransactions.php?kodepj=<?php echo $kode;  ?>')">
            <i class="fa fa-print"></i> Cetak
          </button>
        </div>
      </div>
  </form>
    </div>


    <?php 

    if (isset($_POST['simpan_pj'])) {
      $kode        = $_GET['kodepj'];
      $trxDate     = date("Y-m-d");
      $total_bayar = $_POST['total_bayar'];
      $diskon      = $_POST['diskon'];
      $potongan    = $_POST['potongan'];
      $total       = $_POST['total'];
      $bayar       = $_POST['bayar'];
      $kembali     = $_POST['k'];
    $createdDate     = date("Y-m-d H:i:s");
    $createdUserID   =$_SESSION['userid'];
    $modifiedDate    ="0000-00-00";
    $modifiedUserID  ='';

      $conn ->query("INSERT INTO as_sales_transactions(
        invoiceID,
        trxDate,
        trxSubtotal,
        trxDiscount,
        trxPPN,
        trxTotal,
        trxPay,
        trxChange,
        createdDate,
        createdUserID,
        modifiedDate,
        modifiedUserID


        ) 
        values(
        '$kode',
        '$trxDate',
        '$total_bayar',
        '$diskon',
        '$potongan',
        '$total',
        '$total',
        '$kembali',
        '$createdDate',
        '$createdUserID',
        '$modifiedDate',
        '$modifiedUserID'




      )");


    }



     ?>


<script type="text/javascript">
  function hitung() {
    var total_bayar = document.getElementById('total_bayar').value;

    var diskon = document.getElementById('diskon').value;

var diskon_pot = parseInt(total_bayar) * parseInt(diskon) / parseInt(100);

if (!isNaN(diskon_pot)) {
  var potongan = document.getElementById('potongan').value = diskon_pot;
}

var sub_total = parseInt(total_bayar) - parseInt(potongan);

if (!isNaN(sub_total)) {
  var s_total = document.getElementById('s_total').value = sub_total;
}
    var bayar = document.getElementById('bayar').value;
var bayar_b = parseInt(bayar) - parseInt(s_total);
if (!isNaN(bayar_b)) {

   document.getElementById('kembali').value = bayar_b;
}

  }





</script>
















    </section>
    <!-- /.content -->


      <!-- info row -->
     

      <!-- Table row -->
     

      <!-- this row will not appear when printing -->

    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
