

<?php  
include "koneksi.php";


 if(isset($_POST["query"]))  
 {  
  $query = "SELECT * FROM as_products WHERE productBarcode LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($conn, $query);  
"<div class='form-group col-sm-12'>";

      $tbl= "";
      $tbl.= "<table class='table table-striped'>";
       $tbl.= "<tr>";
      $tbl.= "<th style='width: 150px'>barcode</th>";
      $tbl.= "<th style='width: 150px'>nama barang</th>";
      $tbl.= "<th style='width: 150px'>barang di beli</th>";
      $tbl.= "<th style='width: 150px'>barang dijual</th>";
      $tbl.= "<th style='width: 150px'>barang diskon</th>"; 
      $tbl.= "<th style='width: 150px'>Aksi</th>"; 
      
      if(mysqli_num_rows($result) > 0)  
      {  
           while($value = mysqli_fetch_array($result))  
           {  
          $tbl.= "<tr>";
          $tbl.= "<td>".$value['productBarcode']."</td>";
          $tbl.= "<td>".$value['productName']."</td>";
          // $tbl.= "<td>".$value['productImei']."</td>";
          $tbl.= "<td>".$value['productBuyPrice']."</td>";
          $tbl.= "<td>".$value['productSalePrice']."</td>";
          $tbl.= "<td>".$value['productDiscount']."</td>";
          $tbl.= "<td>
          <a class='btn btn-xs btn-warning' href='Sales_Edit_Transactions.php?productID=".$value['productID']."&supplierID=".$value['supplierID']."&brandID=".$value['brandID']."&categoryID=".$value['categoryID']."'><i class='fa fa-edit'></i></a>

          <a class='btn btn-xs btn-danger' href='javascript:hapus(".$value['productID'].")'><i class='fa fa-trash'></i></a></td>";
          $tbl.= "<td>";  
                
              
           }  
      }  
      else  
      {  
           $tbl.= "<li> maaf Data tidak ada </li>";  
      }  
       $tbl.= "</table>";  
      print($tbl); 
      "</div>";
 }  
 ?>  