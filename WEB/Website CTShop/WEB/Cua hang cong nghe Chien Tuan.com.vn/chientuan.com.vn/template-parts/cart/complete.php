<div style="padding:250px 0px;background-color: white">
	<div class="alert alert-success">
		Chúc mừng bạn! Đơn hàng đã được đặt thành công  
	</div>
</div>

<?php 
	if( !empty($_SESSION["products"]) ){
		unset($_SESSION["products"]);
	}
 ?>