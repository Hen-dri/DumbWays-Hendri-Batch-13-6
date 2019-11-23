
    <html>
    <head>
    <title>
    Sistem Voucher DumbWays Mall
    </title>
    <style>
    #hasil{width:500px;margin:0 auto;padding:5px;font-weight:bold;color:#f00;}
    body{padding:0;margin:0;font-family:arial;font-size:12px;}
    #main-wrapper{border:3px double #c3d9ff;padding:5px;width:550px;margin:20px auto 0;}
    #main{text-align:left;padding:5px;background:#00FFFF;}
    table{font-size:12px;width:450px;}
    #efrih{border:1px solid #b3ccf7;background:#c3d9ff;cursor:pointer;padding:2px 24px;}
    h1{font-size:18px;font-weight:bold;padding:10px 0;text-align:center;}
    h5{text-align:center;}
    #efri{font-size:11px;padding:5px 0 0;color:#0000ff;text-align:center;}red{font-weight:bold;color:#f00;}
    </style>
    </head>
    <body>
    <div id="main-wrapper">
    <div id="main">
    <form method="POST" action="">
    <h1>Sistem Voucher DumbWays Mall</h1>
    <h5>Admin : Hendri (hendrihce@gmail.com)</h5>
    <table>
    <tr>
    <td>Masukan Kode Voucher</td>
    <td><input type="text" name="bil1" /></td>
    <tr>
    <tr><br>
    <td>Masukan Jumlah Uang yang dibayar</td>
    <td><input type="text" name="bil2" /></td>
    </tr>
    <tr>
    <td>
    <label> <br> <br>
    <input type="submit" name="Submit" value="Hitung" id="efrih">
    </label>
    <label>
    <input type="reset" name="reset" value="Batal" id="efrih">
    </label>
    </td>
    </tr>
    </table>
    </form>
    <div id="hasil">
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <?php
    //Oleh Efri Harefa http://www.efriharefa.blogspot.com/
    $bilangan1=$_POST['bil1'];
    $bilangan2=$_POST['bil2'];

    if ($bilangan2 >= 20000) {
    $diskon=(($bilangan2*40)/100);
    $bayar=($bilangan2-$diskon);
    $kembali=($bilangan2-$bayar);
    echo "Uang Anda : Rp. $bilangan2 <br>Kode Voucher : <u> $bilangan1 </u> <br> Diskon 40% : Rp. $diskon,- </u> <br>  Bayar : Rp. $bayar <br> Kembalian : Rp. $kembali </blink>";}

    elseif ($bilangan2 >0 & $bilangan2 < 50000) {
    $diskon=(($bilangan2*30)/100);
    $bayar=($bilangan2-$diskon);
    $kembali=($bilangan2-$bayar);
    echo "Uang Anda : Rp. $bilangan2 <br>Kode Voucher : <u> $bilangan1 </u> <br> Diskon 40% : Rp. $diskon,- </u> <br>  Bayar : Rp. $bayar <br> Kembalian : Rp. $kembali </blink>";}

    elseif ($bilangan2 = 0) {}


    ?>
    </div>
    </div>
    
    </div>
    </div>
    </body>
    </html>