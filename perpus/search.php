<?php
include "koneksi.php";
                    $query1="select * from anggota order by nm_anggota asc";
                    
                   if(isset($_POST['anggota'])){
			               
                          $cari = $_POST['anggota'];
			                    $query1="SELECT * FROM  anggota where id_anggota like '%$cari%'
			                     or nm_anggota like '%$cari%'  ";
		                    }

		               $Nomor = 0;
		               $tampil = mysql_query($query1) or die(mysql_error());
		         ?>