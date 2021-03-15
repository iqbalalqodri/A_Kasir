
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<?php   include "koneksi.php";
include 'kodepj.php'; 
error_reporting(0);
session_start();
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
} ?>
  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
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




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <b>DELTA<b>
            <small class="pull-right">Jam :<?php $Jam = date('H:i:s'); echo " ".$Jam; ?></small><br>
            <small class="pull-right">Tanggal :<?php $waktu = date('d-M-Y'); echo " ".$waktu; ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
    <!-- info row -->

    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">





    </div>
    <!-- /.row -->

    <!-- Table row -->

 



    <div class="row">
      <div class="col-xs-12 table-responsive">

        
<?php if (isset($_POST['submit'])) {
 ?>
<table  class='table table-striped'>
      <thead>
<tr>
<th style='width: 20px'>No</th>
<th style='width: 20px'>Tanggal</th>
<th style='width: 100px'>kode Produk</th>
<th style='width: 100px'>Nama Produk</th>
<th style='width: 100px'>Harga_beli</th>
<th style='width: 100px'>Harga_jual</th>
<th style='width: 100px'>stok</th>
<th style='width: 80px'>Gambar</th>
<th style='width: 80px'>Jumlah</th>
<th style='width: 80px'>Total</th>
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
<td><?php echo "Rp. "."&nbsp".number_format($value['productBuyPrice']);   ?></td>
<td><?php echo "Rp. "."&nbsp".number_format($value['productSalePrice']);   ?></td>
<td><?php echo $value['productStock'];   ?></td>
<td><img src="gambar_produk/<?php echo  $value['image'];  ?> " width="50"  height="50"></td>
<td><?php echo $value['detailQty'];   ?></td>
<td><?php echo "Rp. "."&nbsp".number_format($value['detailSubtotal']);   ?></td>



</tr>

 <?php 

$total_pj = $total_pj + $value['detailSubtotal'];

} }

?>


<tr>
  <td></td>
  <td></td>
  <td></td>
  <td>Total Penjualan</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
<td style='width: 100px'><?php echo "Rp."."&nbsp".number_format($total_pj); ?></td>
</tr>
</tbody>
         
        </table>
      </div>
      <!-- /.col -->
    </div>

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">


        <div class="table-responsive">
          <table class="table">

          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
