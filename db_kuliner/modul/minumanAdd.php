<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center; /* Semua elemen di tengah halaman */
    }

    table {
        margin: 20px auto; /* Tabel di tengah halaman secara horizontal */
        border-collapse: collapse;
        width: 50%; /* Lebar tabel */
    }

    th {
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
        background-color: #f4f4f4;
    }

    td {
        padding: 8px;
        text-align: left; /* Teks dalam sel tabel rata kiri */
    }

    input[type="text"], input[type="submit"], input[type="reset"], input[type="button"] {
        padding: 8px;
        margin: 5px 0;
    }

    input[type="submit"], input[type="reset"], input[type="button"] {
        cursor: pointer;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
    }

    input[type="button"] {
        background-color: #f44336; /* Warna tombol cancel */
    }

    input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover {
        opacity: 0.8;
    }

    th u {
        text-decoration: underline;
    }
</style>

<table>
    <tr>
        <th colspan="3"><u>Tambah Data Daftar Minuman</u></th>
    </tr>

    <form method="post" action="?page=minumanAddProses">
        <tr>
            <td style="width: 10em;">Nama Minuman</td>
            <td>:</td>
            <td><input type="text" name="nama_minuman" style="width: 100%;"></td>
        </tr>

        <tr>
            <td>Daerah Minuman</td>
            <td>:</td>
            <td><input type="text" name="daerah_minuman" style="width: 100%;"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td style="padding-top: 1em;">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
                <input type="button" value="Cancel" onClick="document.location='?page=minuman'">
            </td>
        </tr>
    </form>
</table>