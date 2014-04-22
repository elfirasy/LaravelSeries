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
	<h1>Daftar User</h1>
	<p><a href="<?php echo url('/users/create'); ?>">Tambah User</a></p>
	<table style="width: 500px;">
		<tr><th>Nama User</th><th>Email</th><th>Option</th></tr>
		<?php
			// Memastikan bahwa ada data user
			if(count($daftar_user) == 0){
				echo '<tr><td colspan="3">Belum Ada Data User</td></tr>';
			}else{
				// Menampilkan data untuk semua user yang ada
				foreach ($daftar_user as $usr) {
					echo '<tr><td>'.$usr->name.'</td><td>'.$usr->email.'</td>';

					echo '<td><a href="'. url('/users/'.$usr->id) .'" >Detail</a> | <a href="'. url('/users/'.$usr->id.'/edit') .'" >Edit</a> | ';
					echo '<a href="'.url('/hapus_user/'.$usr->id).'">Hapus</a></td></tr>';
				}
			}
		?>
	</table>
</body>
</html>