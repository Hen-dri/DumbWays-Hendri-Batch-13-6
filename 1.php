<?php
    function bilanganKecil(){
    $MAX_VALUE=200;

    $a=array(16,18,17,15,14);
    for($i=0;$i<count($a) ;$i++){
             if($a[$i] <
$MAX_VALUE){
                 $MAX_VALUE=$a[$i];
             }
    }
    echo "Nama : Hendri";
    echo "<br>";
    echo "email : hendrihce@gmail.com";
    echo "<br><br>";
    echo "Bilangan Terkecilnya adalah <b>".$MAX_VALUE."</b>";
    echo "<br>";
    }
    bilanganKecil();
   
    function bilanganBesar(){
    $MAX_VALUE=0;

    $a=array(16,18,17,15,14);
    for($i=0;$i<count($a) ;$i++){
             if($a[$i] > $MAX_VALUE){
                 $MAX_VALUE=$a[$i];
             }
    }
    echo "Bilangan Terbesarnya adalah <b>".$MAX_VALUE."</b>";
   
    }
    bilanganBesar();
?> 