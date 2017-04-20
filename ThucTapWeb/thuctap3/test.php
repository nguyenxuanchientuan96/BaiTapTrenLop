<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> FORM ĐĂNG KÍ </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		$conn=mysql_connect("localhost","root","");
		if (!$conn){
			die("không kết nối được với database".mysql_error());
		}
		else {
			mysql_select_db("thuctapweb",$conn);
			mysql_query("SET NAMES'utf-8'");
			}
		$tendangnhap=$_POST['txttendangnhap'];
		$tenthat=$_POST['txttenthat'];
		$matkhau=$_POST['txtmatkhau'];
		$nhaplaimatkhau=$_POST['txtnhaplaimatkhau'];
		$ngaysinh=$_POST['txtngaysinh'];
		$email=$_POST['txtemail'];
		$sodienthoai=$_POST['txtsodienthoai'];
		$diachi=$_POST['txtdiachi'];
		$insert ="INSERT INTO buoi3 values ('".$tendangnhap."','".$tenthat."','".$matkhau."','".$nhaplaimatkhau."','".$ngaysinh."','".$email."','".$sodienthoai."','".$diachi."')";
		if($matkhau==$nhaplaimatkhau){
			if(mysql_query($insert)){
		echo '<script type="text/javascript"> alert("Thành công");</script>';
		}
		else{
			echo '<script type="text/javascript"> alert("Thất bại");</script>';
			}
		}
		else{
			echo '<script type="text/javascript"> alert("Mật khẩu và nhập lại mật khẩu phải trùng nhau");</script>';
		}
		
}
	?>
	<div id="header">
		<div class="sub-menu">
			<ul>
				<li> <a href="#"> TẢI APP TLT </a> </li>
				<li> <a href="#"> CHĂM SÓC KHÁCH HÀNG </a> </li>
				<li> <a href="#"> KIỂM TRA ĐƠN HÀNG </a> </li>
				<li> <a href="#"> ĐĂNG NHẬP </a> </li>
				<li> <a href="#"> ĐĂNG KÝ </a> </li>
				<li> <a href="#"> CHANGE LANGUAGE </a> </li>
			</ul>
		</div> <!-- .sub-menu -->
		
		<div class="main-header">
			<div class="logo">
				<img src="img/logo.PNG" alt="logo" title="logo"/>
			</div>
			<div class="search">
				<input type="text" name="txt-search" placeholder="Tìm kiếm sản phẩm, thương hiệu hay nhãn hàng mong muốn...">
			</div>
			<div class="cart">
				<img src="img/cart.PNG" alt="cart" title="Thanh toán"/>
			</div>
			<div class="advertisement">
				<img src="img/sinhnhat.PNG" alt="advertisement" title="Sinh nhật 5 năm"/>
			</div>
		</div> <!-- .main-header -->
		
		<div class="menu">
			<ul>
				<li> <a href="#"> Điện tử </a> </li>
				<li> <a href="#"> Thời trang nữ </a> </li>
				<li> <a href="#"> Thời trang nam </a> </li>
				<li> <a href="#"> Đời sống </a> </li>
				<li> <a href="#"> Sức khỏe </a> </li>
				<li> <a href="#"> Đồ chơi </a> </li>
				<li> <a href="#"> Thể thao </a> </li>
				<li> <a href="#"> Xe máy  </a> </li>
				<li> <a href="#"> Khuyến mãi </a> </li>
				<li> <a href="#"> Thương hiệu lớn </a> </li>
			</ul>
		</div> <!-- .menu -->
	</div> <!-- #header -->
	<div id="main">
	<center>
		<form action="#" method="POST">
			<table border="1">
				<tr> 
					<td colspan="2">  <center> <b> BẢNG ĐĂNG KÍ THÔNG TIN </b> </center></td>
				</tr>
				<tr>
					<td> Tên đăng nhập:</td>
					<td> <input type="text" name="txttendangnhap"></td>
				</tr>
				<tr>
					<td> Tên thật: </td>
					<td> <input type="text" name="txttenthat">  </td>
				</tr>
				<tr>
					<td> Mật khẩu: </td>
					<td> <input type="text" name="txtmatkhau"></td>
				</tr>
				<tr>
					<td>Nhập lại mật khẩu </td>
					<td><input type="text" name="txtnhaplaimatkhau"></td>
				</tr>
				<tr>
					<td>Ngày sinh</td>
					<td><input type="text" name="txtngaysinh"></td>
				</tr>
				<tr>
					<td> Email </td>
					<td><input type="text" name="txtemail"></td>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td><input type="text" name="txtsodienthoai"></td>
				</tr>
				<tr>
					<td> Địa chỉ </td>
					<td><input type="text" name="txtdiachi"></td>
				</tr>
				<tr>
					<td colspan="2"> <center> <input type="submit" name="submitdangki" value="Đăng kí"> </center> </td>
				</tr>
			</table>
		</form>
	</center>
	</div>
	<div id="footer">
		<div id="info-footer">
			<div class="info-footer-contact">
				<h4> CHĂM SÓC KHÁCH HÀNG 1900 1007 </h4>
				<h4> ĐẶT HÀNG QUA ĐIỆN THOẠI 1900 1004 </h4>
				<p> Thứ 2 - CN: 7h - 21h </p>
				<p> Trung tâm DVKH: Tầng 10, Tòa nhà Lottery,  </p>
				<p>	Số 77 Trần Nhân Tôn, P. 9, Q. 5, TP. Hồ Chí Minh </p>
				<p> Thứ 2 - thứ 7: 9h - 18h </p>
				<p> Trung tâm hỗ trợ</p>
				<p> Thanh toán</p>
				<p> Hướng dẫn đặt hàng</p>
				<p> Giao hàng & Nhận hàng</p>
				<p> Chính sách hàng nhập khẩu</p>
				<p> Hướng dẫn đổi trả hàng</p>
				<p> Hướng dẫn và điều kiện sử dụng voucher</p>
				<p> Câu hỏi & Liên hệ</p>
			</div> <!-- .info-footer-contact -->

			<div class="info-footer-manage">
				<h3> LAZADA VIỆT NAM </h3>
				<ul>
					<li> <a href="#"> Về Lazada Việt Nam </a> </li>
					<li> <a href="#"> Chương trình Lazada Afﬁliate </a> </li>
					<li> <a href="#"> Tuyển dụng </a> </li>
					<li> <a href="#"> Điều khoản mua bán hàng hóa </a> </li>
					<li> <a href="#"> Chính sách bảo mật </a> </li>
					<li> <a href="#"> Báo chí </a> </li>
					<li> <a href="#"> Thương hiệu tại Lazada </a> </li>
					<li> <a href="#"> Danh mục sản phẩm </a> </li>
					<li> <a href="#"> Hộp thư nhận góp ý và phản hồi trực tiếp đến Tổng giám đốc Lazada.vn alexandre.dardy@lazada.vn </a> </li>
					<li> <a href="#"> Phát hiện hàng giả (08) 7300 8822 </a> </li>
					<li> <a href="#"> Quy chế quản lý hoạt động </a> </li>
				</ul>
			</div> <!-- .info-footer-manage -->

			<div class="info-footer-register">
				<h2> ĐĂNG KÍ NHẬN TIN NHẮN </h2>
				<p> Đăng ký nhận tin từ Lazada và nhận voucher 50.000 VND </p>
				<div class="email">
					<input type="text" name="txt-email" placeholder="Địa chỉ email của bạn"/>
					<input type="radio" name="gioitinh" value="Nam"> Nam
					<input type="radio" name="gioitinh" value="Nu"> Nữ
					<input type="submit" name="sbm-gioitinh" value="ĐĂNG KÍ">
				</div> <!-- .email -->
				<div class="app">
					<div class="info-app">
						<img src="img/lazada.PNG" alt="info-app" title="">
						<h3> THẢNH THƠI MUA SẮM </h3>
						<p> Tải App lazada </p>
					</div> <!-- .info-app -->
					<div class="appstore">
						<img src="img/appstore.PNG" alt="appstore" title=""/>
						<img src="img/googleplay.PNG" alt="appstore" title=""/>
					</div> <!-- .appstore -->
				</div> <!-- .app -->
				<div class="address">
					<p> CÔNG TY TNHH RECESS </p> 
					<p> Giấy CNĐKDN: 0308808576 - Ngày cấp: 06/5/2009, được sửa đổi lần thứ 14 ngày 23/01/2015. </p> 
					<p> Cơ quan cấp: Phòng Đăng ký kinh doanh Sở Kế hoạch và Đầu tư TPHCM.</p>
					<p>Địa chỉ đăng ký kinh doanh: Tầng 15, Tòa nhà Empress, Số 138-142 Hai Bà Trưng, Phường Đa Kao, Quận 1, TP. Hồ Chí Minh.  </p>
					<p> Số điện thoại: 1900 1007 </p>
				</div> <!-- .address -->

			</div> <!-- .info-footer-register -->
		</div> <!-- #info-footer -->
		<!-- ------------------------------------- -->
		<div class="cart-footer">
			<div class="cart-footer-1">
				<h3> CÁCH THỨC THANH TOÁN </h3>
				<div class="cart-footer-1-img">
					<img src="img/visa.PNG" alt="cart" title="">
					<img src="img/master.PNG" alt="cart" title="">
					<img src="img/jcb.PNG" alt="cart" title="">
					<img src="img/cash_on.PNG" alt="cart" title="">
					<img src="img/smartlink.PNG" alt="cart" title="">
					<img src="img/123pay.PNG" alt="cart" title="">
					<img src="img/pig.PNG" alt="cart" title="">
				</div> <!-- .cart-footer-1-img -->
			</div> <!-- .cart-footer-1 -->
			<div class="cart-footer-2">
				<h3> DỊCH VỤ GIAO HÀNG </h3>
				<div class="cart-footer-2-a">
					<img src="img/vnpost.PNG" alt="" title=""/>
					<img src="img/giaohangnhanh.PNG" alt="" title=""/>
				</div> <!-- .cart-footer-2-a -->
				<div class="cart-footer-2-b">
					<img src="img/lazadaexpress.PNG" alt="" title=""/>
					<img src="img/247express.PNG" alt="" title=""/>
					<img src="img/giaohangtietkiem.PNG" alt="" title=""/>
					<img src="img/viettelpost.PNG" alt="" title=""/>
				</div> <!-- .cart-footer-2-b -->
			</div> <!-- .cart-footer-2 -->
			<div class="cart-footer-3">
				<h3> CHỨNG NHẬN </h3>
				<div class="cart-footer-3-a">
					<img src="img/chungnhan.PNG" title="" alt=""/>
				</div> <!-- .cart-footer-3-a -->
				<div class="cart-footer-3-b">
					<img src="img/dadangki.PNG" alt="" title=""/>
					<img src="img/dathongbao.PNG" alt="" title=""/>
					<img src="img/norton.PNG" alt="" title=""/>
				</div> <!-- .cart-footer-3-b -->
			</div> <!-- .cart-footer-3 -->

		</div> <!-- #cart-footer -->
		<!-- ---------------------------------------- -->
		<div id="connect">
			<div class="country-connect">
				<h2> Lazada Southeast Asia </h2>
				<img src="img/con1.PNG" alt="" title=""/>
				<img src="img/con2.PNG" alt="" title=""/>
				<img src="img/con3.PNG" alt="" title=""/>
				<img src="img/con4.PNG" alt="" title=""/>
				<img src="img/con5.PNG" alt="" title=""/>
				<img src="img/con6.PNG" alt="" title=""/>
			</div> <!-- .country-connect -->

			<div class="social-connect">
				<h2> Kết nối với chúng tôi </h2>
				<img src="img/fb.PNG" alt="" title=""/>
				<img src="img/twit.PNG" alt="" title=""/>
				<img src="img/insta.PNG" alt="" title=""/>
				<img src="img/google.PNG" alt="" title=""/>
				<img src="img/youtube.PNG" alt="" title=""/>
				<img src="img/p.PNG" alt="" title=""/>
				<img src="img/z.PNG" alt="" title=""/>
			</div> <!-- .social-connect -->
			<div class="version">
				<div class="version-a">
					<p> Phiên bản mobile </p>
					<img src="img/mobile.PNG" alt="" title=""/>
				</div>
				<div class="version-b">
					<p> &copy; Lazada 2016 </p>
				</div>
				
			</div> <!-- .version -->
		</div> <!-- #connect -->
	</div> <!-- #footer -->	
</body>
</html>