<!DOCTYPE html>
<html>
<head>
	<title>tempat tinggal</title>
</head>
<body>
	<form method ="post" action="datadiriorangtua.php">
	 <table rules="line">
	<tr>
		<td><b>KETERANGAN TEMPAT TINGGAL</b></td>
	</tr>
	<tr>
		<td>1.Alamat Rumah</td>
		<td>:</td>
		<td><input type ="text" name="alamat_rumah"></td>
	</tr>
	<tr>
		<td>Kelurahan</td>
		<td>:</td>
		<td><input type="text" name="kelurahan"></td>
	</tr>
	<tr>
		<td>Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="kecamatan"></td>
	</tr>
	<tr>
		<td>Kota/Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kota/kabupaten"></td>
	</tr>
	<tr>
		<td>Provinsi</td>
		<td>:</td>
		<td><input type="text" name="provinsi"></td>
	</tr>
	<tr>
		<td>No.Telp Rumah</td>
		<td>:</td>
		<td><input type="text" name="no.telp"></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td>:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Tinggal Dengan</td>
		<td>:</td>
		<td>
		<select name = "jenis">
				<option value="" disabled selected>--Tinggal dengan--</option>
				<option value="orangtua">Orangtua</option>
				<option value="saudara">Saudara</option>
				<option value="asrama">Asrama</option>
		</select>
	</tr>
	<tr>
		<td><br/><b>KETERANGAN KESEHATAN</b></td>
	</tr>
	<tr>
		<td>1.Penyakit Yang Pernah Diderita:</td>
	</tr>
	<tr>
		<td>-TBC (Sebutkan/Kapan)</td>
		<td>:</td>
		<td><input type="text" name="tbc"></td>
	</tr>
	<tr>
		<td>-Malaria (Sebutkan/Kapan)</td>
		<td>:</td>
		<td><input type="text" name="malaria"></td>
	</tr>
	<tr>
		<td>-Chotipa (Sebutkan/Kapan)</td>
		<td>:</td>
		<td><input type="text" name="chotipa"></td>
	</tr>
	<tr>
		<td>-Cacar (Sebutkan/Kapan)</td>
		<td>:</td>
		<td><input type="text" name="cacar"></td>
	</tr>
	<tr>
		<td>-Lain-lain (Sebutkan/Kapan)</td>
		<td>:</td>
		<td><input type="text" name="lain-lain"></td>
	</tr>
	<tr>
		<td>2.Kelainan Jasmani/Lainnya</td>
		<td>:</td>
		<td><input type ="text" name="kelainan_jasmani/lainnya"></td>
	</tr>
	<tr>
        <td colspan=3>&nbsp;</td>
        <td><input type="submit" name="Next" value="Next" class="btn btn-primary"></td>
    </tr>
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
        </table>

</html>