<h2 style="text-align: center;">Data Minuman</h2>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center; /* Mengatur semua elemen menjadi di tengah */
    }

    .welcome-message {
        text-align: center;
        font-size: 28px;
        margin: 20px 0;
        font-weight: bold;
    }

    table {
        margin: 20px auto; /* Menempatkan tabel di tengah secara horizontal */
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    a {
        text-decoration: none;
        color: blue;
    }

    a:hover {
        text-decoration: underline;
    }

    .add-data-link {
        display: inline-block;
        margin: 10px 0;
        font-weight: bold;
    }
</style>

<!-- Link Tambah Data Baru -->
<a href="?page=minumanAdd" class="add-data-link">[+] Tambah Data Baru</a>

<!-- Tabel Data Minuman -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Minuman</th>
            <th>Daerah Minuman</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "includes/config.php";
        $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
        $sql = mysqli_query($conn, $query);
        $nomor = 1;

        while ($data = mysqli_fetch_array($sql)) { ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= htmlspecialchars($data["nama_minuman"]) ?></td>
                <td><?= htmlspecialchars($data["daerah_minuman"]) ?></td>
                <td>
                    <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>">Edit</a> |
                    <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" 
                       onclick="return confirm('Yakin ingin menghapus data ini?');">
                       Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Menampilkan Total Data -->
<p>Total: <?= mysqli_num_rows($sql) ?></p>
