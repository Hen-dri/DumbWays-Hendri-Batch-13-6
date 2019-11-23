<html>
<head>
<title>Anggota</title>
</head>
<body>
<table width="1350" border="1" background="unpam5.jpg">
<tr>
<td colspan="2" align="center" ><h1><font color="#000000">Sistem Informasi Perpustakaan DumbWays</h1></td>
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

<form name="formcari" method="post" action="search_exe.php">
<table width="330" border="0" align="center" cellpadding="0">
<tr bgcolor="blue">
<td height="25" colspan="3">
<strong> Anggota Perpus ! </strong>
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
            <th >id_anggota </th>
			<th >nama anggota </th>
			<th >alamat </th>
			<th >TTL </th>
			<th >Status</th>
			
			<th >Aksi</th>
          </tr>
        </thead>
                                    
									

                                    <tbody>
                                    	<font color="#0000CD">
									<?php 
include "koneksi.php";


$query	= "select * from anggota order by id_anggota";
$sql	= mysql_query ($query);
$no = 1;
while ($data=mysql_fetch_array($sql)) {

?>			
                                        <tr class="odd gradeX">
                                            <td><?php echo $no?></td>
                                            <td><?php echo $data['id_anggota'];?></td>
											 <td><?php echo $data['nm_anggota'];?></td>
											  <td><?php echo $data['alamat'];?></td>
											   <td><?php echo $data['ttl_anggota'];?></td>
											    <td class="center"><?php echo $data['status_anggota'];?></td>
											
                                            <td class="center"><a href="edit_anggota.php?id=<?php echo $data['id_anggota']; ?>" > Edit </a>|<a href="hapus_anggota.php?id=<?php echo $data['id_anggota']; ?>" 
	onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['nm_anggota']; ?>?')"> hapus</a></td>
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