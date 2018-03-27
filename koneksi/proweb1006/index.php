<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database</title>
</head>
<body>
	<?php
	include_once "config/dao.php";
	$dao = new Dao();
	$result = $dao->read();
	#$list = mysqli_fetch_array($result);
	#print_r($list);
	echo '
	<br>
	<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>FullName</th>
			<th>Password</th>
			<th>Email</th>
			<th>Telpon</th>
			<th>Banned</th>
			<th>LoginTime</th>
			<th>Akses</th>
		</tr>
	</thead>
	';
	while ($list = mysqli_fetch_array($result)) {
		echo '<tr>
			<td>' . $list['id'] . '</td>
			<td>' . $list['fullname'] . '</td>
			<td>' . $list['password'] . '</td>
			<td>' . $list['email'] . '</td>
			<td>' . $list['telp'] . '</td>
			<td>' . $list['baned'] . '</td>
			<td>' . $list['logintime'] . '</td>
			<td>' . $list['akses']. '</td>
			</tr>';
	}
	?>
</body>
</html>