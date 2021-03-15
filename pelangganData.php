
<?php 

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
                              
                            echo "<img src=image/".$user['gambar']."  class='img-circle' alt='User -Image'>";  
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
                  

             ?>
             	

             </p>
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
                <li class="active treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Pelanggan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="pelangganData.php"><i class="fa fa-users"></i> Daftar pelanggan</a></li>
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
            <li class="active"><a href="sales_report.php"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
     	    <section class="content-header">
      <h1>
        Master Pelanggan
        <small>""</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Daftar Pengguna</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar seluruh pelanggan</h3><a class='btn btn-xs  btn-success' href="pelangganTambah.php"><i class ='fa fa-plus'></i> Tambah pelanggan </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php 

    $sql_serch= "SELECT * FROM as_customers";
    $hasil_Serch =  mysqli_query($conn,$sql_serch);

   $nomor = 1;
   $tbl= "";
      $tbl.= "<table id='example1' class='table table-bordered table-striped'>";
      $tbl.= "<thead>";
      $tbl.= "<tr>";
      $tbl.= "<th style='width: 10px'>No</th>";
      $tbl.= "<th style='width: 220px'>Nama</th>";
      $tbl.= "<th style='width: 220px'>adress</th>";
      $tbl.= "<th style='width: 150px'>telpon</th>";
      $tbl.= "<th style='width: 100px'>email</th>";
      $tbl.= "<th>Aksi</th>";
      $tbl.= "</tr>";
      $tbl.= "</thead>";
     
      // cek apakah $biodata nilai kosong atau tidak
      if (mysqli_num_rows($hasil_Serch) > 0) {
      	$nomor = 1;
        // jika ada looping untuk membaca seluruh data
        // dan tampilkan kedalam tabel
        foreach ($hasil_Serch as $key => $value) {
          $tbl.= "<tr>";
          $tbl.= "<td>".$nomor."</td>";
          $tbl.= "<td>".$value['name']."</td>";
          $tbl.= "<td>".$value['address']."</td>";
          $tbl.= "<td>".$value['telphone']."</td>";
          $tbl.= "<td>".$value['email']."</td>";
          $tbl.= "<td>
         <a class='btn btn-xs btn-warning' href='pelangganUpdate.php?kode_pelanggan=".$value['kode_pelanggan']."'><i class='fa fa-edit'></i></a>
         <a class='btn btn-xs btn-danger' href='javascript:hapus(".$value['kode_pelanggan'].")'><i class='fa fa-trash'></i></a></td>";
          $tbl.= "</tr>";
     $nomor++;


}}
$tbl.= "</table>";
print($tbl); 



 ?>




        
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 <script language="JavaScript" type="text/javascript">
      function hapus(kode_pelanggan){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'pelangganHapus.php?kode_pelanggan=' + kode_pelanggan;
        }
      }
    </script>

  <!-- Control Sidebar -->

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
