<?php

include_once("config.php");
$domain = $_SERVER['HTTP_HOST'];

if (isset($_POST['pesanan'])) {
    $nama_pemesan = $_POST['nama_pemesan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_identitas = $_POST['no_identitas'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga = $_POST['harga'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $durasi = $_POST['durasi'];
    if ($_POST['include_breakfast'] == "on")
        $include_breakfast = "Ya";
    else
        $include_breakfast = "Tidak";
    $total = $_POST['total'];
    echo $tipe_kamar;
    $result = mysqli_query($mysqli, "INSERT INTO pemesanan(`id_pemesanan`, `nama_pemesan`, `jenis_kelamin`, `no_identitas`, `tipe_kamar`, `harga`, `tanggal_pesan`, `durasi`, `include_breakfast`, `total`) VALUES(NULL, '$nama_pemesan', '$jenis_kelamin', '$no_identitas', '$tipe_kamar', '$harga', '$tanggal_pesan', '$durasi', '$include_breakfast', '$total')");
    if (!$result) {
        echo "Error: " . mysqli_error($mysqli);
    }
    if ($result) {
        echo "Berhasil menambahkan pesanan";
        header("Location: ../checkout.php?id=" . mysqli_insert_id($mysqli) . "&status=success");
    } else {
        echo "Gagal menambahkan pesanan";
        header("Location: ../index.php?status=failed");
    }
}
