<?php
    //untuk enter di php menggunakan \n
   echo("Array\n");
   echo("-------------\n");
    //array digunakan untuk menyimpan banyak data
    //contoh tanpa array
    // string namaMurid1 = "Ayu";
    // string namaMurid2 = "Bunga";
    // string namaMurid3 = "Cyntia";
    // string namaMurid4 = "Deni";
    // string namaMurid5 = "Elisa";
    //gimana kalo murid ada 100 atau 1000? 
    //maka agar lebih efisien kita gunakan array
    // $buah = array();
    // $hobi = [];
    $nama_array_murid = []; // inisialisasi array dengan jumlah data
    //di php array bisa disisi type data apa saya, campur juga boleh 
    echo("---------- memasukkan data ke array\n");
     $nama_array_murid[0] = "Ayu"; //[0] ini adalah index, index dimulai dari 0,
     //jika jumlah datanya 5 maka indexnya 0-4, 
     $nama_array_murid[1] = "Bunga";
     $nama_array_murid[2] = "Cyntia";
     $nama_array_murid[3] = "Deni";
     $nama_array_murid[4] = "Elisa";
     //sama dong kayak yang di atas, kalo datanya ada 100 masak harus buat $nama_array_murid[100]
     //kita bisa membuat looping untuk mengisi datanya
     //contoh membuat 10 data
     $nilai_array_murid = [];
     //buat object scanner unutk input
     for($i = 0; $i < 10; ++$i)
     {
        echo("masukan nilai murid ke [" . ($i+1) . "] : "); // keterangan input
        $nilai_array_murid[$i] = readline();// i adalah angka yang akan di looping mulai dari 0-9
        
     }
     //maka kita akan menginputkan data sebanyak 10x
     //kalo mau input ada 100 tinggal looping aja seratus kali

     //atau bisa langsung di masukkan
    $absen_array_murid = Array(
     1,2,3,4,5
     ); //1 memiliki index 0

    echo("---------- menampilkan array\n");
     // cara menampilkan array
    echo("nama :" . $nama_array_murid[0]."\n"); 
     //bagaimana kalo datanya ada banyak? ya looping aja
     
     for ( $i = 0; $i < 5; ++$i)
     {
        echo("nama murid ke [" . ($i+1) . "] : " . $nama_array_murid[$i]."\n"); //menampilkan array $nama_array_murid 
     }
      for ( $i = 0; $i < 5; ++$i)
     {
        echo("absen murid ke [" . ($i+1) . "] : " . $absen_array_murid[$i]."\n"); //menampilkan array $absen_array_murid 
     }
     // terus bagaimana kalo banyak datanya tidak diketahui? masak harus meriksa satu per satu?
     //bisa gunakan count
      for ( $i = 0; $i < count($nilai_array_murid); ++$i)
     {
        echo("nilai murid ke [" . ($i+1) . "] : " . $nilai_array_murid[$i]."\n"); //menampilkan array $nilai_array_murid 
     }
     // array asiosiatif adalah array yang berisi key dan value
     // tidak seperti array non asisosiatif yang key nya sudah di tentukan yaitu indexnya
     // dengan array asiosiatif kita bisa menggunakan mengcustum key dan menamnggil array dengan key tersebut
     // contoh
     $biodata = [
        "nama"=>"yogi",
        "nim" => "180030514",
        "laki-laki" => true,
        "umur" => 16
     ];
     //array asisosiatif tidak menggunakan for karena key nya tidak beraturan maka kita 
     //menggunakan foreach
     foreach ($biodata as $key => $value) {
         echo "key : ".$key.", value/isi : ".$value."\n";
     }
     

?>
 

