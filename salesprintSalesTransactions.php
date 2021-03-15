
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<?php   include "koneksi.php";
include 'kodepj.php'; 
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

<?php $kode = $_GET['kodepj']; ?>

    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <!-- Dari -->
        <address>
          <strong><?php 
            //   $user=$_SESSION['userid'];
            //   $sql_user= mysqli_query($conn,"SELECT * FROM as_users where userID='$user' ");
            //   $hasil_user=mysqli_num_rows($sql_user);
            // if ($hasil_user > 0) {
            //   $user = mysqli_fetch_assoc($sql_user);
            //   echo $user['userFullName'];
            // }

             ?></strong><br>
<!--           795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br> -->
          <!-- Phone: <?php  
            //   $user=$_SESSION['userid'];
            //   $sql_user= mysqli_query($conn,"SELECT * FROM as_users where userID='$user' ");
            //   $hasil_user=mysqli_num_rows($sql_user);
            // if ($hasil_user > 0) {
            //   $user = mysqli_fetch_assoc($sql_user);
            //   echo $user['userPhone'];
            // }

             ?><br>
          Email: info@almasaeedstudio.com
        </address>
      </div>
      /.col -->
     <!--  <div class="col-sm-4 invoice-col">
        Untuk
        <address>
          <strong>John Doe</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (555) 539-1037<br>
          Email: john.doe@example.com
        </address>
      </div> -->
      <!-- /.col -->

      <?php $sql_w="SELECT * FROM as_sales_transactions WHERE invoiceID ='$kode'";
   $sql_wh = mysqli_query($conn,$sql_w);
   $data= mysqli_fetch_assoc($sql_wh); ?>
      <div class="col-sm-4 invoice-col">
        <!-- <b>invoiceID</b> <?php echo  $kode; ?><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> <?php echo $data['trxDate']; ?><br>
        <b>Account:</b> 968-34567 -->

<table class="table table-striped">
          <thead>
 <tr>
<th style='width: 100px'>invoiceID</b> <?php echo  $kode; ?></th>
<th style='width: 100px'>Order ID:</b> 4F3S8J</th>
<th style='width: 100px'>Payment Due:</b> <?php echo $data['trxDate']; ?></th>
<th style='width: 100px'>Account:</b> 968-34567</th>
</tr>
</thead>
</table>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->

 



    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
 <tr>
<th style='width: 10px'>No</th>
<th style='width: 150px'>kode Produk</th>
<th style='width: 150px'>Nama Produk</th>
<th style='width: 150px'>Harga</th>
<th style='width: 100px'>jumlah</th>
<th style='width: 100px'>Gambar</th>
<th style='width: 100px'>total</th>


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
<td><?php echo "Rp."."&nbsp".number_format($value['productSalePrice']).",-";  ?></td>
<td><?php echo $value['detailQty'];   ?></td>
<td><img src="gambar_produk/<?php echo  $value['image'];  ?> " width="50"  height="50"></td>
<td><?php echo "Rp."."&nbsp".number_format( $value['detailSubtotal']).",-";   ?></td>
</tr>

 <?php 
} 

?>


</tbody>
    
         
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
<?php $sql_data="SELECT * FROM as_sales_transactions WHERE invoiceID ='$kode'";
   $sql_datah = mysqli_query($conn,$sql_data);
   $dataa= mysqli_fetch_assoc($sql_datah);
?>
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead">Payment Methods:</p>
        <img src="dist/img/credit/visa.png" alt="Visa">
        <img src="dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="dist/img/credit/american-express.png" alt="American Express">
        <img src="dist/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
          jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
        </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Amount Due <?php $date=date('d/m/Y'); echo $date; ?></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td><?php echo "Rp."."&nbsp".number_format( $dataa['trxSubtotal']); ?></td>
            </tr>
            <tr>
              <th>Diskon </th>
              <td><?php echo  $dataa['trxDiscount'].'%' ?></td>
            </tr>
            <tr>
              <th>Potongan Diskon</th>
              <td><?php echo "Rp."."&nbsp".number_format($dataa['trxPPN']) ?></td>
            </tr>
            <tr>
            <tr>
              <th>Sub Total</th>
              <td><?php echo "Rp."."&nbsp".number_format( $dataa['trxTotal']) ?></td>
            </tr>
            <tr>
            <tr>
              <th>Bayar</th>
              <td><?php echo "Rp."."&nbsp".number_format($dataa['trxPay']) ?></td>
            </tr>
            <tr>
              <th>Kembalian</th>
              <td><?php echo "Rp."."&nbsp".number_format($dataa['trxChange']) ?></td>
            </tr>
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
