<?php
include("../koneksi.php");
if (isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('$npm','$nama','$jurusan','$alamat')");
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
