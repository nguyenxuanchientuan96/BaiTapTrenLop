<?php 
	if( isset( $_GET['id'] ) && ( is_numeric($_GET["id"]) ) ){
		$id  = $_GET['id'];
		$sql =  "SELECT * FROM hoa WHERE id = $id " ;
		$rs = mysqli_query($conn, $sql);
		$p = mysqli_fetch_array($rs, MYSQLI_ASSOC);

		if( empty( $rs ) ){
			echo alert("Sản phẩm không tồn tại" , "alert-error");
			return;
		}

	}else{
		echo alert("Sản phẩm không tồn tại" , "alert-error");
		return;
	}
?>
<div id="single-page" class="body">
			<div class="block-body">
				
				<div class="block-body-list">

							<div class="block-body-item">
								<img style='max-width: 100%; display: block' src="upload/<?php echo $p['avatar'];?>" title="Hoa thủy tiên" alt="Error" />
									<h2 class="block-body-title">
										<?php echo $p["name"]; ?>
									</h2>
										<div class="block-body-content">
											<i><b>
												<?php echo $p["excerpt"]; ?>
											</b></i>
											<p> <?php echo  $p["info"];?></p>
						
										</div><!-- .block-bod-content -->

										
									<p class="block-body-button-tieu-bieu">
										<a  class="btn" href="index.php?r=cart&action=add&id=<?php echo $p['id']; ?>">Mua ngay</a>
									</p>
							</div>
				</div><!-- end .block-body-list -->
			</div><!-- end .block-body -->