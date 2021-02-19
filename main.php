<?php
  
   echo "Hello World\n"; 
   echo "---------------------\n";
   
   // deklarasi Variable
   //type data di php hanya menggunakan $namavariable, jika ingin menggunakan int maka nilainya saja yang di ganti int
   $umur; //type data integer untuk angka tanpa koma, jika koma akan di bulatkan (variable = number)
   $nama;//string untuk kata / huruf
   $PI;// float untuk angka dengan koma (pecahan) jika bulat maka akan di conversi (contoh 1 == 1.00)
   $PI2;// doube mirip dengan float namun angka di belakang koma lebih banyak
   //note(koma dalam bahasa pemrograman menggunakan titik (.))
   $udahmakan; // bool / bolean adalah type data yang menghasilkan true (benar) / false (salah)
   $indexprestasi; // char adalah type data untuk 1 huruf 
   
  //akan lebih efectif tanpa deklarasi
   
   //pemberian nilai pada variable / inisialisasi
   $umur = 21; // jadi int
   $nama  = "Yogi"; //jadi string
   $PI = 3.14; //jadi float
   $PI2 = 3.33; //jadi double
   $udahmakan = true; //jadi boolean
   $indexprestasi = 'A'; //jadi // char menggunakan petik 1 sedangkan string menggunakan petik 2
   
   //output 
   //output di php menggunakan echo/print
   echo "Nama : " . $nama . "\n"; //pake titik woi //tanda . menggunakan untuk menyambung variable
   echo "umur : " . $umur . "\n";
   echo "Sudah Makan? : " . $udahmakan . "\n";
   print "Index Prestasi : " . $indexprestasi . "\n";
   print  "PI = " . $PI . " dan PI 2 = " . $PI2; //jangan lupa titik koma di akhir setiap baris
   // echo/print digunakan untuk menghasilkan output / \n digunakan untuk menambah line (enter)
   
?>
