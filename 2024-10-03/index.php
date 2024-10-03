Selelsaikan Perhitungan ini  5+3*7/4-9%8 menggunakan function
selesaikan perhitungan ini 

<?php
echo "<br>";

$hasil = tambah(A: 5, B: kali(A:3, B:7));
$hasil = bagi(A: $hasil, B: 4);
$hasil = kurang (A: $hasil, B: 9);
$hasil = Modulo (A: $hasil, B:8);
echo $hasil;
    // //   function kali($kata, $A, $B) {
    //     //    echo "Belajar  Function";
    //     $C=$A*$B
    //   }
    //     // echo $kata;
       
    //    echo $C;
    //   kali(kata: "Saya siswa SMK");

    function kali ($A, $B){
        $C=$A*$B;
        // echo $C;
        return $C;
    }
    kali (A:10, B:12);
    echo "<br>";


      function tambah($A, $B) {
        // echo "Belajar Tambah"; 
          $C=$A+$B;
        // echo $C;
        return $C;
        }
     tambah(A:12, B:32);
     echo "<br>";

     function kurang($A, $B) {
        // echo "Belajar kurang";
        $C=$A-$B;
        // echo $C;
        return $C;
     }
     kurang(A:10, B:12);
     echo "<br>";

     function bagi($A, $B){
        $C=$A-$B;
        // echo $C;
        return $C;
        // echo"Belajar Bagi";
     }

     bagi(A: 10, B:5); 
     echo "<br>";

     function Modulo ($A, $B){
        $C = $A % $B;
        // echo $C;
        return $C;
     }

     Modulo(A: 10, B: 20);
?>
