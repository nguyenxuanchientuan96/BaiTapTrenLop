<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Bài tập trên lớp</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php

	if(isset($_POST['submitadd'])){
		//nếu tồn tại submit add thi
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		//nếu tồn tại $_FILES nút browsw
	   if(isset($_FILES['submithinh'])){
	    
	      $errors= array();
	      //tên file đã upload
	      $file_name = $_FILES['submithinh']['name'];
	      //kích thước file upload
	      $file_size =$_FILES['submithinh']['size'];
	      // upload trong thư mục tạm thời trên Web Server.
	      $file_tmp =$_FILES['submithinh']['tmp_name'];
	      //kiểu của file upload
	      $file_type=$_FILES['submithinh']['type'];
	      //lấy phấn kết thúc của tên, sau dấu .
	      $file_ext=strtolower(end(explode('.',$_FILES['submithinh']['name'])));
	      //định dạng cho phép
	      $expensions= array("jpeg","jpg","png");
	      
	      if(in_array($file_ext,$expensions)=== false){
	         $errors[]="Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
	      }
	      
	      if(empty($errors)==true){
	         move_uploaded_file($file_tmp,"upload/".$file_name);
	      
	          $conn=mysql_connect("localhost","root","");
			if(!$conn){
			die("không kết nối đc với  db".mysql_error());

			}
			else{
				mysql_query('SET NAMES"utf-8"');
				mysql_select_db("thuctapweb",$conn);
			}
			$masinhvien=$_POST['txtmasinhvien'];
			$hoten=$_POST['txthoten'];
			$ngaysinh=$_POST['txtngaysinh'];
			
			   $insert= "INSERT INTO buoi1 values ('".$masinhvien."','".$hoten."','".$ngaysinh."','".$file_name."')";
			   if(mysql_query($insert,$conn)){
			   	echo '<script type="text/javascript"> alert("Thành công");</script>';
			   }
			  	else{
			  	echo '<script type="text/javascript"> alert("Thất bại");</script>';
			  }
	      }
	      else{
	         echo($errors);
	      }
   }
  
}}
?>
	



	<div id="header">
		<div class="header-logo">
			<img src="img/logo.png"/>
		</div>
		<div class="header-text">
			<h1> KHOA CÔNG NGHỆ THÔNG TIN </h1>
			<h2>  CHƯƠNG TRÌNH QUẢN LÝ SINH VIÊN </h2>
		</div> <!-- .header-text -->
	</div> <!-- #header -->



	<div id="content">
		<div id="slidebar">
			<ul>
				<li> <a href="#"> Trang chủ </a> </li>
				<li> <a href="#"> Danh sách sinh viên </a> </li>
				<li> <a href="#"> Danh sách MH </a> </li>
				<li> <a href="#"> Xem điểm </a> </li>
				<li> <a href="#"> Danh sách SV </a> </li>
				<li> <a href="#"> Kết quả MH </a></li>
				<li> <a href="#"> Thêm sinh viên </a></li>
				<li> <a href="#"> Thêm danh sách SV </a></li>
				<li> <a href="#"> Thêm kết quả SV </a></li>
			</ul>
		</div>

		<div id="main-content">
			<p> THÊM SINH VIÊN </p>
			<div class="form">
			<form method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<table border="1">
					
					<tr>
						<td> Mã sinh viên </td>
						<td colspan="2"><input type="text" name="txtmasinhvien" size="30"></td>
					</tr>
					<tr>
						<td> Họ tên</td>
						<td colspan="2"> <input type="text" name="txthoten" size="30" ></td>
					</tr>
					<tr>
						<td> Ngày sinh </td>
						<td colspan="2"><input type="text" name="txtngaysinh" size="30"></td>
					</tr>
					<tr>
						<td>Hình</td>
						<td>
						<input type="file" name="submithinh" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="submit" name="submitadd" value="Add">
						<input type="submit" name="submitupdate" value="Update">
						<input type="submit" name="submitsave" value="Save"></td>
						<td></td>
					</tr>
				</table>
			</form>
			</div>
			
		</div>


		<div id="adv">
			<div class="adv-img">
				<img src="img/anh1.JPG"/>
			</div>
			<div class="adv-text">
				<p> Giới thiệu lớp chuyên đề ngôn ngữ lập trình C#, áp dụng trong lập trinhg web </p>
				<p> Tuyển nhân viên lập trình web </p>
			</div>
			<div class="adv-img2">
				<img src="img/anh2.JPG">
			</div>
			<div class="adv-text2">
				<a href="#"> Thông báo về lịch thi HK1 </a>
				<a href="#"> Nhịp sống trẻ</a>
			</div>
		</div> <!-- #adv -->
	</div> <!-- #content -->

</body>
</html>