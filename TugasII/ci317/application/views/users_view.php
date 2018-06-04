<!DOCTYPE html>
<html>
<head>
	<title>Belajar CI Boskuh</title>
	<link rel="icon" href="assets/images/favicon.ico">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/floating-labels.css">
	<link rel="stylesheet" href="assets/awesome/css/fontawesome-all.min.css">
</head>
<body>
	<div class="table-responsive container mb-auto">
		<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($user_list as $key => $row) {
				?>
				<tr>
					<th><?php echo $row->id?></th>
					<th><?php echo $row->name?></th>
					<th><?php echo $row->alamat?></th>
				</tr>
				<?php 
			}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>