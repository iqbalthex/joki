<?php include 'header.php'; ?>

<div class="content">
	<div class="container">
		<div class="box">
			<div class="box-header">
				<h2 class="text-center">Daftar Pengajuan</h2>
			</div>
			<div class="box-body">
				<table border="1">
					<thead>
						<th>No</th>
						<th>Nama Peminjam</th>
						<th>Nama Barang</th>
						<th>Tanggal Pengajuan</th>
						<th>Status</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td class="text-center">Alif</td>
							<td class="text-center">Buku</td>
							<td class="text-center">06-10-2022</td>
							<td class="text-center">Dibaca</td>
							<td class="text-center">
								<a href="konfirmasi.php">Konfirmasi</a> |
								<a href="tolak.php">Tolak</a>
							</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td class="text-center">Yayan</td>
							<td class="text-center">Pensil</td>
							<td class="text-center">08-10-2022</td>
							<td class="text-center">Belum dibaca</td>
							<td class="text-center">
								<a href="konfirmasi.php">Konfirmasi</a> |
								<a href="tolak.php">Tolak</a>
							</td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td class="text-center">Dodi</td>
							<td class="text-center">Bola</td>
							<td class="text-center">14-10-2022</td>
							<td class="text-center">Dibaca</td>
							<td class="text-center">
								<a href="konfirmasi.php">Konfirmasi</a> |
								<a href="tolak.php">Tolak</a>
							</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td class="text-center">Faiz</td>
							<td class="text-center">Laptop</td>
							<td class="text-center">06-10-2022</td>
							<td class="text-center">Dibaca</td>
							<td class="text-center">
								<a href="konfirmasi.php">Konfirmasi</a> |
								<a href="tolak.php">Tolak</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>