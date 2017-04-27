<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Tuần 6</title>
</head>
<body>
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$conn=mysqli_connect("localhost","root","","thuctap");
		if($conn){
			mysqli_set_charset($conn,"utf8");
		}else{
			die("có lỗi xảy ra khi kết nối với db".mysqli_error($conn));
		}	
		
			$hoten=$_POST["hoten"];
			$tendangnhap=$_POST["tendangnhap"];
			$matkhau=$_POST["matkhau"];
			$gioitinh=$_POST["gioitinh"];
			$ngaysinh=$_POST["ngaysinh"];
			$email=$_POST["email"];
			$sodienthoai=$_POST["sdt"];
			$diachi=$_POST["diachi"];
			if($hoten==null){
				echo  '<script type="text/javascript"> alert("Họ tên không đưọc trống"); </script>';
			}
			else{

				if(!is_numeric($sodienthoai)){
					echo '<script type="text/javascript"> alert("Bạn phải nhập số ở số điện thoại"); </script>';
				}	
				else{
					if(10>strlen($sodienthoai)|strlen($sodienthoai)>11){
						echo '<script type="text/javascript"> alert("Bạn phải nhập số điện thoại trong khoảng 10-11 kí tự"); </script>';
					}
					else{
						$insert="INSERT INTO tuan6 (hoten,tendangnhap,matkhau,gioitinh,ngaysinh,email,sodienthoai,diachi) VALUES ('{$hoten}','{$tendangnhap}','{$matkhau}','{$gioitinh}','{$ngaysinh}','{$email}','{$sodienthoai}','{$diachi}')";
						$query=mysqli_query($conn,$insert);
						if($query){
							echo '<script type="text/javascript"> alert("Thành công"); </script>';
							}
						else{
							echo '<script type="text/javascript"> alert("Có lỗi xảy ra!!!"); </script>';
							}
					}
				}
			}	
		}
	?>

	<form action="" method="POST">
		<label>
			<p> Họ tên </p>
			<input type="text" name="hoten">
		</label>

		<label>
			<p> Tên đăng nhập </p>
			<input type="text" name="tendangnhap">
		</label>

		<label>
			<p> Mật khẩu </p>
			<input type="text" name="matkhau">
		</label>`

		<label>
			<p> Giới tính </p>
			<input type="radio" name="gioitinh" value="nam"> Nam
			<input type="radio" name="gioitinh" value="Nữ"> Nữ

		</label>

		<label>
			<p> Ngày sinh </p>
			<input type="text" name="ngaysinh">
		</label>

		<label>
			<p> Email </p>
			<input type="text" name="email">
		</label>

		<label>
			<p> Số điện thoại </p>
			<input type="text" name="sdt">
		</label>

		<label>
			<p> Địa chỉ </p>
			<input type="text" name="diachi">
		</label>
		<br>
		<label> 
			<input type="submit" name="submit-nhap" value="Đăng kí">
			<input type="submit" name="submit-nhaplai" value="Nhập lại">
		</label>
	</form>

</body>
</html>