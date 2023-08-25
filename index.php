<?php
// Create database connection using config file
include_once("config/config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Majestic Peaks Lodge</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <!-- Navigation-->
    <header class="d-flex flex-wrap align-items-center justify-content-center bg-dark justify-content-md-between py-3 mb-4 fixed-top border-bottom">
        <a href="index.php" class="d-flex align-items-center  text-white text-decoration-none">
            <a href="index.php" class="nav-link px-2 text-white text-decoration-none">Majestic Peaks Lodge</a>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 link-secondary">Home |</a></li>
            <li><a href="about.php" class="nav-link px-2 text-white link-white">Tentang Kami |</a></li>
        </ul>

        <div class="col-md-3">
            <a type="button" href="pemesanan.php" class="btn btn-outline-light me-2">Pesan</a>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light" style="background-image: url('asset/img/pexels-magda-ehlers-15273741-min.jpg'); background-size: cover; background-position: center;">
            <div class="col-md-5 p-lg-5 mx-auto my-5 rounded" style="background-color: rgba(0, 0, 0, 0.5);">
                <h1 class="display-4 fw-normal text-white">Majestic Peaks Lodge</h1>
                <p class="lead fw-normal text-white">Where Every Stay is a Journey of Luxury and Comfort</p>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="container px-4 px-lg-5 mt-5" id="product">
            <div class="row featurette py-5">
                <div class="col-md-6">
                    <img src="asset/img/pexels-enric-cruz-lópez-6039179-min.jpg" alt="Hotel View" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="welcome-text">
                        <h2 class="featurette-heading">Selamat Datang di Hotel Majestic Peaks Lodge</h2>
                        <p class="lead">Menghadirkan Kenyamanan Tanpa Batas di Alam Pegunungan</p>
                        <p>Nikmati pengalaman menginap yang tak tertandingi di Hotel Majestic Peaks Lodge. Terletak di tengah-tengah keindahan alam pegunungan, kami mempersembahkan keseimbangan sempurna antara kenyamanan modern dan pesona alam yang menakjubkan.</p>
                        <p>Dari kamar-kamar kami yang mewah hingga fasilitas terdepan, setiap detil dirancang untuk memberikan Anda pengalaman istimewa. Dengan pemandangan luar biasa dari jendela kamar, Anda akan merasakan kedamaian yang jarang ditemukan.</p>
                        <p>Tidak hanya menawarkan kenyamanan, tetapi lokasi strategis kami juga memberikan akses mudah ke jalur wisata terkenal dan aktivitas alam. Jelajahi keindahan alam, mendaki gunung, atau hanya bersantai di area luar ruangan yang indah.</p>
                        <p>Tingkatkan pengalaman Anda dengan kami di Hotel Majestic Peaks Lodge, tempat di mana kenyamanan bertemu dengan alam, dan kenangan tak terlupakan tercipta.</p>
                    </div>
                    <div class="accommodation">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-bed"></i> Kapasitas Kamar</h5>
                                        <p class="card-text">Temukan kamar-kamar mewah kami yang dirancang untuk kenyamanan Anda. Kami menawarkan 300 kamar luas untuk menginap Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-building"></i> Ruang Konvensi</h5>
                                        <p class="card-text">Jelajahi ruang acara serbaguna kami, sempurna untuk pertemuan dan perayaan. Hotel kami memiliki 12 area konvensi yang dilengkapi dengan baik.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-coffee"></i> Outlet Minuman</h5>
                                        <p class="card-text">Nikmati berbagai macam minuman di outlet kami yang elegan. Mulai dari minuman segar hingga anggur pilihan, semua ada di sini.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-spa"></i> Fasilitas</h5>
                                        <p class="card-text">Nikmati fasilitas modern kami termasuk pusat kebugaran, spa, dan lainnya. Tingkatkan pengalaman menginap Anda dengan fasilitas unggulan kami.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <hr>
            <section class="accommodation">
                <div class="container">
                    <h2 class="text-center mb-4">Pilihan Kamar Kami</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="asset/img/pexels-pixabay-271624-min.jpg" alt="Deluxe Room" class="img-fluid" style="max-width: 200px;">
                                </td>
                                <td>
                                    <h3 class="card-title">Kamar Standar</h3>
                                    <p class="card-text">Nikmati pengalaman menginap yang mewah dalam kamar Deluxe kami. Didesain dengan kenyamanan dan gaya sebagai prioritas, kamar ini menawarkan tempat tidur king-size dan pemandangan indah dari jendela. Ruang luas dan perabotan modern akan membuat Anda merasa benar-benar istimewa.</p>
                                    <p><strong>Estimasi Harga per Hari:</strong> Rp 500.000</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="asset/img/pexels-pixabay-271619-min.jpg" alt="Family Room" class="img-fluid" style="max-width: 200px;">
                                </td>
                                <td>
                                    <h3 class="card-title">Kamar Deluxe</h3>
                                    <p class="card-text">Nikmati liburan bersama keluarga dalam kamar keluarga kami. Didesain dengan perhatian khusus untuk kenyamanan keluarga, kamar ini menawarkan fasilitas yang lengkap, termasuk tempat tidur tambahan, area bermain, dan pemandangan luar biasa. Buat kenangan indah bersama keluarga Anda dalam suasana yang hangat dan nyaman.</p>
                                    <p><strong>Estimasi Harga per Hari:</strong> Rp 1.000.000</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="asset/img/pexels-jean-van-der-meulen-1457842-min.jpg" alt="Executive Suite" class="img-fluid" style="max-width: 200px;">
                                </td>
                                <td>
                                    <h3 class="card-title">Suite Eksekutif</h3>
                                    <p class="card-text">Tingkatkan pengalaman Anda dengan menginap di Suite Eksekutif kami. Dengan ruang tambahan yang luas, ruang duduk terpisah, dan fasilitas mewah, kamar ini adalah pilihan ideal untuk para tamu yang mencari kenyamanan dan privasi lebih. Anda akan merasa seperti di rumah sendiri dalam suasana yang elegan.</p>
                                    <p><strong>Estimasi Harga per Hari:</strong> Rp 2.500.000</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>


        </div>
        </div>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'success') {
                    echo "<script type='text/javascript'>alert('Pesanan Berhasil');</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Pesanan Gagal');</script>";
                }
                ?>
            </p>
        <?php endif; ?>
    </section>
    <!-- Footer-->
    <footer class="footer mt-auto py-3" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="mb-4">Kontak Kami</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Gunung Indah No. 123, Pegunungan Megah</p>
                    <p><i class="fas fa-phone-alt"></i> +62 123 4567 890</p>
                    <p><i class="fas fa-envelope"></i> info@majesticpeaks.com</p>
                </div>
                <div class="col-md-4">
                    <h4>Lokasi Kami</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2844045.879244219!2d8.031136621370273!3d45.883541457586915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4789459fb534be51%3A0x38c7fdcd674c57d!2sAlps!5e0!3m2!1sen!2sid!4v1692934196852!5m2!1sen!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-4">
                    <h4 class="mb-4">Ikuti Kami</h4>
                    <a href="#" class="btn btn-social-icon btn-facebook me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-social-icon btn-twitter me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-social-icon btn-instagram me-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>