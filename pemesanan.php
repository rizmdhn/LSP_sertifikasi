<?php
include_once("config/config.php");
$product =  mysqli_query($mysqli, "SELECT *  FROM produk_kamar");
if (!$product) {
    echo "Error: " . mysqli_error($mysqli);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pemesanan Kamar Hotel</title>
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
            <li><a href="index.php" class="nav-link px-2 link-secondary">Home |</a></li>
            <li><a href="about.php" class="nav-link px-2 text-white link-white">Tentang Kami |</a></li>
        </ul>

        <div class="col-md-3">
            <a type="button" href="pemesanan.php" class="btn btn-outline-light me-2">Pesan</a>
        </div>
    </header>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">PEMESANAN</h1>
                <p class="lead fw-normal text-white-50 mb-0">Form Pemesanan</p>
            </div>
        </div>
    </header>

    <!-- Related items section-->
    <section class="py-5 px-5 bg-light">
        <div class="registration-form">
            <form id='formpesanan' action="config/CRUD.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control item" id="nama_pemesan" name="nama_pemesan" placeholder="Nama Pemesan" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <br>
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki Laki" required>
                    <label for="jenis_kelamin">Laki Laki</label>
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" required>
                    <label for="jenis_kelamin">Perempuan</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="no_identitas" pattern="[0-9]*" inputmode="numeric" name="no_identitas" placeholder="Nomor Identitas" required>
                    <div class="invalid-feedback">
                        Isian salah data harus 16 digit
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control item" id="tipe_kamar" name="tipe_kamar" required>
                        <option value="" disabled selected>Jenis Kamar</option>
                        <?php while ($data = mysqli_fetch_array($product)) : ?>
                            <option value="<?= $data['tipe_kamar'] ?>" data-id="<?= $data['id_kamar'] ?>" data-harga="<?= $data['Harga'] ?>"><?= $data['tipe_kamar'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item" id="harga" name="harga" placeholder="Harga" value="" readonly>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control item" id="tanggal_pesan" name="tanggal_pesan" placeholder="Tanggal Pesan" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item" id="durasi" min=1 name="durasi" placeholder="Durasi" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="include_breakfast" name="include_breakfast" required>
                    <label for="breakfast">Tambahkan Breakfast</label>
                </div>
                <form class="form-inline">
                    <div class="form-group">
                        <label for="total">Jumlah Pesanan</label>
                        <input type="number" class="form-control item" id="total" name="total" placeholder="Total" required readonly>
                        <button type="button" class="btn btn-outline-dark mt-2" id="hitung">Hitung Total Bayar</button>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" value="pesanan" class="btn btn-outline-dark" name="pesanan">Buat Pesanan</button>
                    </div>

                </form>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const selectKamar = document.getElementById("tipe_kamar");
            const inputHarga = document.getElementById("harga");
            const inputNoIdentitas = document.getElementById("no_identitas");

            inputNoIdentitas.addEventListener("focusout", function() {
                const value = inputNoIdentitas.value;
                const isValid = /^[0-9]{16}$/.test(value);
                inputNoIdentitas.classList.toggle("is-invalid", !isValid);
            });
            selectKamar.addEventListener("change", function() {
                const selectedOption = selectKamar.options[selectKamar.selectedIndex];
                const harga = selectedOption.getAttribute("data-harga");
                inputHarga.value = harga;
            });
        });
        const btnTotal = document.getElementById("hitung");
        const inputTotal = document.getElementById("total");
        const inputHarga = document.getElementById("harga");
        const inputDurasi = document.getElementById("durasi");
        const inputBreakfast = document.getElementById("include_breakfast");
        if (inputTotal.value == "" || inputTotal.value == null || inputTotal.value == 0) {
            inputTotal.value = 0;
            inputTotal.classList.toggle("is-invalid", !isValid);
        }
        btnTotal.addEventListener("click", function() {
            const harga = inputHarga.value;
            const durasi = inputDurasi.value;
            const breakfast = inputBreakfast.checked ? 1 : 0;
            if (durasi < 1) {
                alert("Durasi tidak boleh kurang dari 1");
                return;
            } else if (durasi > 3) {
                const total = (parseInt(harga) * parseInt(durasi)) + (breakfast * 80000);
                const diskon = total * 0.1;
                inputTotal.value = total - diskon;
            } else {
                const total = (parseInt(harga) * parseInt(durasi)) + (breakfast * 80000);
                inputTotal.value = total;
            }
        });
    </script> <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>