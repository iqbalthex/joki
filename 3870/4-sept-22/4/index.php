<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4</title>
	<style>
	*{
		margin: 0;
		padding: 0;
		font-size: 1.1em;
	}
	form{
		width: 100%;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		height: 100vh;
		background: #bbb;
	}
	</style>
</head>
<body>
	<form action="" method="post">
		<div>Masukkan tanggal: <input type="date" name="tgl" /></div>
		<div><input type="submit" name="submit" value="proses" /></div>
		<?php
		# inisialisasi nama bulan dan hari dalam Bahasa Indonesia
		$bulan = [
			'Jan' => 'Januari','Feb' => 'Februari',
			'Mar' => 'Maret','Apr' => 'April','May' => 'Mei',
			'Jun' => 'Juni','Jul' => 'Juli','Aug' => 'Agustus',
			'Sep' => 'September','Oct' => 'Oktober',
			'Nov' => 'November','Dec' => 'Desember'
		];
		$hari = [
			'Sunday' => 'Minggu','Monday' => 'Senin',
			'Tuesday' => 'Selasa','Wednesday' => 'Rabu',
			'Thursday' => 'Kamis','Friday' => 'Jum\'at',
			'Saturday' => 'Sabtu'
		];

		if( isset($_POST['submit']) ){
			#	['yyyy','mm','dd']
			$tgl = explode('-',$_POST['tgl']);
			$time = mktime(0,0,0,$tgl[1],$tgl[2],$tgl[0]);

			#	['nama_hari','dd','mm','yy']
			[$day, $d, $m, $y] = explode('-',date('l-d-M-Y',$time));

			echo "<p>Tanggal <b>$d {$bulan[$m]} $y</b> adalah hari <b>{$hari[$day]}</b></p>";
		}
		?>
	</form>
</body>
</html>