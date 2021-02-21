<?php  
echo( "Operator\n");
echo( "-----------\n");
    
    //-----------operator---------------
    //simbol untuk melakukan operasi
    
    //----------------Operator Aritmatika
    /*
Penjumlahan +
Pengurangan -
Perkalian   *
Pembagian   /
Sisa Bagi   %
    
    */
    echo("----------------------aritmatika\n");
    
    $angka1 = 10;
    $angka2 = 20;
    
    //tambah
    $hasil = $angka1+$angka2;
    echo( "Hasil dari ".$angka1." + ".$angka2." = ".$hasil."\n");
    //kurang
    $hasil = $angka1-$angka2;
    echo( "Hasil dari ".$angka1." - ".$angka2." = ".$hasil."\n");
    //kali
    $hasil = $angka1 * $angka2;
    echo( "Hasil dari ".$angka1." x ".$angka2." = ".$hasil."\n");
    //bagi
    $hasil = $angka2 / $angka1;
    echo( "Hasil dari ".$angka1." : ".$angka2." = ".$hasil."\n");
    //modulus atau sisa bagi
    $hasil = $angka1 % $angka2;
    echo( "Hasil dari ".$angka1." mod ".$angka2." = ".$hasil."\n");
    
    
     echo( "----------------------penugasan\n");
    
    //----------------Operator penugasan (Assignment Operator) 
    // fungsinya untuk mengisi nilai
    
    /*
Pengisian Nilai             =
Pengisian dan Penambahan    +=
Pengisian dan Pengurangan   -=
Pengisian dan Perkalian     *=
Pengisian dan Pembagian     /=
Pengisian dan Sisa bagi     %=
    */
    

    
    
    $a = 1;
    $b = 2;
    
    //+=
    $a+=$b; // artinya a = a + b; 3
     echo( "a+=b : ".$a."\n");
    $a-=$b; // artinya a = a - b; -1
     echo( "a-=b : ".$a."\n");
    $a*=$b; // artinya a = a x b; 2
     echo( "a*=b : ".$a."\n");
    $a/=$b; // artinya a = a / b; 0,5 / 1 karena int
     echo( "a/=b : ".$a."\n");
    $a%=$b; // artinya a = a % b;  1
     echo( "a%=b : ".$a."\n");
     
     //-----------operator bitwise dengan style penugasan
     //operasi berdasarkan biner
     /*
    AND             &
    OR              |
    XOR             ^
    NOT/komplemen   ~
    Left Shift      <<
    Right Shift     >>
    */
    echo("a : ".$a.", b : ".$b."\n");
    $a<<=$b; // artinya a = a << b; menggunakan rumus biner | 0101010
     echo( "a<<=b : ".$a."\n");
    $a>>=$b; // artinya a = a >> b; menggunakan rumus biner | 0101010
     echo( "a>>=b : ".$a."\n");
    $a&=$b; // artinya a = a & b; menggunakan rumus biner | 0101010
     echo( "a&=b : ".$a."\n");
    $a|=$b; // artinya a = a | b; menggunakan rumus biner | 0101010
     echo( "a|=b : ".$a."\n");
    $a^=$b; // artinya a = a ^ b; menggunakan rumus biner | 0101010
     echo( "a^=b : ".$a."\n");
     $cc = ~$a;
     echo( "~a : ".$cc."\n");
     $cc = ~$b;
     echo( "~b : ".$cc."\n");
    
    
    
    echo( "----------------------perbandingan\n");
    
    //----------------perbandingan
    //untuk membandingkan 2 buah nilai
    // menghasilkan true 1, dan false 0
    
    /*
Lebih Besar             >
Lebih Kecil             <
Sama Dengan             ==
Tidak Sama dengan       !=
Lebih Besar Sama dengan >=
Lebih Kecil Sama dengan <=
  */
  echo("a : ".$a.", b : ".$b."\n");
  $c = $a > $b;
  echo( "a>b : ".$c."\n");
  $c = $a < $b;
  echo( "a<b : ".$c."\n");
  $c = $a ==$b;
  echo( "a==b : ".$c."\n");
  $c = $a !=$b;
  echo( "a!=b : ".$c."\n");
  $c = $a >=$b;
  echo( "a>=b : ".$c."\n");
  $c = $a <=$b;
  echo( "a<=b : ".$c."\n");
  
 
 //---------------operator logika
 
 echo( "-------------------logika\n");
 
 /*
Logika AND        true  && true = true, sisanya false
Logika OR         false  || false = false, sisanya true
Negasi/kebalikan    !true = false, !false = true
*/
// a=1, b=2
//dalam java logika harus membandingkan true dan false, tidak seperti c c++ yang bisa membandingkan 2 buah angka
// echo("a && b : ". a&&b."\n");
// echo("a || b : ". a||b."\n");
// echo( "!a : ". !a."\n");
// echo( "!b : ". !b."\n");
echo("a : ".$a.", b : ".$b."\n");
echo("a && b : ". ($a==3&&$b==2)."\n"); //false
echo("a || b : ". ($a==3||$b==2)."\n"); //true
echo( "!a : ". !($a==3||$b==2)."\n"); //false
echo( "!b : ". !($a==3&&$b==2)."\n");//true

//false == kosong

//---------------operator lain-lain

echo( "---------------------- operator lain-lain\n");

/*
Alamat memori   &   untuk mengambil alamat memori
Pointer         *   untuk membuat pointer
Ternary         ? : untuk membuat kondisi
Increment       ++  untuk menambah 1
Decrement       --  untuk mengurangi 1

*/
//php tidak ada pointer
//*$d;
//echo("ambil tempat memori variable d : ". &$d."\n");
echo("apakah 1 = 2 ? : ". ((1 == 2) ? "iya" : "tidak")."\n");
$var = 7;
//karna di yang di proses pertama adalah operasi/variable lalu baru string jadi saya akali dengan menanmbahkan -1 dan +1
echo($var." ditambahkan satu kali : " . (++$var)."\n"); 
echo($var." dikurangkan satu kali : " . (--$var)."\n");
echo($var." ditambahkan satu kali : " . ($var++)."\n"); //ditampilkan dlu baru di tambah jadinya akan tetap 
echo("setelah di ditambah satu kali : ".$var."\n"); //hasil sebenarnya
echo($var." dikurangkan satu kali : " . ($var--)."\n"); //ditampilkan dlu baru di tambah jadinya akan tetap 
echo("setelah di kurangi satu kali : ".$var."\n"); //hasil sebenarnya

    

?>
