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
<a href="anggota.php">Daftar Anggota</a><br><br>

 <table border="1" >
                                        <thead>	

                  </thead>
                                    
									

                                    <tbody>
									<?php 
include "koneksi.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from anggota where nm_anggota like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q

echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='MAGENTA'>
<td>No</td>
<td>Nama Mahasiswa</td>
<td>Alamat</td>
<td>Tempat Tanggal Lahir</td
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array

echo "
<tr>
<td>".$data['id_anggota']."</td>
<td>".$data['nm_anggota']."</td>
<td>".$data['alamat']."</td>
<td>".$data['ttl_anggota']."</td>
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