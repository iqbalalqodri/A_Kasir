
 <?php
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
        <li class="active"><a href="productTambah.php"><i class="fa fa-plus"></i> Tambah Produk</a></li>
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
                <span class="box-title">input Produk Baru </span> 
                
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
 <title>tambah Pruduk</title>
 </head>
 <body>
 
<form action="#" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                 <div class="form-group">
                <label class="col-sm-2 control-label" >supplier</label>
                <div class="col-sm-10">
                 <select name="supplier" class="form-control select2" style="width: 100%;">
                  
  <?php
  // buat ambil kategori 
    $sql_s= "SELECT * FROM as_suppliers";
    $query_s = mysqli_query($conn,$sql_s); 
    $hasil_s= mysqli_num_rows($query_s);
    if ($hasil_s>0) {
      foreach ($query_s as $key => $value) { 
        echo "<option  selected='selected' value='".$value['supplierID']."'>".$value['supplierName']."</option>";
      }
    }else{
        echo "<option value='0'> data tidak ada</option>";
    }
    ?>
  </select>
  </div></div>
  <div class="form-group">
                <label class="col-sm-2 control-label">category :</label>
                <div class="col-sm-10">
                <select name="category" class="form-control select2" style="width: 100%;">    
  <?php
  // buat ambil kategori 
    $sql_c= "SELECT * FROM as_categories";
    $query_c = mysqli_query($conn,$sql_c); 
    $hasil_c= mysqli_num_rows($query_c);
    if ($hasil_c>0) {
      foreach ($query_c as $key => $value) { 
        echo "<option selected='selected' value='".$value['categoryID']."'>".$value['categoryName']."</option>";
      }
    }else{
        echo "<option value='0'> data tidak ada</option>";
    }
    ?>

  </select></div></div>
<div class="form-group">
                <label class="col-sm-2 control-label">brand :</label>
                <div class="col-sm-10">
                <select name="brand" class="form-control select2" style="width: 100%;">              
   <?php
  // buat ambil brand
    $sql_b= "SELECT * FROM as_brands";
    $query_b = mysqli_query($conn,$sql_b); 
    $hasil_b= mysqli_num_rows($query_b);
    if ($hasil_c>0) {
      foreach ($query_b as $key => $value) { 
        echo "<option selected='selected' value='".$value['brandID']."'>".$value['brandName']."</option>";
      }
    }else{
        echo "<option value='0'> data tidak ada</option>";
    }
    ?>
</select></div></div>
<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">barcode :</label>

                  <div class="col-sm-10">
                    <input type="text" name="barcode" class="form-control"  placeholder="barcode">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama produk :</label>
                  

                  <div class="col-sm-10">
                    <input type="text" name="productName" class="form-control" id="inputPassword3" placeholder="nama Produk">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Produk Imei :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productImei" class="form-control" id="inputPassword3" placeholder="Produk Imei ">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Produk beli Price :</label>

                  <div class="col-sm-10">
                    <div id="input">
                    <input type="text" name="productBuyPrice" class="form-control"  placeholder="Produk Jual Price" >
                  </div>
                </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Produk Jual Price :</label>

                  <div class="col-sm-10">
                    <div id="input">
                    <input type="text" name="productSalePrice" class="form-control"placeholder="Produk Jual Price">
                  </div></div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"> Diskon Product :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productDiscount" class="form-control" id="inputPassword3" placeholder="Diskon Product ">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label"> Stok Produk :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productStock" class="form-control" id="inputPassword3" placeholder="Stok Produk ">
                  </div>
                </div>

  </div>            
<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">image :</label>

                  <div class="col-sm-10">
                    <input name="file" type="file" required="">
                  </div>
                </div>


                <div class="form-group">
                  <label  class="col-sm-2 control-label">Catatan Produk :</label>

                  <div class="col-sm-10">
                    <input type="text" name="productNote" class="form-control" id="inputPassword3" placeholder="Catatan Produk">
                  </div>
                </div>
              </div>
<table>
                  <tr>
                  <td>
                   <button  name="submit" class="btn btn-block btn-success">tambah</button>
                  </td></tr>
                  </table> 
</div>  
</form>

  <?php 
  if (isset($_POST['submit'])) {
    $supplier        =$_POST['supplier'];
    $category        =$_POST['category'];
    $brand           =$_POST['brand'];
    $barcode         =$_POST['barcode'];
    $productName     =$_POST['productName'];
    $productImei     =$_POST['productImei'];
    $productBuyPrice =$_POST['productBuyPrice'];
    $productSalePrice=$_POST['productSalePrice'];
    $productDiscount =$_POST['productDiscount'];
    $productStock    =$_POST['productStock'];
    $alamat          = $_FILES['file']['name'];
    $productNote     =$_POST['productNote'];
    $createdDate     = date("Y-m-d H:i:s");
    $createdUserID   =$_SESSION['userid'];
    $modifiedDate    ="0000-00-00";
    $modifiedUserID  ='';
$tambah = "INSERT INTO as_products (
                      
                        supplierID,
                        categoryID,
                        brandID,
                        productBarcode,
                        productName,
                        productImei,
                        productBuyPrice,
                        productSalePrice,
                        productDiscount,
                        productStock,
                        image,
                        productNote,
                        createdDate,
                        createdUserID,
                        modifiedDate,
                        modifiedUserID
                        ) VALUES (
                   
                        '$supplier',
                        '$category',
                        '$brand',
                        '$barcode',
                        '$productName',
                        '$productImei',
                        '$productBuyPrice',
                        '$productSalePrice',
                        '$productDiscount',
                        '$productStock',
                        '$alamat',
                        '$productNote',
                        '$createdDate',
                        '$createdUserID',
                        '$modifiedDate',
                        '$modifiedUserID')";
      if (mysqli_query($conn,$tambah)) {
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



















