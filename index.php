<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lesti Sayang Rizki Billar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>
	<div class="Judul" style="margin-left: 490px; margin-top: 50px;">
		<h1>Implementasi Logika Fuzzy</h1>
	</div>
	<div class="card" style="margin-top: 50px; margin-left: 500px; width: 30rem;">
		<div class="card-body">
			<h5 class="card-tittle" style="margin-left: 25%;">Penilaian Kerja Pegawai</h5>
			<form id="form" name="form" action="output.php" method="post">
				<!-- <div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Masukkan K1 (Tanggung Jawab) :&ensp;</span>
					&ensp;<input type="float" name="k1" id="k1" class="form-control" placeholder="Masukan nilai K1.." autofocus>
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Masukkan K2 (Kedisiplinan) :&ensp;</span>
					&ensp;<input type="float" name="k2" id="k2" class="form-control" placeholder="Masukan nilai K2..">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Masukkan K3 (Faktor Pengurang) : &ensp;</span>
					&ensp;<input type="float" name="k3" id="k3" class="form-control" placeholder="Masukan nilai K3..">
				</div> -->



				<div class="container">
					<div class="form-floating mb-3">
						<input type="float" name="k" id="k" class="form-control"  placeholder="Masukan angka K1" autofocus>
						<label for="floatingInput">Masukkan K1 (Tanggung Jawab)</label>
					  </div>
					  <div class="form-floating mb-3">
						<input type="float" name="kl" id="kl" class="form-control"  placeholder="Masukan angka K2" autofocus>
						<label for="floatingInput">Masukkan K2 (Tanggung Jawab)</label>
					  </div>
					  <div class="form-floating mb-3">
						<input type="float" name="km" id="km" class="form-control"  placeholder="Masukan angka K3" autofocus>
						<label for="floatingInput">Masukkan k3 (Faktor Pengurang)</label>
					  </div>
					  <button type="submit" class="btn btn-primary" mt-3>Submit</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

					