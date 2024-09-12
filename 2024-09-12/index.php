<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukan bulan">
    <input type="number" name="tanggal" placeholder="Masukan tanggal">
    <input type="submit" value="kirim" name="tombol">
</form>

<?php
    if (isset($_POST["tombol"])) {
        $bulan = $_POST["bulan"];
        $tanggal = $_POST["tanggal"];

        // echo $bulan;
        // echo $tanggal;

        $keterangan = "salah";

        if ($bulan > 0 && $bulan < 13) {
            // $keterangan = "benar";
            if ($bulan == 1) {
                if ($tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Aquarius";
                }
                if ($tanggal > 19 && $tanggal < 32) {
                    $keterangan = "Capricon";
                }
            }
        }
        echo $keterangan;
    }

?>