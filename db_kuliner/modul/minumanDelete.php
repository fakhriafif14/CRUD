<?php
include "includes/config.php";

// Ambil ID dari query string
$id = $_GET['id'];

// Hapus data berdasarkan ID
$query = "DELETE FROM tbl_minuman WHERE id_minuman=$id";
$sql = mysqli_query($conn, $query);

if ($sql) {
    echo "<script>alert('Data berhasil dihapus!');window.location='?page=minuman';</script>";
} else {
    echo "<script>alert('Data gagal dihapus!');window.location='?page=minuman';</script>";
}
?>