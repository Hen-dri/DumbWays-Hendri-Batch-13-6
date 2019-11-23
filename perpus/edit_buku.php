<html>
<head>
</head>
<body>
<?php 
include "koneksi.php";
?>
<table width="1350" border="1">
<tr>
<td colspan="2" align="center"><h1>Sistem Informasi Perpustakaan DumbWays</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="anggota.php"><h1>Anggota</h1></a></li>
<li><a href="buku.php"><h1>Buku</h1></a></li>
<li><a href="pinjam.php"><h1>Pinjam</h1></a></li>
<ul>

</td>
<td width="500" height="490" >
<form method="post" action="proses_edit_buku.php?id=<?php echo $_GET['id'];?>" >

<?php 
$id = $_GET['id'];
$query = mysql_query ("select * from buku where kd_buku=$id");
$data= mysql_fetch_array($query);
?>

<table border="0">
<tr>
<td>Kode Buku</td>
<td>:</td>
<td><input type="text" name="kode"  value="<?php echo $data['kd_buku']?>"></td>
</tr>
<tr>
<td>Judul Buku</td>
<td>:</td>
<td><input type="text" name="judul"  value="<?php echo $data['judul_buku']?>"></td>
</tr>
<tr>
<td>Pengarang</td>
<td>:</td>
<td><input type="text" name="pengarang"  value="<?php echo $data['pengarang']?>"></td>
</tr>
<tr>
<td>Jenis Buku</td>
<td>:</td>
<td><input type="text" name="jenis"  value="<?php echo $data['jenis_buku']?>">
</tr>
<tr>
<td>Penerbit Buku</td>
<td>:</td>
<td><input type="text" name="penerbit"  value="<?php echo $data['penerbit']?>">
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value="simpan"></td>
</tr>

</table>
</form>
</td>
</tr>
<tr>
<td colspan="2" align="center"><a href="hendriinformatika.16mb.com">Hendri_2013140039_06TPLMB</a></</td>
</tr>
</table>

</body>
</html>