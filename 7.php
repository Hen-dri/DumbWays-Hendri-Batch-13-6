<html>
<head>
    <title>MEMBUAT SORTING DENGAN METODE SELECTION<br/></title>
    <style type="text/css">
        body{
            font-family: sans-serif;
        }
        h1{            
            text-align: center;
            margin-bottom: 100px;
        }
        .box{
            width: 600px;          
            margin: 10px auto;
            text-align: center
        }
        .hasil{
            background: blue;
            color: #fff;
            padding: 10px 0px;
        }
        input[type='text']{
            width: 40px;
        }
    </style>
 
</head>
<h1>HENDRI<br/>
<body>
<div class="box">
        <center><h3>MASUKKAN HURUF YANG AKAN DI URUTKAN<br/></center>
    
        <!--form input angka-->
        <form action="" method="post">           
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="text" name="d">
            <input type="text" name="e">
            <input type="text" name="f">
            <input type="text" name="g">
            <input type="text" name="h"><br><br>
            <input type="submit" name="submit" value="SORTING">
        </form>
 
        <?php  
        //cek submit
        if(isset($_POST['submit'])){
    
            //menangkap data angka yang di input
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            $d=$_POST['d'];
            $e=$_POST['e'];
            $f=$_POST['f'];
            $g=$_POST['g'];
            $h=$_POST['h'];
 
            //masukkan data angka ke array
            $angka=array($a,$b,$c,$d,$e,$f,$g,$h); 	
 
            //mengurutkan angka dengan fungsi sort()
            sort($angka);  
            echo "</br>";
            echo "<div class='hasil'> HASIL : ";
            
            //menampilkan isi array angka dengan looping for
            $jumlah=count($angka);  
            for($x=0;$x<$jumlah;$x++)  
            {  
                echo $angka[$x];  
                echo " ";  
            }  	
            echo "</div>";
 
        }
        ?>  
    </div>
</body>
</html>