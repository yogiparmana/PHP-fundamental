<?php
  
    echo("casting\n");
    echo("-----------\n");
   
   
   //--------------------------Casting-----------------------
   //casting adalah mengubah type data agar bisa di operasikan
   // casting dalam php bisa otomatis yaitu yaitu di sebut juggling
   // casing otomatis adalah default php
   
   echo("casting otomatis\n");
   $a = 10;
   $b = 10.5;
   //int hasil = a + b; //eroor karena hasil adalah int sedangkan jawabannya berupa float
   //maka
   
   $hasil = $a + $b; // float b akan di convert ke int 
   
   //penulisan casting yaitu di depan variable di tambah kurung () diisi dengan pengubah type data
   
   
   echo("hasil dari ".$a."+".$b."=".$hasil."\n"); //titik bukan +
   //php akan langsung menggubah ke type data yang dibutuhkan
   
   //casting manual
   
   $hasilmanual = $a + (integer)$b; //float -> int
    echo("hasil casing manual dari ".$a."+".$b."=".$hasilmanual); 
 
   
?>
