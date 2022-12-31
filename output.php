<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lesti Sayang Rizki Billar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

<body>
	<?php
	$k  = $_POST['k'];
	$kl  = $_POST['kl'];
	$km  = $_POST['km'];

	function tanggungjawab_buruk()
	{
		$k = $_POST['k'];
		$uBuruk = (40-$k)/(40-30);
		if ($k >= 40){
			return 0;
		}else if ( 30<$k && $k<40){
			return $uBuruk;
		}else {
			return 1;
		}
	}
	function tanggungjawab_cukup()
	{
		$k = $_POST['k'];
		$uCukup = (80-$k)/(80-70);
		if (30<$k && $k<80) {
			return 0;
		}else if (70<$k && $k<80){
            return 1;
        }else if (30<$k && $k>40){
			return $uCukup;
		}else{
			return $uCukup;
		}
	}
		
	function tanggungjawab_baik ()
	{
		$k = $_POST['k'];
		$uBaik = ($k-70)/(70-60);
		if (70<$k && $k<80) {
			return 1;
		}else if (60<$k && $k<80) {
			return $uBaik;
		}else{
			return 0;
		}
	}
	function kedisiplinan_buruk ()
	{
		$kl = $_POST['kl'];
		$uTburuk = (40-$kl)/(40-30);
		if ($kl>=40){
			return 0;
		}else if($kl<=30){
			return 1;
		}else {
			return $uTburuk;
		}
	}
	function kedisiplinan_cukup()
	{
		$kl = $_POST['kl'];
		$uTcukup =(80-$kl)/(80-70);
		if (30<$kl && $kl<80){
			return 0;
		}else if(70<$kl && $kl<80){
            return 1;
        }else if(40<$kl && $kl>70){
			return $uTcukup;
		}else {
			return $uTcukup;
		}
	}
	function kedisiplinan_baik ()
	{
		$kl = $_POST['kl'];
		$uTbaik = ($kl-70)/(70-60);
		if($kl>=70){
			return 1;
		}else if ($kl<=70){
			return 0;
		}else {
			return $uTbaik;
		}
	}
	function faktorpengurang_buruk ()
	{
		$km = $_POST['km'];
		$uDburuk = (40-$km)/(40-30);
		if ($km>=40){
			return 0;
		}else if($km<=30){
			return 1;
		}else{
			return $uDburuk;
		}
	}
	function faktorpengurang_cukup()
	{
		$km = $_POST['km'];
		$uDcukup = ($km-80)/(80-70);
		if(70<$km && $km<80){
			return 0;
		}else if (40<$km && $km <70){
            return 1;
        }else if(30<$km && $km<40){
			return $uDcukup;
		}else{
			return $uDcukup;
		}
	}
	function faktorpengurang_baik()
	{
		$km = $_POST['km'];
		$uDbaik = (80-$km)/(80-70);
		if($km>80){
			return 1;
		}else if($km<=70){
			return 0;
		}else{
			return $uDbaik;
		}
	}
	// R1
	$a1 = min(tanggungjawab_baik(), kedisiplinan_baik(), faktorpengurang_baik());
	//echo $a1;
	$z1 = (90*$a1);
	// R2
	$a2 = min(tanggungjawab_baik(), kedisiplinan_baik(), faktorpengurang_cukup());
	//echo $a2;
	$z2 = (90*$a2);
	//R3
	$a3 = min(tanggungjawab_baik(), kedisiplinan_baik(), faktorpengurang_baik());
	//echo $a3;
	$z3 = (62.5*$a3);
	//R3
	$a4 = min(tanggungjawab_baik(), kedisiplinan_baik(), faktorpengurang_baik());
	//echo $a4;
	$z4 = (90*$a4);
	//R5
	$a5 = min(tanggungjawab_baik(), kedisiplinan_baik(), faktorpengurang_baik());
	//echo $a5;
	$z5 = (90*$a5);
	//R6
	$a6 = min(tanggungjawab_baik(), kedisiplinan_baik(), faktorpengurang_baik());
	//echo $a6;
	$z6 = (90*$a6);

	$zTotal=(($a1*$z1)+($a2*$z2)+($a3*$z3)+($a4*$z4)+($a5*$z5)+($a6*$z6))/($a1+$a2+$a3+$a4+$a5+$a6);

    $kategori;
if (0< $zTotal && $zTotal <45 ){
    $kategori = "Sangat Buruk";
}else if (45< $zTotal && $zTotal <56){
    $kategori = "Buruk";
}else if (56< $zTotal && $zTotal <65){
    $kategori = "Cukup";
}else if (65< $zTotal && $zTotal <80){
    $kategori = "Baik";
}else if (80< $zTotal && $zTotal <100){
    $kategori = "Cukup";
}
    

	?>
<div class="container">
    <div class="judul" style="margin-left :30%;">
    <h1>Output Logika Fuzzy</h1>
    </div>
    <br><br>
    <div class="Tanggung Jawab">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">Tanggung Jawab <?=$k; ?></th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            <tbody class="table-info">
                <tr>
                    <td>Keanggotaan Kategori Buruk</td>
                    <td><?= tanggungjawab_buruk();?></td>
                </tr>
                <tr>
                    <td>Keanggotaan Kategori Cukup</td>
                    <td><?= tanggungjawab_cukup();?></td>
                </tr>
                <tr>
                    <td>Keanggotaan Kategori Baik</td>
                    <td><?= tanggungjawab_baik();?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br><br>
    <div class="Kedisplinan">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">Kedisiplinan <?= $kl;?></th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            </tbody class="table-info">
            <tr>
                <td>Keanggotaan Kategori Buruk</td>
                <td><?= kedisiplinan_buruk();?></td>
            </tr>
            <tr>
                <td>Keanggotaan Kategori Cukup</td>
                <td><?= kedisiplinan_cukup(); ?></td>
            </tr>
            <tr>
                <td>Keanggotaan Kategori Baik</td>
                <td><?= kedisiplinan_baik(); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <br><br>
    <div class="Faktor Pengurang">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">Faktor Pengurang <?= $km; ?></th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            <tbody class="table-info">
                <tr>
                    <td>Derajat keanggotaan kategori buruk</td>
                    <td><?= FaktorPengurang_Buruk(); ?></td>
                </tr>
                <tr>
                    <td>Derajat keanggotaan kategori cukup</td>
                    <td><?= FaktorPengurang_Cukup(); ?></td>
                </tr>
                    <td>Derajat keanggotaan kategori baik</td>
                    <td><?= FaktorPengurang_Baik(); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<br><br>
<div class="inferensi">
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">kode</th>
                    <th scope="col">inferensi</th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            <tbody class="table-info">
            <tr>
                <th scope="row">R1</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin Sangat baik serta faktor pengurang Sangat baik, maka Keputusan Sangat baik</td>
                <td><?= $z1; ?></td>
            </tr>
            <tr>
                <th scope="row">R2</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin Sangat baik serta faktor pengurang baik maka Keputusan Sangat Baik
                <td><?= $z2; ?></td>
            </tr>
            <tr>
                <th scope="row">R3</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin Sangat baik serta faktor pengurang Buruk maka Keputusan Baik
                 <td><?= $z3; ?></td>
            </tr>
            <tr>
                <th scope="row">R4</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin  baik serta faktor pengurang Sangat Baik maka Keputusan Sangat Baik
                <td><?= $z4; ?></td>
             </tr>
            <tr>
                <th scope="row">R5</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin  Baik serta faktor pengurang Baik maka Keputusan Baik
                <td><?= $z5; ?></td>
            </tr>
            <tr>
                <th scope="row">R6</th>
                <td>Jika Tanggung jawab Sangat baik dan Disiplin  Baik serta faktor pengurang Buruk maka Keputusan Cukup
                <td><?= $z6; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <br><br>
</div>
<div class="Defuzzyfikasi">
<table class="table">
        <thead>
        <tr class= "table-secondary">
            <th scope="col">Kesimpulan</th>
        </tr>
        </thead>
    <tbody class="table-info">
        <tr>
            <td>

            </td>
    <div class="kesimpulan">
    <table class="table">
        <thead>
        <tr class= "table-secondary">
            <th scope="col">Kesimpulan</th>
        </tr>
        </thead>
    <tbody class="table-info">
        <tr>
            <td>
            Jika Tanggung Jawab Bernilai <strong><?= $k; ?></strong> dan Disiplin Bernilai <strong><?= $kl; ?></strong>
            Serta Faktor Pengurang Bernilai <strong><?=$km; ?></strong> Maka Keputusan <strong><?= $kategori; ?></strong>
            </td>
        </tr>
    </tbody>
    </table>
    </div>
    <br><br><br>
</body>
</html>