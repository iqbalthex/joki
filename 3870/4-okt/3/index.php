<?php

$conn1 = mysqli_connect('localhost','root','');
mysqli_query($conn1, "DROP DATABASE IF EXISTS psibwl2");
mysqli_query($conn1, "CREATE DATABASE IF NOT EXISTS psibwl2");
mysqli_query($conn1, "USE psibwl2");
mysqli_query($conn1, "CREATE TABLE IF NOT EXISTS mahasiswa(
	`nim` char(10) NOT NULL,
	`nama` varchar(50) NOT NULL,
	`jk` char(1) NOT NULL,
	`tpt_lhr` varchar(50) NOT NULL,
	`tgl_lhr` date NOT NULL,
	`jurusan` char(2) NOT NULL,
	`umur` int(11) NOT NULL,
	`alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
mysqli_close($conn1);

$conn2 = mysqli_connect('localhost','root','','psibwl2');
mysqli_query($conn2, "INSERT INTO mahasiswa VALUES
	('135310150', 'Rian Hidayat', '1', '', '1997-08-05', 'TK', 20, ''),
	('135310156', 'Safitri Ayu', '2', '', '1995-09-01', 'TK', 22, ''),
	('135410156', 'Ahmad Riko', '1', '', '1995-02-23', 'TI', 22, ''),
	('135410189', 'Wawan Setiawan', '1', '', '1993-02-13', 'TI', 23, ''),
	('135510190', 'Marshel Saraun', '1', '', '1993-10-23', 'MI', 23, ''),
	('135510191', 'Nacha Saraun', '2', '', '1995-01-13', 'MI', 20, ''),
	('135510920', 'Dani Hermawan', '1', '', '1996-05-05', 'SI', 23, ''),
	('135518322', 'Nita Daniyatun', '2', '', '1994-09-05', 'TI', 23, ''),
	('135518900', 'Mili Wilian', '2', '', '1995-10-08', 'SI', 22, ''),
	('135610157', 'Dahlan Iskan', '1', '', '1998-03-26', 'SI', 20, '');
");
mysqli_close($conn2);

echo '<script>
	window.location = "../../../phpmyadmin/index.php?route=/sql&db=psibwl2&table=mahasiswa&pos=0";
</script>';
