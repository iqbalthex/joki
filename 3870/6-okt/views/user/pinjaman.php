<?php include 'header.php'; ?>

<div class="content">
	<div class="container">
		<div class="box">
			<div class="box-header">
				<h2 class="text-center">Daftar Pinjaman</h2>
			</div>
			<div class="box-body">
				<table border="1">
					<thead>
						<th>No</th>
						<th>Nama Barang</th>
						<th>Tanggal Pinjam</th>
						<th>Tanggal Kembali</th>
						<th>Status</th>
						<th>Aksi</th>
						<th>Denda</th>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td class="text-center">Buku</td>
							<td class="text-center">06-10-2022</td>
							<td class="text-center">13-10-2022</td>
							<td class="text-center">Dipinjam</td>
							<td class="text-center">
								<a href="detail.php">Det</a>
								<a href="kembalikan.php">Kem</a>
							</td>
							<td class="text-center">Rp. 0</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td class="text-center">Pensil</td>
							<td class="text-center">08-10-2022</td>
							<td class="text-center">15-10-2022</td>
							<td class="text-center">Dipinjam</td>
							<td class="text-center">
								<a href="detail.php">Det</a>
								<a href="kembalikan.php">Kem</a>
							</td>
							<td class="text-center">Rp. 0</td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td class="text-center">Bola</td>
							<td class="text-center">07-10-2022</td>
							<td class="text-center">14-10-2022</td>
							<td class="text-center">Terlambat (2 hari)</td>
							<td class="text-center">
								<a href="detail.php">Det</a>
								<a href="kembalikan.php">Kem</a>
							</td>
							<td class="text-center">Rp. 2000</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td class="text-center">Laptop</td>
							<td class="text-center">06-10-2022</td>
							<td class="text-center">13-10-2022</td>
							<td class="text-center">Dikembalikan</td>
							<td class="text-center">
								<a href="detail.php">Det</a>
								<a href="kembalikan.php">Kem</a>
							</td>
							<td class="text-center">Rp. 0</td>
						</tr>
						<tr>
							<td class="text-center">5</td>
							<td class="text-center">Kursi</td>
							<td class="text-center">05-10-2022</td>
							<td class="text-center">12-10-2022</td>
							<td class="text-center">Terlambat (1 hari)</td>
							<td class="text-center">
								<a href="detail.php">Det</a>
								<a href="kembalikan.php">Kem</a>
							</td>
							<td class="text-center">Rp. 1000</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>