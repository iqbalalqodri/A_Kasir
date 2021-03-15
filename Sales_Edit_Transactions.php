 <?php
 session_start();
include "koneksi.php";
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
        <li class="active  treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="salesTransactions.php"><i class="fa fa-circle-o"></i> Transaksi Penjualan</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Daftar Transaksi</a></li>
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
        Master Penjualan
        <small>:""</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="salesTransactions.php"><i class="fa fa-home"></i> Penjualan</a></li>
        <li><a href="sales_Edit_Transactions.php">edit penjualan</a></li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="col-md-6">
                <span class="box-title">input Supplier Baru </span> 
                
              </div>
              <div class="box-tools">
              </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">

<?php 
// include "koneksi.php";
// if (!isset($_SESSION['userlevel'])){
//   header("location:index.php");
// }
// if (isset($_GET['productID'])) {
//       // jika ada ambil nilai id
//       $productID = $_GET['productID'];
//       $supplierID = $_GET['supplierID'];
//       $categoryID = $_GET['categoryID'];
//       $brandID = $_GET['brandID'];
//   } else{
//       // jika tidak ada redirect ke index.php
//       header('Location:Sales_search.php');
//   }

// //$sql= seleksi semua tabel produk dimana productID = $productID
// $sql_produck="SELECT * FROM as_products where  productID='$productID'";
// //$data = jumlah row yang keluar dari seleksi  
// $hasil_product=mysqli_query($conn,$sql_produck);
// // jika jumlah row lebih dari 0 maka $produk = variable yang aka di keluarkan
// if (mysqli_num_rows($hasil_product) > 0) {
//   $product=mysqli_fetch_assoc($hasil_product);
// }
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 <title>tambah supplier</title>
 </head>
 <body>
 
<form action="#" method="POST" class="form-horizontal">

                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Code Produk</label>

                  <div class="col-sm-10">
                    <input type="text" name="barcode" class="form-control" value=""  placeholder="Kode Produk">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama produk</label>

                  <div class="col-sm-10">
                    <input type="text" name="productName" class="form-control" id="inputPassword3" value="" placeholder="Nama Produk">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga Satuan</label>

                  <div class="col-sm-10">
                    <input type="number" name="productName" class="form-control" id="inputPassword3" value="0" placeholder="Harga Satuan ">
                  </div>
                </div>
              
                
              
   
<table>
                  <tr>
                  <td>
                   <button  name="submit" class="btn btn-block btn-success">Simpan</button>
                  </td></tr>
                  </table> 
</div> 
</form>
    <?php
if (isset($_POST['submit'])) {
  //ambil data dari yang sudah dibuat variabel 
  
    $barcode           =$_POST['barcode'];
    $productName       =$_POST['productName'];
    $productImei       =$_POST['productImei'];
    $productBuyPrice   =$_POST['productBuyPrice'];
    $productSalePrice  =$_POST['productSalePrice'];
    $productDiscount   =$_POST['productDiscount'];
    $productStock      =$_POST['productStock'];
    $productNote       =$_POST['productNote'];
    $modifiedDate      =date("Y-m-d H:i:s");
    $modifiedUserID    =$_SESSION['userid'];
    
    $query="
    UPDATE as_products SET 
    productBarcode='$barcode',
    productName='$productName',
    productImei='$productImei ',
    productBuyPrice='$productBuyPrice',
    productSalePrice='$productSalePrice',
    productDiscount='$productDiscount',
    productStock='$productStock',
    productNote ='$productNote',
    modifiedDate='$modifiedDate',
    modifiedUserID='$modifiedUserID'
    WHERE productID ='$productID'"; 
    if (mysqli_query($conn,$query)) {
      // header ("location:productData.php?update berhasil");
      echo "data berhasil di simpanx";
    }else{
      echo "upate gagal";
    }
}
?>
  <a href="salesTransactions.php">[ back ]</a> 
    
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
</body>
</html>
<?php require_once('footer.php'); ?>
<script language = "JavaScript" type="text/JavaScript">
<!--
function warung()
{
    var catat = document.formwarung;
    var hargasatujam = parseInt(catat.satu.value) * parseInt(catat.satujamaa.value);
    var hargalimajam = parseInt(catat.lima.value) * parseInt(catat.limajamaa.value);
    var hargaroti= parseInt(catat.roti.value) * parseInt(catat.rotiaa.value);
    var hargajus = parseInt(catat.jus.value) * parseInt(catat.jusaa.value);
    var hargagoreng= parseInt(catat.goreng.value) * parseInt(catat.gorengaa.value);
    var hargasemua = hargasatujam + hargalimajam + hargaroti+ hargajus + hargagoreng;
    if (hargasemua > 50000)
    {
        catat.TotalBayar.value = hargasemua;
        catat.Diskon.value = 10000;
        catat.JumlahBayar.value = hargasemua - parseInt(catat.Diskon.value);
     }
     else
     {
        catat.TotalBayar.value = hargasemua;
        catat.Diskon.value = 0;
        catat.JumlahBayar.value = hargasemua;
    }   
}
function awal(){
document.formwarung.reset();
}
//-->
</script>
</head>



















