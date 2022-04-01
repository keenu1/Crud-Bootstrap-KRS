<?php
include("../koneksi.php");
if (isset($_POST['edit'])) {
    $kodemk = $_POST['kodemk'];
    $nama = $_POST['namamk'];
    $sks = $_POST['sks'];
    $query = mysqli_query($koneksi, "UPDATE matakuliah SET kodemk='$kodemk', namamk='$nama', jumlah_sks='$sks' WHERE kodemk='$kodemk'");
    if ($query) {
        $message = "Data berhasil diubah";
        $message = urlencode($message);
        header("Location:index.php?message={$message}");
    } else {
        $message = "Data gagal diubah";
        $message = urlencode($message);
        header("Location:add.php?message={$message}");
    }
}
