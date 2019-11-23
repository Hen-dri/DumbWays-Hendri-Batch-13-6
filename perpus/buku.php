<html>
<head>
<title>Buku</title>
</head>
<body>
<table width="1350" border="1" background="unpam5.jpg">
<tr>
<td colspan="2" align="center"><h1>Sistem Informasi Perpustakaan DumbWays</h1></td>
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
<a href="input_buku.php">Input buku</a><br><br>

<form name="formcari" method="post" action="searchbuku.php">
<table width="330" border="0" align="center" cellpadding="0">
<tr bgcolor="blue">
<td height="25" colspan="3">
<strong> Cari Buku ! </strong>
</td>
</tr>
<tr> <td>  Name </td>
<td> <input type="text" name="name"> </td>
</tr>
<td></td>
<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" > </td>
</table>
</form>
 <table border="1" >
                                        <thead>	

          <tr>
            <th >No</th>
            <th >Kode Buku </th>
			<th >Judul Buku </th>
			<th >Pengarang </th>
			<th >jenis Buku</th>
			<th >penerbit</th>
			
			<th >Aksi</th>
          </tr>
        </thead>
                                    
									

                                    <tbody>
									<?php 
include "koneksi.php";
$query	= "select * from buku order by kd_buku";
$sql	= mysql_query ($query);
$no = 1;
while ($data=mysql_fetch_array($sql)) {
?>			
                                        <tr class="odd gradeX">
                                            <td><?php echo $no?></td>
                                            <td><?php echo $data['kd_buku'];?></td>
											 <td><?php echo $data['judul_buku'];?></td>
											  <td><?php echo $data['pengarang'];?></td>
											   <td><?php echo $data['jenis_buku'];?></td>
											    <td class="center"><?php echo $data['penerbit'];?></td>
											
                                            <td class="center"><a href="edit_buku.php?id=<?php echo $data['kd_buku']; ?>" > Edit </a>|<a href="hapus_buku.php?id=<?php echo $data['kd_buku']; ?>" 
	onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['judul_buku']; ?>?')"> hapus</a></td>
                                        </tr>
										
                                        <?php $no++; }?>
                                    </tbody>
									
									

                                </table>
</td>
</tr>
<tr>
<td colspan="2" align="center"><a href="hendrihce.000webhostapp.com">Hendri</a></</td>
</tr>
</table>
</body>
</html>