<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
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
	input{width: 80px}
	p{
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	span{margin-left: 20px}
	</style>
</head>
<body>
	<form action="" method="post">
		<div>Masukkan n hari berikutnya dan n hari sebelum tanggal hari ini:
			<input type="number" name="n" min="1" value="1" />
		</div>
		<div><input type="submit" name="submit" value="proses" /></div>

		<?php
			if( isset($_POST["submit"]) ){
				$n = $_POST["n"];
				$now = date("d-m-Y");
				[$d,$m,$Y] = [date("d"),date("m"),date("Y")];
				$next = date("d-m-Y",mktime(0,0,0,$m,$d+$n,$Y));
				$prev = date("d-m-Y",mktime(0,0,0,$m,$d-$n,$Y));
				echo "<div>
					<p>Tanggal hari ini<span>$now</span></p>
					<p>$n hari berikutnya dari tanggal hari ini<span>$next</span></p>
					<p>$n hari sebelumnya dari tanggal hari ini<span>$prev</span></p>
				</div>";
			}
		?>
	</form>
</body>
</html>