<?php
include "koneksi.php";
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $npm = $_POST['npm'];
    $kodemk = $_POST['kodemk'];

    $query = mysqli_query($koneksi, "UPDATE krs SET id='$id', mahasiswa_npm='$npm', matakuliah_kodemk='$kodemk' WHERE id='$id'");
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
