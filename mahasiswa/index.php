<!DOCTYPE html>
<html lang="en">

<head>
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap
.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Data Mahasiswa</a>

                <form class="d-flex">
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../mahasiswa/index.php">Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../matakuliah/index.php">Mata kuliah</a>
                            </li>
                        </ul>
                </form>
            </div>
            </div>
        </nav>
    </header>

    <main class="container-xl">
        <table class="table table-dark table-striped table-hover container-xl mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Npm</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../koneksi.php");
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                foreach ($query as $data) {
                ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $data['npm'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['jurusan'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td>

                            <a href="edit.php?npm=<?= $data['npm'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?npm=<?= $data['npm'] ?>" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="float-end">
            <a class="btn btn-primary" href="add.php">Tambah data</a>
        </div>
    </main>

    <div class="position-absolute bottom-0 start-50 translate-middle-x" style="width: 100%;">
        <footer class="bg-dark text-center text-white ">


            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                ?? 2020 Copyright:
                <a class="text-white" href="http://keenu.epizy.com/" target="_blank">Keenu.epizy.com</a>
            </div>

        </footer>
    </div>

</body>

</html>