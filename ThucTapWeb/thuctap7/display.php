<?php
	$conn=mysqli_connect("localhost","root","","thuctap");
		if($conn){
			mysqli_set_charset($conn,"utf8");
		}
		else{
			die("error!!!".mysqli_error($conn));
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Hiển thị</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<center>
	<table border="1">
	<thead>
		<h1> Hiển thị thông tin các xe là xe SH </h1>
			<tr> 
				<th> Mã vé </th>
				<th> Loại xe </th>
				<th> Màu xe </th>
				<th> Biển số </th>
				<th> Tùy chọn </th>	
			</tr>
	</thead>
		<tbody>
			<?php
				$query="SELECT * FROM tuan7 where loaixe='SH'";
				$rs=mysqli_query($conn,$query);
				while ($row=mysqli_fetch_array($rs, MYSQLI_ASSOC )) {
			?>
			<tr>
				<td> <?php echo $row["mave"];  ?> </td>
				<td> <?php echo $row["loaixe"]; ?> </td>
				<td> <?php echo $row["mauxe"]; ?> </td>
				<td> <?php echo $row["bienso"];?> </td>
				<td> <a href="index.php"> Về trang chủ </a> </td>
			</tr>
			<?php }  ?>
			
		</tbody>
		</table>
</center>
</body>
</html>