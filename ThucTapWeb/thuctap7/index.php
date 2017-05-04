<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Tuần 7</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$conn=mysqli_connect("localhost","root","","thuctap");
		if($conn){
			mysqli_set_charset($conn,"utf8");
		}
		else{
			die("error!!!".mysqli_error($conn));
		}
		$mave=$_POST["txt-mave"];
		$loaixe=$_POST["txt-loaixe"];
		$mauxe=$_POST["txt-mauxe"];
		$bienso=$_POST["txt-bienso"];
		$insert="INSERT INTO tuan7(mave,loaixe,mauxe,bienso) VALUES ('{$mave}','{$loaixe}','{$mauxe}','{$bienso}')";
		$result=mysqli_query($conn,$insert);
		if($result){
			echo  '<script type="text/javascript"> alert("Thành công"); </script>';
		}
		else{
			echo  '<script type="text/javascript"> alert("Lỗi!!!"); </script>';
		}
	}

	?>	
	<center>
	<form method="POST" action="#">
		<h1> THÊM </h1>
		<label>
			 Mã vé 
			<input type="text" name="txt-mave">
		</label>
		<br>
		<label>
			Loại xe 
			<input type="text" name="txt-loaixe">
		</label>
		<br>
		<label>
			 Màu xe
			<input type="text" name="txt-mauxe">
		</label>
		<br>
		<label>
			 Biển số 
			<input type="text" name="txt-bienso">
		</label>
		<br>
		<input type="submit" name="submit-add" value="Thêm">
		<input type="reset" name="submit-reset" value="Nhập lại">
		<br>
		<a href="display.php"> Hiển thị tất cả những xe là xe SH </a>
		</form>
		</center>

</body>
</html>