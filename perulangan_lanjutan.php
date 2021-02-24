<?php 
echo("Pengulangan lanjutan x latihan\n");
   echo("-----------------\n");
    
    
    echo("----------- perulangan 2 dimensi\n");
   //pengulangan 2 dimensi yaitu baris dan kolom
   //000
   //000
   //
   //contoh pengulangan 2 dimensi
   for($i = 1; $i <= 5; $i++){ // ini untuk baris 
       for($j = 1; $j <= 4; $j++){ // ini untuk kolom | 5 baris 4 kolom
         echo("baris ke " . $i . " kolom ke " . $j . "| ");  
       }
      echo("\n");
   }
  echo("\n");
   
   
  echo(" ------------ perulangan 3 dimensi\n");
   //perulangan 3 dimensi yaitu baris kolom 1 isi
   /*
| 1| 1| 1| | 1| 1| 2| | 1| 1| 3| -> baris
| 1| 2| 1| | 1| 2| 2| | 1| 2| 3| 
| 1| 3| 1| | 1| 3| 2| | 1| 3| 3| 
    isi         isi         isi
| 2| 1| 1| | 2| 1| 2| | 2| 1| 3| 
| 2| 2| 1| | 2| 2| 2| | 2| 2| 3| 
| 2| 3| 1| | 2| 3| 2| | 2| 3| 3| 
    isi         isi         isi
| 3| 1| 1| | 3| 1| 2| | 3| 1| 3| 
| 3| 2| 1| | 3| 2| 2| | 3| 2| 3| 
| 3| 3| 1| | 3| 3| 2| | 3| 3| 3| 
    isi         isi         isi
    
kolom
   */
   for($i = 1; $i<=3; $i++){ // baris
       for($j = 1; $j<=3; $j++){ //kolom
           for($k = 1; $k<=3; $k++){ //isi (kolom baris)
           echo("| " . $i . "| " . $j . "| " . $k . "|\t");
            
            }
            echo("\n");
        }
       echo("\n");
}

  echo(" ------------ perulangan 3 dimensi ++ \n");
   
    // lebih dari 3 dimensi sama kayak 3 dimensi tapi isinya 
    /*
| 1| 1| 1| 1|   | 1| 1| 1| 2|   | 1| 1| 1| 3|   
| 1| 1| 2| 1|   | 1| 1| 2| 2|   | 1| 1| 2| 3|   
| 1| 1| 3| 1|   | 1| 1| 3| 2|   | 1| 1| 3| 3|   
    isi1            isi1            isi1
| 1| 2| 1| 1|   | 1| 2| 1| 2|   | 1| 2| 1| 3|   
| 1| 2| 2| 1|   | 1| 2| 2| 2|   | 1| 2| 2| 3|   
| 1| 2| 3| 1|   | 1| 2| 3| 2|   | 1| 2| 3| 3|   
  isi1            isi1            isi1
| 1| 3| 1| 1|   | 1| 3| 1| 2|   | 1| 3| 1| 3|   
| 1| 3| 2| 1|   | 1| 3| 2| 2|   | 1| 3| 2| 3|   
| 1| 3| 3| 1|   | 1| 3| 3| 2|   | 1| 3| 3| 3|   
  isi1            isi1            isi1
                    isi 2
                    
| 2| 1| 1| 1|   | 2| 1| 1| 2|   | 2| 1| 1| 3|   
| 2| 1| 2| 1|   | 2| 1| 2| 2|   | 2| 1| 2| 3|   
| 2| 1| 3| 1|   | 2| 1| 3| 2|   | 2| 1| 3| 3|   
  isi1            isi1            isi1
| 2| 2| 1| 1|   | 2| 2| 1| 2|   | 2| 2| 1| 3|   
| 2| 2| 2| 1|   | 2| 2| 2| 2|   | 2| 2| 2| 3|   
| 2| 2| 3| 1|   | 2| 2| 3| 2|   | 2| 2| 3| 3|   
  isi1            isi1            isi1
| 2| 3| 1| 1|   | 2| 3| 1| 2|   | 2| 3| 1| 3|   
| 2| 3| 2| 1|   | 2| 3| 2| 2|   | 2| 3| 2| 3|   
| 2| 3| 3| 1|   | 2| 3| 3| 2|   | 2| 3| 3| 3|   
  isi1            isi1            isi1
                    isi2

| 3| 1| 1| 1|   | 3| 1| 1| 2|   | 3| 1| 1| 3|   
| 3| 1| 2| 1|   | 3| 1| 2| 2|   | 3| 1| 2| 3|   
| 3| 1| 3| 1|   | 3| 1| 3| 2|   | 3| 1| 3| 3|   
  isi1            isi1            isi1
| 3| 2| 1| 1|   | 3| 2| 1| 2|   | 3| 2| 1| 3|   
| 3| 2| 2| 1|   | 3| 2| 2| 2|   | 3| 2| 2| 3|   
| 3| 2| 3| 1|   | 3| 2| 3| 2|   | 3| 2| 3| 3|   
  isi1            isi1            isi1
| 3| 3| 1| 1|   | 3| 3| 1| 2|   | 3| 3| 1| 3|   
| 3| 3| 2| 1|   | 3| 3| 2| 2|   | 3| 3| 2| 3|   
| 3| 3| 3| 1|   | 3| 3| 3| 2|   | 3| 3| 3| 3|   
  isi1            isi1            isi1
                    isi3
    */

   for($i = 1; $i<=3; $i++){ // baris
       for($j = 1; $j<=3; $j++){ //kolom
           for($k = 1; $k<=3; $k++){ // 1 isi (kolom, baris)
                for($l = 1; $l <=3; $l++){ // 2 isi(kolom, baris)
                        echo("| " . $i . "| " . $j . "| " . $k . "| " . $l . "|\t"); 
                }
               echo("\n");
            
            }
            echo("\n");
        }
       echo("\n");
}

echo("--------------fariasi loop\n");
//loop bisa dibuat variasi seperti membuat segitiga atau b$ng atau yang lainnya tergantung sebagaimana bagusnya kita memahami for loop itu$ sendiri
//contoh fariasi

echo("fariasi 1\n");
   for($i = 0; $i<=3; $i++){ 
       for($j = 0; $j<=$i; $j++){ 
           echo("o ");
       }
      echo("\n");
   }
  echo("\n");

  echo("fariasi 2.1\n"); //decrment
   for($i = 0; $i<=3; $i++){ 
       for($j = 3; $j>=$i; $j--){ 
           echo("o ");
       }
      echo("\n");
   }
  echo("\n");

  echo("fariasi 2.2\n");// increment
   for($i = 0; $i<=3; $i++){ 
       for($j = $i; $j<=3; $j++){ 
           echo("o ");
       }
      echo("\n");
   }
  echo("\n");
   
   
  echo("fariasi 3.1\n"); //dengan spasi
     for($i = 0; $i<=3; $i++){ 
       for($j = 0; $j<$i; $j++){ 
           echo(" ");
       }
        for($k = 4; $k>$i; $k--){ 
           echo("o ");
       }
      echo("\n");
   }
  echo("\n");
   
  echo("fariasi 3.2\n"); //dengan calculate
     for($i = 0; $i<=3; $i++){ 
       for($j = 0; $j<$i; $j++){ 
           echo("  ");
       }
        for($k = 3; $k>=(2*$i-3); $k--){ 
           echo("o ");
       }
      echo("\n");
   }
  echo("\n");
   
   echo("fariasi 4.1\n"); // dengan space
     for($i = 0; $i<=3; $i++){ 
       for($k = $i; $k<3; $k++){ 
           echo(" ");
       }
       for($j = 0; $j<=$i; $j++){ 
           echo("o ");
       }
      
      echo("\n");
   }
  echo("\n");
   
    echo("fariasi 4.2\n"); // dengan calculate
      for($i = 0; $i < 5; $i++){
        for($j = 4; $j > $i; $j--){
        echo("  ");
        }
        for($k = 0; $k<(2*$i-1); $k++){
        echo("o "); 
        }
  echo("\n");
   }
     echo("\n");
   

   
      echo("fariasi 5.1\n"); //decremet
     for($i = 0; $i<=3; $i++){ 
       for($j = 0; $j<$i; $j++){ 
           echo("  ");
       }
        for($k = 3; $k>=$i; $k--){ 
           echo("o ");
       }
      echo("\n");
   }
  echo("\n");
     echo("fariasi 5.2\n"); //incrment
     for($i = 0; $i<=3; $i++){ 
       for($j = 0; $j<$i; $j++){ 
           echo("  ");
       }
        for($k = $i; $k<=3; $k++){ 
           echo("o ");
       }
      echo("\n");
   }
  echo("\n");
   
           echo("fariasi 6.1\n"); // decrement
     for($i = 0; $i<=3; $i++){ 
      for($k = 3; $k>$i; $k--){ 
           echo("  ");
       }
       for($j = 0; $j<=$i; $j++){ 
           echo("o ");
       }
       
      echo("\n");
   }
  echo("\n");
   
        echo("fariasi 6.2\n"); // incrment
     for($i = 0; $i<=3; $i++){ 
      for($k = $i; $k<3; $k++){ 
           echo("  ");
       }
       for($j = 0; $j<=$i; $j++){ 
           echo("o ");
       }
       
      echo("\n");
   }
  echo("\n");
   
      echo("fariasi 7.1\n"); // dengan calculate
      for($i = 1; $i < 4; $i++){
        for($j = 4; $j > $i; $j--){
        echo("  ");
        }
        for($k = 0; $k<(2*$i-1); $k++){
        echo("o "); 
        }
  echo("\n");
   }   
   for($i = 0; $i<=3; $i++){ 
       for($j = 0; $j<$i; $j++){ 
           echo("  ");
       }
        for($k = 3; $k>=(2*$i-3); $k--){ 
           echo("o ");
       }
      echo("\n");
   }
     echo("\n");
      
      echo("fariasi 7.2\n"); //dengan spasi
     for($i = 0; $i<=3; $i++){ 
       for($k = $i; $k<3; $k++){ 
           echo(" ");
       }
       for($j = 0; $j<=$i; $j++){ 
           echo("o ");
       }
      
      echo("\n");
   }
        for($i = 1; $i<=3; $i++){ 
       for($j = 0; $j<$i; $j++){ 
           echo(" ");
       }
        for($k = 4; $k>$i; $k--){ 
           echo("o ");
       }
      echo("\n");
   }
  echo("\n");
   
   
   
  echo("fariasi 8\n");
      for($i = 0; $i<=3; $i++){ 
       for($j = $i; $j<=3; $j++){ 
           echo("o ");
       }
           for($k = 1; $k<=1; $k++){ 
           echo("  ");
       }
       for($j = 0; $j<=(2*$i); $j++){ 
           echo("o ");
       }

          for($j = 1; $j<=1; $j++){ 
           echo("  ");
       }
        for($k = $i; $k<=3; $k++){ 
           echo("o ");
       }
      
      echo("\n");
   }
   for($i = 1; $i<=3; $i++){ 
       for($j = 0; $j<=$i; $j++){ 
           echo("o ");
       }
         for($j = 1; $j<=1; $j++){ 
           echo("  ");
       }
        for($k = (2*$i-3); $k<=3; $k++){ 
           echo("o ");
            
       }
        for($k = 1; $k<=1; $k++){ 
           echo("  ");
       }
       for($j = 0; $j<=$i; $j++){ 
           echo("o ");
       }
      echo("\n");
   }
   
  echo("\n");
   
  echo("--------------perulangan dengan kondisi\n");
   //perulangan juga bisa memiliki kondisi 
   //seperti saat kita membuat perulangan angka ganjil
  echo("Membuat bilangan ganjil\n");
   for($i = 0; $i < 10; $i++){
       //kondisi
       if($i%2 != 0){
          echo( $i ." ");
       }
   }
   
     echo("\n");
   
     echo("Membuat bilangan genap\n");
   for($i = 0; $i < 10; $i++){
       //kondisi
       if($i%2 == 0){
          echo( $i ." ");
       }
   }
   
     echo("\n");
   
    echo("fariasi 4.3\n"); // dengan if
      for($i = 0; $i < 5; $i++){
        for($j = 4; $j > $i; $j--){
        echo("  ");
        }
        for($k = 0; $k<$i; $k++){
            if($k!=0){
            for($l = 0; $l < 2; $l++){
                echo("o "); 
            }
            }else{
                echo("o "); 
            }
        }
  echo("\n");
   }
   
  echo("\n");
 ?>
