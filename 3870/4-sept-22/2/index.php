<!DOCTYPE html>
<html>
<head><title>Tugas 2</title></head>
<body>
	<form action="" method="post">
		<div>Tanggal awal: <input type="date" name="start" /></div>
		<div>Tanggal akhir: <input type="date" name="end" /></div>
		<div><input type="submit" name="submit" value="proses" /></div>
		<?php
		if( isset($_POST["submit"]) ){
			# ['yyyy','mm','dd']
			$start = explode('-',$_POST["start"]);
			$end = explode('-',$_POST["end"]);

			# nama bulan
			$start_bulan = date("F",mktime(0,0,0,$start[1]));
			$end_bulan = date("F",mktime(0,0,0,$end[1]));

			$jd_start = gregoriantojd($start[1],$start[2],$start[0]);
			$jd_end		= gregoriantojd( $end [1], $end [2], $end [0]);
			$jd_selisih = $jd_end - $jd_start;

			echo 'Selisih antara tanggal ';
			echo "{$start[2]} {$start_bulan} {$start[0]}";
			echo " s/d ";
			echo "{$end[2]} {$end_bulan} {$end[0]}";
			echo " adalah $jd_selisih hari";
		}
		?>
	</form>
</body>
</html>