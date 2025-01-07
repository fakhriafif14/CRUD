<?php 
require "includes/config.php"; 

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) { 
    die("Data tidak ditemukan...");
}
?>
<style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .welcome-message {
            text-align: center;
            font-size: 28px;
            margin: 20px 0;
            font-weight: bold;
        }

</style>
<table>
    <tr>
        <th colspan="3"><u>Update Data Daftar Makanan</u></th>
    </tr>
    <form method="post" action="?page=makananUpdateProses">
        <!-- Menampung nilai id yang akan di-edit -->
        <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_makanan']) ?>" />

        <tr>
            <td style="width: 8em;">Nama Makanan</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_makanan" style="width: 20em;" 
                       value="<?= htmlspecialchars($data['nama_makanan']) ?>">
            </td>
        </tr>
        <tr>
            <td style="width: 8em;">Daerah Makanan</td>
            <td>:</td>
            <td>
                <input type="text" name="daerah_makanan" style="width: 20em;" 
                       value="<?= htmlspecialchars($data['daerah_makanan']) ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td colspan="3" style="padding: 0.5em;">
                <input type="submit" name="update" value="Update"> 
                <input type="button" value="Cancel" 
                       onClick="document.location='?page=makanan'">
            </td>
        </tr>
    </form>
</table>