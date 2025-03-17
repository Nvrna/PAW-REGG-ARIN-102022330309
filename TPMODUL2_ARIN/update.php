<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $id = $_GET['id'];

    $judulBuku = $_POST['judul'];
    $penulisBuku = $_POST['penulis'];
    $tahunBuku = $_POST['tahun_terbit'];

    $query = "UPDATE tb_buku SET 
        judul = '$judulBuku', 
        penulis = '$penulisBuku', 
        tahun_terbit = '$tahunBuku' 
        WHERE id = $id";
        $test = mysqli_query($conn, $query);
    
    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "
        <script>alert('Data gagal diupdate');document.location.href = 'katalog_buku.php';</script>";
        exit;
    }
}
?>