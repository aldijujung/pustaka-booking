<section>
	<h1><?php echo $judul ?></h1>
	<table>
	<form id="formKomentar" action="terimakasih.php"  method="post" >
<tr>
<td>Nama </td>
<td>:</td>
<td><input type="text" name="nama" size="25"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input type="text" name="alamat" size="25"></td>
</tr>
<tr>
<td >Jenis Kelamin</td>
<td>:</td>
<td><input type="radio" name="warna" value="laki-laki">Laki-Laki
<input type="radio" name="warna" value="perempuan">Perempuan
</td>
</tr>
<tr>
<td>Saran</td>
<td>:</td>
<td><textarea rows="10" cols="20" name="komentar"> </textarea></td></tr>

</table>
<input type="submit" name="submit" value="Submit">
	
</section>