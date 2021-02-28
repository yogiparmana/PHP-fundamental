<?php 
   echo("switch case\n");
   echo("-----------------\n");
    //switch case adalah percabangan kode program dimana kita membandingkan isi sebuah variabel dengan beberapa nilai
    //contoh
    //int number = 2; //langsung input atau
    $number;
    echo("masukkan angka : ");
    $number = readline();
    switch($number){ //variable yg akan di switch / di periksa
        case 0: // jika number == 0
           echo("number == 0"); //jalankan ini
            break; //break di gunakan untuk menstop / case yang selanjutnya di hentikan  jika casenya benar
        case 1: // jika number == 1
           echo("number == 1"); //jalankan ini
            break; //break
        case 3: //jika number == 3
           echo("number == 3"); //jalankan ini
            break; //break
        default: // jika variable tidak sama dengan case 
           echo("number != 0,1,3"); //jalankan ini
            break;//break
    }

?>
