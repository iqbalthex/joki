<?php

$conn = mysqli_connect('localhost','root','','psibwl2');
$rows = mysqli_query($conn, "SELECT * FROM mahasiswa");
$mhs = [];
for($i=0;$i<mysqli_num_rows($rows);$i++){
	$mhs[] = mysqli_fetch_assoc($rows);
}

$jur = [
	'TK' => 'Teknik Kelautan',
	'SI' => 'Sistem Informasi',
	'TI' => 'Teknik Informatika',
	'MI' => 'Manajemen Informatika'
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4 Oktober 2022 - No 4</title>
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
	table{border-collapse: collapse}
	table th,
	table td{
		padding: 2px;
	}
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
	.d-flex{display: flex}
	.space-between{justify-content: space-between}
	.text-center{text-align: center}
	button[type=submit]{
		background: var(--bg);
		color: white;
		cursor: pointer;
	}
	</style>
</head>
<body>
	<div>
		<div class="d-flex space-between">
			<h3 class="text-center">Data Mahasiswa</h3>
			<button type="submit" style="--bg: green" onclick="window.location = 'tambah.php'">Tambah</button>
		</div>
		<form method="post">
			<table border="">
				<thead>
					<tr>
						<th></th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Jurusan</th>
						<th>Umur</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0; foreach($mhs as $m):
						$tgl_lhr = $m['tgl_lhr'];
						[$y, $mm, $d] = explode('-',$tgl_lhr);
						$tgl_lhr = date('d-F-Y',mktime(0,0,0,$mm,$d,$y));

						$umur = date('Y',mktime()) - $y; ?>
						<tr>
							<td><input type="checkbox" name="data_<?= $i++ ?>" value="nim-<?= $m['nim'] ?>" /></td>
							<td><?= $m['nim'] ?></td>
							<td><?= $m['nama'] ?></td>
							<td><?= $m['jk'] == 1 ? 'Laki-laki' : 'Perempuan' ?></td>
							<td><?= $m['tpt_lhr'] ?></td>
							<td><?= $tgl_lhr ?></td>
							<td><?= $jur[$m['jurusan']] ?></td>
							<td><?= $umur ?></td>
							<td><?= $m['alamat'] ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="9"><button type="submit" name="delete" style="float: right; --bg: red">Hapus</button></td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>
	<?php if (isset($_POST['delete'])){
		foreach($_POST as $data){
			if(substr($data, 0, 3) == 'nim'){
				$nim = explode('-',$data)[1];
				mysqli_query($conn, "DELETE FROM mahasiswa where nim = '$nim'");
			}
		}
		echo '<script>window.location = "../4";</script>';
	} ?>
</body>
</html>