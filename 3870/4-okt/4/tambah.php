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
		<h3 class="text-center">Input Data Mahasiswa</h3>
		<form action="" method="post">
			<?php if (!isset($_POST['proses1'])){ ?>
				<div>
					<label>Jumlah data :</label>
					<input type="number" name="n" />
					<button type="submit" name="proses1">PROSES</button>
				</div>
			<?php
			} else {
				$n = $_POST['n'];
			?>
				<table>
					<thead>
						<tr>
							<td class="text-center">No.</td>
							<td class="text-center">NIM</td>
							<td class="text-center">Nama Mahasiswa</td>
							<td class="text-center">Jenis Kelamin</td>
							<td class="text-center">Tempat Lahir</td>
							<td class="text-center">Tanggal Lahir</td>
							<td class="text-center">Jurusan</td>
							<td class="text-center">Alamat</td>
						</tr>
					</thead>
					<tbody>
						<?php for($i=0;$i<$_POST['n'];$i++): ?>
							<tr>
								<td><?= $i+1 ?>.</td>
								<td><input type="text" name="nim_<?= $i ?>" style="width: 100px" /></td>
								<td><input type="text" name="nama_<?= $i ?>" style="width: 250px" /></td>
								<td><select name="jk_<?= $i ?>" style="with: 100px">
									<option value="1">Laki-laki</option>
									<option value="2">Perempuan</option>
								</select></td>
								<td><input type="text" name="tpt_<?= $i ?>" style="width: 100px" /></td>
								<td><input type="date" name="tgl_<?= $i ?>" style="width: 130px" /></td>
								<td><select name="jur_<?= $i ?>" style="width: 50px">
									<option value="TK">TK (Teknik Kelautan)</option>
									<option value="SI">SI (Sistem Informasi)</option>
									<option value="TI">TI (Teknik Informatika)</option>
									<option value="MI">MI (Manajemen Informatika)</option>
								</select></td>
								<td><input type="text" name="addr_<?= $i ?>" style="width: 250px" /></td>
							</tr>
						<?php endfor ?>
					</tbody>
					<tfoot>
						<tr>
							<td class="text-center" colspan="8">
								<input type="hidden" name="n" value="<?= isset($_POST['n']) ? $_POST['n'] : 0 ?>" />
								<button type="submit" name="proses2">Proses</button>
							</td>
						</tr>
					</tfoot>
				</table>
			<?php } ?>
		</form>
		<?php if (isset($_POST['proses2'])){
			$conn = mysqli_connect('localhost','root','','psibwl');
			for($i=0;$i<$_POST['n'];$i++){
				[
					"nim_$i" => $nim,
					"nama_$i" => $nama,
					"jk_$i" => $jk,
					"tpt_$i" => $tpt,
					"tgl_$i" => $tgl,
					"jur_$i" => $jur,
					"addr_$i" => $addr
				] = $_POST;
				mysqli_query($conn, "INSERT INTO mahasiswa VALUES(
					'$nim', '$nama', '$jk', '$tpt', '$tgl', '$jur', '', $addr'
				)");
			}
		
		} ?>
	</div>
</body>
</html>