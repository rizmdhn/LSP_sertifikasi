<?php
include_once("config/config.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $order =  mysqli_query($mysqli, "SELECT * FROM pemesanan JOIN produk_kamar AS pk WHERE id_pemesanan = $id AND pk.tipe_kamar = pemesanan.tipe_kamar");
    if (!$order) {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>THANK YOU</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center bg-dark justify-content-md-between py-3 mb-4 fixed-top border-bottom">
        <a href="index.php" class="d-flex align-items-center  text-white text-decoration-none">
            <a href="index.php" class="nav-link px-2 text-white text-decoration-none">Majestic Peaks Lodge</a>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php/#" class="nav-link px-2 link-secondary">Home |</a></li>
            <li><a href="about.php" class="nav-link px-2 text-white link-white">Tentang Kami |</a></li>
        </ul>

        <div class="col-md-3">
            <a type="button" href="pemesanan.php" class="btn btn-outline-light me-2">Pesan</a>
        </div>
    </header>
    <!-- Header-->
    <header class="bg-white py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">TERIMA KASIH</h1>
                <p class="lead fw-normal text-white-50 mb-0">Telah Berbelanja di Majestic Peaks Lodge</p>
            </div>
        </div>
    </header>

    <!-- Related items section-->
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <?php

                    while ($data = mysqli_fetch_array($order)) :
                    ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="h5">Booking Detail</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <img src='<?= $data['photo'] ?>' class="img-fluid rounded-3" style="width: 120px;" alt="product">
                                                <div class="flex-column ms-4">
                                                    <p class="mb-2"><?= $data['tipe_kamar'] ?></p>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="align-middle">
                                            <p class="mb-0" style="font-weight: 500;">Rp. <?= ($data['Harga']) ?></p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                            <div class="card-body p-4">
                                <h5>Data Pembeli</h5>
                                <div class="row">
                                    <hr class="my-4">
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">ID Pemesanan</p>
                                        <p class="mb-2"><?= $data['id_pemesanan'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Nama Pemesan</p>
                                        <p class="mb-2"><?= $data['nama_pemesan'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Jenis Kelamin</p>
                                        <p class="mb-2"><?= $data['jenis_kelamin'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">No. Identitas</p>
                                        <p class="mb-2"><?= $data['no_identitas'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Tipe Kamar</p>
                                        <p class="mb-2"><?= $data['tipe_kamar'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Harga</p>
                                        <p class="mb-2">Rp. <?= $data['harga'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Tanggal Pesan</p>
                                        <p class="mb-2"><?= $data['tanggal_pesan'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Durasi</p>
                                        <p class="mb-2"><?= $data['durasi'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Include Breakfast</p>
                                        <p class="mb-2"><?= $data['include_breakfast'] ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Total</p>
                                        <p class="mb-2">Rp. <?= $data['total'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="index.php" class="btn btn-primary p-2 ">Back to Home</a>
                    <?php
                    endwhile;

                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>