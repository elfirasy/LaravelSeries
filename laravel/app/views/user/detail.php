<html>
<head>
	<title>Latihan Menggunakan Laravel 4.0</title>
	<style type="text/css">
		th{ width: 33%; text-align: center; background-color: #333; color: #fff;}
		a{ padding: 3px 5px; background-color: #aa88cc; text-decoration: none;color:#fff;}
		a:hover{background-color: #aa55cc;}
	</style>
</head>
<body>
	<h1>Data User</h1>
	<table style="width: 500px;">
		<tr><td>Nama</td><td><?php echo $data_user->name; ?></td></tr>
		<tr><td>Email</td><td><?php echo $data_user->email; ?></td></tr>
		<tr><td>No Hp</td><td><?php echo $data_user->phone; ?></td></tr>
		<tr><td>Alamat</td><td><?php echo $data_user->address; ?></td></tr>
	</table>
	<p><a href="<?php echo url('/users'); ?>">Kembali</a></p>
</body>
</html>