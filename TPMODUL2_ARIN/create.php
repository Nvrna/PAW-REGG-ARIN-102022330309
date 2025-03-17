<?php
include 'connect.php';

// ==================1==================
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
if (isset($_POST['create'])) {
    // a. ambil data judul buku
    $judulBuku = $_POST["judul"];

    // b. ambil data penulis buku
    $penulisBuku = $_POST["penulis"];

    // c. ambil data tahun terbit buku
    $tahunBuku = $_POST["tahun_terbit"];
    
    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit)
             VALUES ('$judulBuku', '$penulisBuku', '$tahunBuku')";
    mysqli_query($conn, $query);

    // ==================3==================
    // Eksekusi query
    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>