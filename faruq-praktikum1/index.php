<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Praktikum 1</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body>
    <div class="kotak">
		<div class="container-fluid ">
			<div class="row kotak1 mt-5">
				<div class="col-md-10 p-2 kotak2">
						<p class="p1">Form Nilai Siswa (Array) !</p>
				</div>
				<div class="col-md-12 mt-4 kotak3">
					<form role="form" method="post" action="admin.php" >
					<div class="row">
						<div class="col-md-6" >
							<table>
								<tr>
									<td>Nama Lengkap</td>
									<td>:</td>
									<td><input type="text" class="form-control" name="nama" required></td>
								</tr>
								<tr>
									<td>NIM</td>
									<td>:</td>
									<td><input type="number" class="form-control" name="nim" required></td>
								</tr>
								<tr>
									<td>Mata Kuliah</td>
									<td>:</td>
									<td><select name="matkul" id="matkul">
										<option value="Dasar Pemrograman">Dasar Pemrograman</option>
										<option value="Pemrograman Web">Pemrograman Web</option>
										<option value="Basis Data">Basis Data</option>
										<option value="Algoritma Dasar">Algoritma Dasar</option>
									</select>
									</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6" >
							<table class="pr-5">
								<tr>
									<td>Nilai Tugas/Praktikum</td>
									<td>:</td>
									<td><input type="number" class="form-control" name="nilai_tugas" required></td>
								</tr>
								<tr>
									<td>Nilai UTS</td>
									<td>:</td>
									<td><input type="number" class="form-control" name="nilai_uts" required></td>
								</tr>
								<tr>
									<td>Nilai UAS</td>
									<td>:</td>
									<td><input type="number" class="form-control" name="nilai_uas" required></td>
								</tr>
							</table>
						</div>
					</div>
					
					<div align="center" class="mt-5">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="proses" value="Berhasil" required><small> Form sudah benar</small>
								</label>
							</div> 
						<button type="submit" class="btn btn-primary" >
							Simpan
						</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
