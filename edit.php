<?php
if (isset($_GET['id'])) {
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM krs WHERE 
id='$id'");
    $data1 = mysqli_fetch_array($query);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Articles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap
.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .form-style {
                width: 740px;
                margin: 0 auto;
            }
        </style>

    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Form Edit Data Mahasiswa</a>

                    <div class="d-flex">
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
                        </div>

                    </div>
                </div>
            </nav>
        </header>

        <main class="container-xl">
            <form class="mt-4 form-style" action="edit-proccess.php" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $data1['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">Npm Mahasiswa </label>
                    <select id="npm" name="npm" class="form-select">
                        <?php
                        include "koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                        foreach ($query as $data2) {
                        ?>
                            <option value="<?= $data2['npm'] ?>" <?= $data1['mahasiswa_npm'] == $data2["npm"] ?
                                                                        "Selected" : "" ?>><?= $data2['npm'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kodemk" class="form-label">Kode Mata kuliah</label>
                    <select id="kodemk" name="kodemk" class="form-select">
                        <?php
                        include "koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * FROM matakuliah");
                        foreach ($query as $data2) {
                        ?>
                            <option value="<?= $data2['kodemk'] ?>" <?= $data1['matakuliah_kodemk'] == $data2["kodemk"] ?
                                                                        "Selected" : "" ?>><?= $data2['kodemk'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="edit" class="btn btn-primary mb-3">Tambah data</button>
            </form>
        </main>

        <div class="position-absolute bottom-0 start-50 translate-middle-x" style="width: 100%;">
            <footer class="bg-dark text-center text-white ">

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    <a class="text-white" href="http://keenu.epizy.com/" target="_blank">Keenu.epizy.com</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>

    </body>

    </html>

<?php
}
?>