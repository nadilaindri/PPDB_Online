<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
</head>

<body background = "image/garut.jpg">
	<form method ="post" action="tempat_tinggal.php">
    <table rules="line">
	<tr>
		<td><b>Data Diri Siswa</b></td>
	</tr>
	<tr>
		<td>1.Nama Lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama_lengkap"></td>
	</tr>
	<tr>
		<td>2.Nama Panggilan</td>
	    <td>:</td>
	    <td><input type="text" name="nama_panggilan"></td>
	</tr>
	<tr>
		<td>3.Jenis kelamin</td>
		<td>:</td>
		<td>
			<input type="radio" id="q1" name="y1" value="1">Laki-laki</td>
			<td>
			<input type="radio" id="q1" name="y1" value="0">Perempuan</td>
	</tr>
	<tr>
		<td>4.Tempat,Tanggal lahir</td>
		<td>:</td>
		<td><input type="text" name="ttl"></td>
	</tr>
	<tr>
		<td>5.Agama</td>
		<td>:</td>
		<td><input type="text" name="agama"></td>
	</tr>
	<tr>
		<td>6.Cita-cita</td>
		<td>:</td>
		<td><input type="text" name="cita-cita"></td>
	</tr>
	<tr>
		<td>7.Hoby</td>
		<td>:</td>
		<td><input type="text" name="hoby"></td>
	</tr>
	<tr>
		<td>8.Anak ke</td>
		<td>:</td>
		<td><input type="text" name="anak"></td>
	</tr>
	<tr>
		<td>9.Jumlah Saudara</td>
		<td>:</td>
		<td><input type="text" name="jumlah_saudara"></td>
	</tr>
	<tr>
		<td>10.Berat Badan</td>
		<td>:</td>
		<td><input type="text" name="berat_badan"></td>
	</tr>
	<tr>
		<td>11.Tinggi Badan</td>
		<td>:</td>
		<td><input type="text" name="tinggi_badan"></td>
	</tr>
	<tr>
	    <td>12.Golongan Darah</td>
	    <td>:</td>
	    <td><input type="text" name="gol_darah"></td>
    </tr>
   <tr>
        <td colspan=3>&nbsp;</td>
        <td><input type="submit" name="Next" value="next" class="btn btn-primary"></td>
    </tr>
</table>
</body>
<style type="text/css">
table{
		border-radius: 10px;
		color:white;
		background:black;
		opacity: 0.7;
		position: absolute;
		top: 50%;
		left:50%;
		transform:translate(-50%,-50%);
	}
	.body{
		background-image: url(image/garut.jpg);
		background-size: cover;
		height:540px;
		text-align: center;
		position:relative;	
	}
        </table>

</html>