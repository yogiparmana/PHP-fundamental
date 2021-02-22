<?php 

echo("Pengulangan\n");
 echo("-----------\n");
    
    
  echo("----------- for\n");
   //pengulangan dalam bahasa pemrogramman umumnya ada 3 pengulangan
   //pengulangan menggunakan -------------------- for
   //contoh pengulangan 5x
   for($i = 0; $i < 5; ++$i){
    echo($i."\n"); //01234 karena  $i dimulai dari o
       //kenapa 0 karena umumnya for digunakan untuk menampilkan isi array
       //karena index array di mulai dari 0
       // angka 5 adalah jumlah banyaknya pengulangan
   }
echo("\n");
   
   //agar dimulai 1 langsung saja isikan  $i = 1 dan juga < di kasih = atau 5 di ganti jadi 6agar mengulang 5x 
    for($i = 0; $i <= 5 /*$i  < 6*/; ++$i){
    echo($i."\n"); //01234 karena  $i dimulai dari o
       //kenapa 0 karena umumnya for digunakan untuk menampilkan isi array
       //karena index array di mulai dari 0
       // angka 5 adalah jumlah banyaknya pengulangan
   }
echo("\n");
   //contoh pengulangan 5 tapi decrement
   for($i = 5; $i > 0 ; $i--){
    echo($i."\n"); // 54321 karena $i dimulai dari 5 
   }
   
   
  echo("----------- do while\n");
     //pengulangan menggunakan -------------------- while do
     $i = 0;
     do{
         $i++; //$i + 1
      echo($i."\n"); // cetak $i 
         
     }while($i < 5); // sampai $i lebih kecil dari 5
     // hasil 12345
     echo("\n");
     $i = 5; //ubah i = 5
     //---------------while
     while($i > 0){ //cek apakah $i lebih besar dari 0 jika true
      echo($i."\n"); //cetak $i
         $i--; //$i kurang 1
     }

      ?>
