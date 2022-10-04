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
	</style>
</head>
<body>
	<div>
		<form action="" method="post">
			<h3 class="text-center">Cari Rata-rata Bilangan</h3>
			<div>
				<label for="n">Jumlah data :</label>
				<input type="number" id="n" name="n" />
				<button type="submit" name="proses">PROSES</button>
			</div>
		</form>
		<?php if (isset($_POST['proses'])){ $n = $_POST['n']; ?>
			<form action="hitung-mean.php" method="post">
				<p class="text-center"><b>Input data</b></p>
				<?php for($i=0;$i<$n;$i++): ?>
					<div>
						<label for="input_<?= $i ?>">Bilangan ke-<?= $i+1 ?></label>
						<input type="number" name="input_<?= $i ?>" />
					</div>
				<?php endfor ?>
				<input type="hidden" name="n" value="<?= $n ?>" />
				<button type="submit" name="hitung">HITUNG</button>
			</form>
		<?php } ?>
	</div>
</body>
</html>