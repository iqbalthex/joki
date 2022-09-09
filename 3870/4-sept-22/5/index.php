<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5</title>
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
		<div>Tanggal 1: <input type="date" name="tgl1" /></div>
		<div>Tanggal 2: <input type="date" name="tgl2" /></div>
		<div><input type="submit" name="submit" value="proses" /></div>
		<?php
		if( isset($_POST['submit']) ){
			# tanggal awal dan akhir
			$tgl1 = explode('-',$_POST['tgl1']);
			$tgl2 = explode('-',$_POST['tgl2']);
			$time1 = mktime(0,0,0,$tgl1[1],$tgl1[2],$tgl1[0]);
			$time2 = mktime(0,0,0,$tgl2[1],$tgl2[2],$tgl2[0]);

			# list kosong yang akan diisi tanggal dari
			# hari jum'at antara tanggal awal dan akhir
			$dates = [];
			while($time1 < $time2){
				# bila ketemu hari jum'at, lompat 1 minggu
				if (date('D',$time1) == 'Fri'){
					$dates[] = date('Y-m-d',$time1);
					$time1 += 604800;
				# bila tidak, lompat 1 hari
				} else {
					$time1 += 86400;
				}
			}

			echo "Tanggal dengan hari jum'at adalah:<br><pre>";
			$d = 0;
			foreach ($dates as $date){
				$d++;
				# 1 baris 4 kolom
				echo $date . ($d % 4 == 0 ? '<br>' : '      ');
			}
			echo "</pre><p>Jumlah hari jum'at antara <b>{$_POST['tgl1']}</b> s/d <b>{$_POST['tgl2']}</b> adalah <b>$d</b></p>";
		}
		?>
	</form>
</body>
</html>