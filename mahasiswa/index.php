<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class=>DATA MAHASISWA</div>
		<form action=""method="post">
		<?php 

                         
		require '../koneksi.php';
		if (isset($_POST['simpan'])) {
			$input_nama = $_POST['txtnama'];
			$input_alamat = $_POST['txtalamat'];
	$query = "INSERT INTO tbl_mahasiswa VALUES('$input_nama', '$input_alamat')";
			$result = mysqli_query($link, $query);
			if ($result) {
				header('location: index.php');			
				}else{
					echo 'Gagal disimpan : '.mysqli_error($link);
				}
				# code...
			}
			# code...
		

		 ?>

		 <form action=""method="post">
			<div class="form-group">
				<label for="">nama</label>
				<input type="text" class="form-control" name="txtnama">
				
			</div>
			<div class="form-group">
				<label for="">alamat</label>
				<input type="text" class="form-control" name="txtalamat">
				
			</div>
			<input type="submit" class="btn btn-info" name="simpan" value="Simpan Data">
			
	
		</form>


                        </div>

		
		<br> <br>
		<div class="container">
		<table class="table table-bordered">
			<thead>					
				<tr>
					<th>NO</th>
					<th>nama</th>
					<th>alamat</th>
					
				</tr>
			</thead>		
			<tbody>
				<?php
				require '../koneksi.php';
				$query = "select * from tbl_mahasiswa";
				$result = mysqli_query($link, $query);
				$no ='1';
				while ($isi = mysqli_fetch_object($result)) {
					?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $isi-> nama;?></td>
						<td><?= $isi-> alamat;?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>