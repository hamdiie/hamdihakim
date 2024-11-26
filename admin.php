<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body align="center" style="margin-top 200px">
    <h1>==========selamat datang==========</h1>
<a href="tambahdata.php">+ TAMBAH BUKU</a>
	<br/>
	<br/>
	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Genre</th>
			<th>Quantity</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td><?php echo $d['genre']; ?></td>
				<td><?php echo $d['quantity']; ?></td>
				<td>
					<a href="">EDIT</a>
					<a href="">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>