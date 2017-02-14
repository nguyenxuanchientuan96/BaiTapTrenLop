<?php 
	session_start();


	
	if( empty( $_SESSION["products"]) ){
		echo alert("Bạn chưa đặt sản phẩm nào, vui lòng quay lại mua sản phẩm! ");
		return;
	}	


	$products = $_SESSION["products"];


 ?>

 

 <table class="table">

 	<caption class="alert alert-success">Tiến hành thanh toán</caption>
 	<thead>
 		<tr>
 			<th>Hình ảnh</th>
 			<th>Tên sản phẩm</th>
 			<th>Số lượng</th>
 			<th>Đơn giá</th>
 			<th>Thành tiền</th>
 		</tr>
 	</thead>


 	<tbody>
 		<?php
 			 for( $i = 0 ; $i < sizeof( $products ) ; $i++ ): 
 			 		$p = $products[$i];
 		?>

 		<tr>
 			<td><img src="upload/<?php echo $p['avatar']; ?>" title="<?php echo $p['title'] ?>"/></td>
 			<td><?php echo $p["title"];?></td>
 			<td><?php echo $p["amount"]; ?></td>
 			<td> <?php  echo $p["price"]; ?> </td>
 			<td> <?php  echo $p["price"] * $p["amount"]; ?> </td>
 		</tr>

 	<?php endfor;?>
 	</tbody>
 </table>
