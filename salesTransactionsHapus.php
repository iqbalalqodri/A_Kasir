


 <?php 
include 'koneksi.php';
$j	= $_GET ['jumlah'];
$id = $_GET['detailID'];
$kodepj = $_GET['kodepj'];
$kode_b = $_GET['kode_b'];

$sql = $conn->query("DELETE FROM as_sales_detail_transactions  where detailID='$id'");

$sql2 = $conn->query("update as_products set productStock=(productStock + $j) where productBarcode='$kode_b'");

if ($sql || $sql1 || $sql2 ) {
	?>
<script type="text/javascript">
	window.location.href="salesTransactions.php?&kodepj=<?php echo $kodepj ?> ";
</script>

	<?php  
}





 ?>