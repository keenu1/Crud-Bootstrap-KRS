<?php
include("../koneksi.php");
if (isset($_POST['add'])) {
    $kodemk = $_POST['kodemk'];
    $nama = $_POST['nama'];
    $jumlah_sks = $_POST['sks'];

    $query = mysqli_query($koneksi, "INSERT INTO matakuliah VALUES('$kodemk','$nama','$jumlah_sks')");
    if ($query) {
        $message = "Data berhasil ditambahkan";
        $message = urlencode($message);
        header("Location:index.php?message={$message}");
    } else {
        $message = "Data gagal ditambahkan";
        $message = urlencode($message);
        header("Location:add.php?message={$message}");
    }
}
