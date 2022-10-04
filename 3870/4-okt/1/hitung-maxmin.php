<?php function minmax($arr){
	$m = [$arr[0],0];
	for ($i=0;$i<count($arr);$i++){
		if ($arr[$i] < $m[0]){
			$m[0] = $arr[$i];
		}
		if ($arr[$i] > $m[1]){
			$m[1] = $arr[$i];
		}
	}
	return $m;
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4 Oktober 2022 - No 1</title>
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
			<h3 class="text-center">Cari Nilai Tertinggi dan Terendah</h3>
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
					[$min, $max] = minmax($data);
					echo "
						<p class='p'>
							<span>Nilai tertinggi dan terendah adalah : $max dan $min</span>
							<span><a href='index.php'>Ulangi</a></span>
						</p>
					";
				}
			?>
		</form>
	</div>
</body>
</html>