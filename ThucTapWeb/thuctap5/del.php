<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>del</title>
</head>
<body>
	<?php
		
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			echo("không kết nối đưọc với db");
		}
		else{
			mysql_select_db("thuctap",$conn); 
			mysql_query("SET NAMES'utf-8'"); 
			$masv=$_GET["masv"];
			$query="delete from tuan5 where masv='".$masv."'";
			if(mysql_query($query,$conn)){
				echo'<script type="text/javascript"> alert("xóa thành công"); </script>';
			}
			else{
				echo '<script type="text/javascript"> alert("Lỗi trong việc xóa! VUi lòng kiểm tra lại!!!"); </script>';
			};
}
	?>
</body>
</html>