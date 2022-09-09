<!DOCTYPE html>
<html>
<head>
	<title>Tugas 3</title>
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
		<div>Tanggal lahir: <input type="date" name="born" /></div>
		<div><input type="submit" name="submit" value="proses" /></div>
		<?php
		#	fungsi untuk menghitung umur
		function cekUmur($a,$b,$c){
			global $born, $time;
			return (date($a) - $born[$b]) - (date($c,$time) > date($c) && 1);
		}
		if( isset($_POST['submit']) ){
			#	tanggal lahir
			$born = explode('-',$_POST['born']);
			$time = mktime(0,0,0,$born[1],$born[2],$born[0]);

			# menghitung selisih hari
			$lahir = date('Y-m-d',$time);
			$now = date('Y-m-d');

			# memanfaatkan fungsi mysqli
			$conn = mysqli_connect('localhost','root','','test');
			$q = "SELECT datediff('$lahir','$now') AS selisih;";
			$data = mysqli_fetch_array(mysqli_query($conn,$q));
			$selisih = abs($data['selisih']) - 1;

		/*
			menghitung selisih (alternatif)
			$diff = date_diff(
				date_create(date('Y-m-d',$time)),
				date_create(date('Y-m-d',mktime(0)))
			);
			$selisih = $diff->format('%a') - 1;
		*/

			#	menghitung tahun, bulan dan hari
			$y = cekUmur('Y',0,'md');
			$m = cekUmur('m',1,'d');
			$d = cekUmur('d',2,'h');

			echo "Sekarang usianya: $selisih hari ($y tahun $m bulan $d hari)<br>";
		}
		?>
	</form>
</body>
</html>