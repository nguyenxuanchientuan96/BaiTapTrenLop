<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Tuần 5</title>
</head>
<body>
	<center>
	<h1 style="color: red;"> THÔNG TIN SINH VIÊN </h1>
	<?php
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			echo("không kết nối đưọc với db");
		}
		else{
			mysql_select_db("thuctap",$conn); 
			mysql_query("SET NAMES'utf-8'"); 
			}


			$sql = 'SELECT masv,hoten,ngaysinh,quequan,mobile
			        FROM tuan5
			        ';
			
			$mysql_query = mysql_query( $sql, $conn );
			$rows=mysql_num_rows($mysql_query);
			
			echo "<table border='1'>";
			echo "<tr> <th> Mã sinh viên </th>";
			echo "<th> Họ tên </th>";
			echo "<th> Ngày sinh </th>";
			echo "<th> Quê Quán </th>";
			echo "<th> Mobile </th>";
			echo "<th> Tùy chọn </th>";
			echo "</tr>";
			while($row=mysql_fetch_row($mysql_query)){
				echo "<tr>"; echo "<td>";echo $row[0];echo "</td>";
				echo "<td>" .$row[1]."</td>";
				echo "<td>" .$row[2]."</td>";
				echo "<td>" .$row[3]."</td>";
				echo "<td>" .$row[4]."</td>";
				echo "<td>";
				echo "<a href='del.php?masv=".$row[0]."' title='Xóa'>Xóa";
				echo "<a>";
				echo "</td>";
				echo "</tr>";
			}
			echo "</table>";

				



	?>
	
	</center>
</body>
</html>