<?php 
   echo("function\n" );
   echo("-------------\n" );
    //function / fungsi adalah suatu bagian dari program yang dipergunakan untuk mengerjakan suatu tugas tertentu yang menghasilkan 
    //suatu nilai untuk dikembalikan ke program pemanggil dan letaknya dipisahkan dari bagian program yang menggunakannya
    //penulisan fungsi diawal dengan function namafungsi(){}
   echo("----------------- penulisan fungsi\n" );
    cetak_kata("ini adalah kata yang akan di cetak\n");
    tampil();

   echo("ini adalah int yg di kembalian : " . kembalian_angka() . "\n");
   echo("ini adalah bool yg di kembalian : " . kembalian_bool() . "\n");
   echo("ini adalah float yg di kembalian : " . kembalian_float() . "\n");
    // ini 2 nilai yang mau di tambahkan
    $angka_1 = 10;
    $angka_2 = 20;
   echo("----------------- fungsi dengan parameter\n" );
    // lalu masukkan ke 2 nilai ini ke fungsi
    //tambah($angka_1, $angka_2); // cara memasukkan nilai ke parameter
    //ini tidak akan di cetak ke console karena belum di cout
   echo($angka_1 . " + " . $angka_2 . " = " . tambah($angka_1,$angka_2) . "\n");
    // ini adalah fungsi yg sangat sederhana, mungkin akan lebih baik langsung membuatnya tanpa fungsi
    //namun bagaimana kalau kita akan menambahkan banyak penjumalahan?
    //kita tidak mungkin membuatnya satu per-satu,
    // maka dengan adanya fungsi kita dengan mudah mengganti parameternya saja;
    //contoh
    $angka_1 = 5; // nilainya akan di timpa
    $angka_2 = 5;// nilainya akan di timpa
   echo($angka_1 . " + " . $angka_2 . " = " . tambah($angka_1,$angka_2) . "\n");
    //atau agar lebih mudah kita bisa menggunakan void untuk membuat coutnya
    $angka_1 = 7;
    $angka_2 = 9;
    cetak_perjumlahan($angka_1,$angka_2); // mencetak dengan fungsi
    

    
   
  

function tampil_kata(){ 
   echo("hello\n"); // ini adalah program yang dijalankan apabila kita memanggil fungsi tersebut
}
    
function tampil(){
   echo("hai\n" );
}
//ada 2 jenis fungsi yaitu fungsi dengan mengembalikan sebuah nilai / atau tanpa dikembalikan
//tanpa kembalian yaitu tanpa return
//kalau mengembalikan nilai kasih retrun

function  kembalian_angka(){ // return type int
    return 12;
}

function kembalian_bool(){ // return type boolean
    return true;
}

function kembalian_float(){ // return type float
    return 19.5;
}


// fungsi dengan parameter
// jika dalam fungsi memiliki masukkan yang tidak di ketahui / memiliki banyak 
// Parameter ini akan menyimpan nilai yang diinputkan ke fungsi 
//contoh fungsi untuk mencetak string namun string tidak di ketahui / mau di diinputkan
function cetak_kata($kata){
   echo("kata yang di masukkan ke parameter : " . $kata. "\n" );
}


//contoh fungsi untuk mengembalikan 2 nilai yang di tambahkan namun 2 nilai ini tidak di ketahui $angkanya

function  tambah($nilai_1, $nilai_2){ //nilai_1 dan nilai_2  itu Parameter
    $hasil = $nilai_1 + $nilai_2; // proses menghitung nilai
    return $hasil; // mengembalikan nilai hasil
}
// membuat fungsi untuk menampilkan keterangan echo perjumlahannya
function cetak_perjumlahan( $angka_1,  $angka_2){
   echo($angka_1 . " + " . $angka_2 . " = " . tambah($angka_1,$angka_2). "\n" ); // mengambil fungsi di dalam fungsi
}


