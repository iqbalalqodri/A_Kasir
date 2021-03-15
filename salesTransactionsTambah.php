<?php 
include 'koneksi.php';

$id = $_GET['detailID'];
$kodepj = $_GET['kodepj'];
$harga_jual = $_GET['harga_jual'];
$kode_b = $_GET['kode_b'];

$sql = $conn->query("UPDATE as_sales_detail_transactions set detailQty=(detailQty+1) where detailID='$id'");
$sql1 = $conn->query("UPDATE as_sales_detail_transactions set detailSubtotal=(detailSubtotal+$harga_jual) where detailID='$id'");
$sql2 = $conn->query("UPDATE as_products set productStock=(productStock- 1 ) where productBarcode='$kode_b'");

if ($sql || $sql1 || $sql2 ) {
	?>
<script type="text/javascript">
	window.location.href="salesTransactions.php?&kodepj=<?php echo $kodepj ?> ";
</script>

	<?php  
}





 ?>