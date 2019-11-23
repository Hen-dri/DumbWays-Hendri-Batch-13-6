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
<form method="post" action="proses_edit_pinjam.php?id=<?php echo $_GET['id'];?>" >

<?php 
$id = $_GET['id'];
$query = mysql_query ("select * from meminjam where id_pinjam=$id");
$data= mysql_fetch_array($query);
?>

<table border="0">
<tr>
<td>Nama Peminjam</td>
<td>:</td>
<td><?php

$sql_anggota="select * from anggota order by id_anggota";
$kueri_anggota=mysql_query($sql_anggota) or die(mysql_error());
?>
                                            <select name="anggota">
                                             <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_anggota))
   {
?>
      <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
<?php
  }
?>
                                            </select></td>
</tr>
<tr>
<td>Judul Buku </td>
<td>:</td>
<td><?php

$sql_buku="select * from buku order by kd_buku";
$kueri_buku=mysql_query($sql_buku) or die(mysql_error());
?>
                                            <select name="buku">
                                             <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_buku))
   {
?>
      <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
<?php
  }
?>
                                            </select><td>
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
<td colspan="2" align="center">Hendri_2013140039_06TPLMB<br><script src="www.hendriinformatika.16mb.com"></script></td>
</tr>
</table>
</body>
</html>