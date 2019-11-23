<html>
<head>
<title>Anggota</title>
</head>
<body>
<table width="1350" border="1">
<tr>
<td colspan="2" align="center" ><h1>Sistem Informasi Perpustakaan Fakultas Teknik Informatika Universitas Pamulang</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="anggota.php"><h1>Anggota</h1></a></li>
<li><a href="buku.php"><h1>Buku</h1></a></li>
<li><a href="pinjam.php"><h1>Pinjam</h1></a></li>
<a href="index.php"><h4>Menu Utama</h4></a>
<ul>
</td>
<td width="500" height="490">
<a href="input_anggota.php">Input anggota</a><br><br>
<a href="buku.php">Daftar Buku</a><br><br>

 <table border="1" >
                                        <thead>	

                  </thead>
                                    
									

                                    <tbody>
									<?php 
include "koneksi.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from buku where judul_buku like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q

echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='MAGENTA'>
<td>Kode Buku</td>
<td>Judul Buku</td>
<td>Pengarang</td>
<td>Jenis Buku</td>
<td>Penerbit</td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array

echo "
<tr>
<td>".$data['kd_buku']."</td>
<td>".$data['judul_buku']."</td>
<td>".$data['pengarang']."</td>
<td>".$data['jenis_buku']."</td>
<td>".$data['penerbit']."</td>
</tr>";
}
echo "</table>";
?>


										
                                     </tbody>
									
									

                                </table>
</td>
</tr>
<tr>
<td colspan="2" align="center"><a href="hendriinformatika.16mb.com">Hendri_2013140039_06TPLMB</a></</td>
</tr>
</table>
</body>
</html>