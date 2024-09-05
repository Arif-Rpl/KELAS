<?php
    for ($i=1; $i <= 10; $i++) { 
        echo $i;
    }
    echo "<br>";

    for ($i=10; $i >= 0; $i--) { 
        echo $i;
        
    }
    echo "<br>";
    $ganjil =7%2;
    echo $ganjil;
    echo "<br>";

    for ($i=1; $i < 100; $i++) { 
        $ganjil = $i % 2;
        //echo $ganjil;
        if ($ganjil==1) {
            echo $i;
        }
    }
    echo "<br>";
    $KKM = 80;
    $nilai = 0;
    if ($nilai > $KKM) {
        echo "lulus";
    }
    else {
        echo "tidak lulus";
    }
    echo "<br>";
    $status= "tidak lulus";
    if ($nilai > $KKM) {
        $status= "lulus";
    }
    echo $status;
    echo "<br>";

    $rapot= 0;
    $tugas= 0;

    if ($tugas == 1) {
        $rapot = 80;
    }
    echo $rapot;
    echo "<br>";

    $bulan=3;
    $tanggal=16;
    $keterangan="salah";

    if ($bulan > 0 && $bulan < 13) {
        //$keterangan="benar";
        if ($tanggal > 0 && $tanggal < 32) {
            //$keterangan="benar";
            if ($bulan ==2 && $tanggal > 1 && $tanggal < 22) {
                $keterangan="aquarius";
            }
            if ($bulan == 12 && $tanggal > 1 && $tanggal < 22) {
                $keterangan= "Capricon";
            }
            if ($bulan ==4 && $tanggal > 1 && $tanggal < 21) {
                $keterangan="Aries";
            }
            if ($bulan ==5 && $tanggal > 1 && $tanggal < 20) {
                $keterangan+"Taurus";
            }
            if ($bulan ==6 && $tanggal > 1 && $tanggal < 21) {
                $keterangan="Gemini";
            }
            if ($bulan ==7 && $tanggal > 1 && $tanggal < 22) {
                $keterangan="Cancer";
            }
            if ($bulan ==8 && $tanggal > 1 && $tanggal < 23) {
                $keterangan="Leo";
            }
            if ($bulan ==9 && $tanggal > 1 && $tanggal < 23) {
                $keterangan="Virgo";
            }
            if ($bulan ==10 && $tanggal > 1 && $tanggal < 23) {
                $keterangan="Libra";
            }
            if ($bulan ==11 && $tanggal > 1 && $tanggal < 23) {
                $keterangan="Scorpio";
            }
            if ($bulan ==12 && $tanggal > 1 && $tanggal < 22) {
                $keterangan="Saggitarius";
            }
            if ($bulan ==3 && $tanggal > 1 && $tanggal < 20) {
                $keterangan="Pisces";
            }
        }
    }
    echo $keterangan;
?>