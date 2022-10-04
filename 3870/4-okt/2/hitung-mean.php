<?php function mean($arr){
	return array_sum($arr) / count($arr);
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4 Oktober 2022 - No 2</title>
	<style>
	*{
		margin: 0;
		padding: 0;
		font-size: 1.1rem;
	}
	body{
		height: 100vh;
		background: #bbb;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
	li{list-style: none}
	a{text-decoration: none}
	body > div{
		border: 1px solid;
		background: #ddf;
		padding: 8px;
	}
	div form{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		
	}
	.text-center{text-align: center}
	p.p{
		width: 500px;
		display: flex;
		justify-content: space-between;
	}
	</style>
</head>
<body>
	<div>
		<form action="index.php" method="post">
			<h3 class="text-center">Cari Rata-rata Bilangan</h3>
			<div>
				<label for="n">Jumlah data :</label>
				<input type="number" id="n" name="n" />
				<button type="submit" name="proses">PROSES</button>
			</div>
		</form>
		<form action="" method="post">
			<p class="text-center"><b>Input data</b></p>
			<?php
				$n = $_POST['n'];
					for($i=0;$i<$n;$i++): ?>
					<div>
						<label for="input_<?= $i ?>">Bilangan ke-<?= $i+1 ?></label>
						<input type="number" name="input_<?= $i ?>" value="<?= isset($_POST["input_$i"]) ? $_POST["input_$i"] : 0 ?>" />
					</div>
			<?php endfor ?>
			<button type="submit" name="hitung">HITUNG</button>
			<?php
				if (isset($_POST['hitung'])){
					$data = [];
					for($i=0;$i<$n;$i++){
						$data[] = $_POST["input_$i"];
					}
					$mean = mean($data);
					echo "
						<p class='p'>
							<span>Rata-ratanya adalah : $mean</span>
							<span><a href='index.php'>Ulangi</a></span>
						</p>
					";
				}
			?>
		</form>
	</div>
</body>
</html>