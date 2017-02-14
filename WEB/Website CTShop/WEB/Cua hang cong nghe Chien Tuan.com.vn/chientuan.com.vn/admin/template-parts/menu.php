		<!-- start menu -->
		<div class="menu">
			<ul  style="margin:0 auto; display:block ; width:40%">
				<li><a href="../index.php" title="home">TRANG CHỦ</a></li>

				<li>
					<a href="index.php?r=list-flower" title="Tất cả sản phẩm">SẢN PHẨM</a>
					<ul>
						<li><a href="index.php?r=add-flower" title="Thêm sản phẩm">Thêm sản phẩm</a></li>
					</ul>
				</li>
				<li>
					<a href="index.php?r=list-menu" title="tất cả danh mục">DANH MỤC</a>
					<ul>
						<a href="index.php?r=add-menu" title="Thêm danh mục">Thêm danh mục</a>
					</ul>
				</li>

				<li>
					<a href="index.php?r=list-user" title="tất cả user">QUẢN TRỊ</a>
					<ul>
						<a href="index.php?r=add-user" title="Thêm user">Thêm user</a>
					</ul>
				</li>

				<?php if( !empty($_SESSION) ):?>
				<li>
					<a href="index.php?r=logout" title="logout" onclick="return confirm('bạn muốn thoát ko !? ')">Thoát</a>
				</li>
			<?php endif;?>
			</ul>
		</div>
		<!-- end menu -->