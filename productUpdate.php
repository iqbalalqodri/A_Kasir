 <?php
 date_default_timezone_set('Asia/Jakarta');
 session_start();
include "koneksi.php";
include 'kodepj.php';

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
    <li class="active treeview">
      <a href="#">
        <i class="fa  fa-cubes -chart"></i>
          <span>Produk</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a><ul class="treeview-menu">
          <li ><a href="productData.php"><i class="fa fa-database"></i> Daftar Produk</a></li>
        <li ><a href="productTambah.php"><i class="fa fa-plus"></i> Tambah Produk</a></li>
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
        Master Produk
        <small>Tambah, Lihat, Update dan Hapus Produk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="productData.php">Produk</a></li>
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
include "koneksi.php";
if (!isset($_SESSION['userlevel'])){
  header("location:index.php");
}
if (isset($_GET['productID'])) {
      // jika ada ambil nilai id
      $productID = $_GET['productID'];
      $supplierID = $_GET['supplierID'];
      $categoryID = $_GET['categoryID'];
      $brandID = $_GET['brandID'];
  } else{
      // jika tidak ada redirect ke index.php
      header('Location:productData.php.php');
  }

//$sql= seleksi semua tabel produk dimana productID = $productID
$sql_produck="SELECT * FROM as_products where  productID='$productID'";
//$data = jumlah row yang keluar dari seleksi  
$hasil_product=mysqli_query($conn,$sql_produck);
// jika jumlah row lebih dari 0 maka $produk = variable yang aka di keluarkan
if (mysqli_num_rows($hasil_product) > 0) {
  $product=mysqli_fetch_assoc($hasil_product);
  $Gambar= $product['image'];
  
}
      $sql_supplier="SELECT * FROM as_suppliers where  supplierID='$supplierID'";
      //$data = jumlah row yang keluar dari seleksi  
      $hasil_supplier=mysqli_query($conn,$sql_supplier);
      // jika jumlah row lebih dari 0 maka $produk = variable yang aka di keluarkan
      if (mysqli_num_rows($hasil_supplier) > 0) {
        $supplier=mysqli_fetch_assoc($hasil_supplier);
      }
      $sql_category="SELECT * FROM as_categories where  categoryID='$categoryID'";
      //$data = jumlah row yang keluar dari seleksi  
      $hasil_category=mysqli_query($conn,$sql_category);
      // jika jumlah row lebih dari 0 maka $produk = variable yang aka di keluarkan
      if (mysqli_num_rows($hasil_category) > 0) {
        $category=mysqli_fetch_assoc($hasil_category);
      }
      $sql_brand="SELECT * FROM as_brands where  brandID='$brandID'";
      //$data = jumlah row yang keluar dari seleksi  
      $hasil_brand=mysqli_query($conn,$sql_brand);
      // jika jumlah row lebih dari 0 maka $produk = variable yang aka di keluarkan
      if (mysqli_num_rows($hasil_brand) > 0) {
        $brand=mysqli_fetch_assoc($hasil_brand);
      }
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 <title>tambah supplier</title>
 </head>
 <body>
 
<form action="#" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="col-md-12">
          <!-- Horizontal Form -->
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                <label class="col-sm-2 control-label" >supplier</label>
                <div class="col-sm-10">
                 <select name="supplier" class="form-control select2" style="width: 100%;">
                  
 <?php 

                    $sql_sv = "SELECT * FROM as_suppliers WHERE supplierID ='$supplierID'";
                    $query_sv =mysqli_query($conn,$sql_sv);
                    $hasil_sv =mysqli_num_rows($query_sv);
                    if ($hasil_sv > 0) {
                      $supplierV = mysqli_fetch_assoc($query_sv);

                      $supplier1 = $supplierV['supplierID'];

                    }else{
                      echo "query salah";
                    }


                    $sql_s = "SELECT * FROM as_suppliers";
                    $query_s =mysqli_query($conn,$sql_s);
                    $hasil_s =mysqli_num_rows($query_s);
                    if ($hasil_s > 0) {


                     $nomor=0;
                      while ($supplier = mysqli_fetch_array($query_s)) {
                      $supplier2 = $supplier['supplierID'];

                        if ($supplier1 == $supplier2){
                        $selectS = 'selected="select"';
                        }else{
                        $selectS ="";
                        }
                        echo " <option ".$selectS." value=".$supplier['supplierID'].">".$supplier['supplierName']."</option>";
                      }


                    }else{
                      echo "query salah";
                    }
                   ?>


  </select>
  </div></div>
  <div class="form-group">
                <label class="col-sm-2 control-label">category :</label>
                <div class="col-sm-10">
                <select name="category" class="form-control select2" style="width: 100%;">    
 <?php 

                    $sql_cv = "SELECT * FROM as_categories WHERE categoryID ='$categoryID'";
                    $query_cv =mysqli_query($conn,$sql_cv);
                    $hasil_cv =mysqli_num_rows($query_cv);
                    if ($hasil_cv > 0) {
                      $categoryV = mysqli_fetch_assoc($query_cv);

                      $category1 = $categoryV['categoryID'];

                    }else{
                      echo "query salah";
                    }


                    $sql_c = "SELECT * FROM as_categories";
                    $query_c =mysqli_query($conn,$sql_c);
                    $hasil_c =mysqli_num_rows($query_c);
                    if ($hasil_c > 0) {


                     $nomor=0;
                      while ($category = mysqli_fetch_array($query_c)) {
                      $category2 = $category['categoryID'];
                        
                        if ($category1 == $category2){
                        $selectC = 'selected="select"';
                        }else{
                        $selectC ="";
                        }
                        echo " <option ".$selectC."value=".$category['categoryID'].">".$category['categoryName']."</option>";
                      }


                    }else{
                      echo "query salah";
                    }
                   ?>

  </select></div></div>
<div class="form-group">
                <label class="col-sm-2 control-label">brand</label>
                <div class="col-sm-10">
                <select name="brand" class="form-control select2" style="width: 100%;">              
   
 <?php 

                    $sql_bv = "SELECT * FROM as_brands WHERE brandID ='$brandID'";
                    $query_bv =mysqli_query($conn,$sql_bv);
                    $hasil_bv =mysqli_num_rows($query_bv);
                    if ($hasil_bv > 0) {
                      $brandV = mysqli_fetch_assoc($query_bv);

                      $brand1 = $brandV['brandID'];

                    }else{
                      echo "query salah";
                    }


                    $sql_b = "SELECT * FROM as_brands";
                    $query_b =mysqli_query($conn,$sql_b);
                    $hasil_b =mysqli_num_rows($query_b);
                    if ($hasil_b > 0) {


                     $nomor=0;
                      while ($brand = mysqli_fetch_array($query_b)) {
                      $brand2 = $brand['brandID'];
                        
                        if ($brand1 == $brand2){
                        $selectB = 'selected="select"';
                        }else{
                        $selectB ="";
                        }
                        echo " <option ".$selectB."value=".$brand['brandID'].">".$brand['brandName']."</option>";
                      }


                    }else{
                      echo "query salah";
                    }
                   ?>
<?php 

                    $sql_pv = "SELECT * FROM as_products WHERE productID ='$productID'";
                    $query_pv =mysqli_query($conn,$sql_pv);
                    $hasil_pv =mysqli_num_rows($query_pv);
                    if ($hasil_pv > 0) {
                      $productV = mysqli_fetch_assoc($query_pv);
                    }else{
                      echo "query salah";
                    }


                    $sql_user="SELECT * FROM as_products where  productID='$productID'";
$hasil_user=mysqli_query($conn,$sql_user);
if (mysqli_num_rows($hasil_user) > 0) {
  $Produk=mysqli_fetch_assoc($hasil_user);
  $gambar=$Produk['image'];
}

 ?>
</select></div></div>
                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">barcode :</label>

                  <div class="col-sm-10">
                    <input type="text" name="barcode" class="form-control" value="<?= $product['productBarcode'];?>"  placeholder="barcode">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama produk :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productName" class="form-control" id="inputPassword3" value="<?= $product['productName'];?>" placeholder="nama Produk">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Produk Imei :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productImei" class="form-control" id="inputPassword3" value="<?= $product['productImei'];?>" placeholder="Produk Imei ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Beli Produk Price :</label>
                  <div class="col-sm-10">
                    <div id="input">
                    <input type="text" name="productBuyPrice" class="form-control" id="inputku"  value="<?= $product['productBuyPrice'];?>" placeholder="Beli Produk Price" >
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Produk Jual Price :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productSalePrice" class="form-control" id="inputPassword3" value="<?= $product['productSalePrice'];?>" placeholder="Produk Jual Price">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"> Diskon Product :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productDiscount" class="form-control" id="inputPassword3" value="<?= $product['productDiscount'];?>" placeholder="Diskon Product ">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label"> Stok Produk :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productStock" class="form-control" id="inputPassword3" value="<?= $product['productStock']; ?> " placeholder="Stok Produk ">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">foto :</label>
                  <div class="col-sm-10">
                  <img src="gambar_produk/<?= $product['image']; ?> " width="50" height="50" >
                  <input type="file" name="file" value="<?= $product['productDiscount']; ?> ">
                </div>
              </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Catatan Produk :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productNote" class="form-control" id="inputPassword3" value="<?= $product['productNote']; ?>" placeholder="Catatan Produk">
                  </div>
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
    $supplierID        =$_POST['supplier'];
    $categoryID        =$_POST['category'];
    $brandID           =$_POST['brand'];
    $barcode           =$_POST['barcode'];
    $productName       =$_POST['productName'];
    $productImei       =$_POST['productImei'];
    $productBuyPrice   =$_POST['productBuyPrice'];
    $productSalePrice  =$_POST['productSalePrice'];
    $productDiscount   =$_POST['productDiscount'];
    $productStock      =$_POST['productStock'];
    $alamat            = $_FILES['file']['name'];
    $productNote       =$_POST['productNote'];
    $modifiedDate      =date("Y-m-d H:i:s");
    $modifiedUserID    =$_SESSION['userid'];
    
    $query="
    UPDATE as_products SET 
    supplierID='$supplierID',
    categoryID='$categoryID',
    brandID='$brandID',
    productBarcode='$barcode',
    productName='$productName',
    productImei='$productImei ',
    productBuyPrice='$productBuyPrice',
    productSalePrice='$productSalePrice',
    productDiscount='$productDiscount',
    productStock='$productStock',
    image='$alamat',
    productNote ='$productNote',
    modifiedDate='$modifiedDate',
    modifiedUserID='$modifiedUserID'
    WHERE productID ='$productID'"; 
        if (mysqli_query($conn,$query)) {
        // header("location:productData.php");
        echo"DATA BERHASIL DISIMPAN";

    $gambar = $_FILES['file']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"
    $alamat = $_FILES['file']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"
    $folder = "gambar_produk/";
    $pindah = move_uploaded_file($gambar, $folder.$alamat);

      }else{
        echo "maaf data gagal disimpan";
    }
}
?>
  <a href="productData.php">[ back ]</a> 
    
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



















