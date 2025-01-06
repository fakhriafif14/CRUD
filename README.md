# WEB - KULINER 
# Dokumentasi File PHP

Berikut adalah penjelasan masing-masing file PHP yang terdapat dalam proyek ini:

## 1. **config.php**
File ini berisi konfigurasi dasar untuk koneksi database dan pengaturan waktu.

### Fitur Utama:
- **Pengaturan Zona Waktu:**
  - `date_default_timezone_set('Asia/Jakarta')` mengatur zona waktu ke Jakarta.
- **URL Dasar:**
  - Variabel `$base_url` menentukan URL dasar website (misalnya `localhost/kuliner/`).
- **Koneksi Database:**
  - Berisi kredensial untuk menghubungkan ke database (host, username, password, nama database).
  - Membuat koneksi ke MySQL menggunakan `mysqli`.
  - Menyertakan pengecekan koneksi database untuk memastikan koneksi berhasil. Jika gagal, akan menampilkan pesan error.

---

## 2. **function.php**
File ini berisi fungsi untuk sanitasi input data guna meningkatkan keamanan aplikasi.

### Fungsi Utama:
- **`inputData()`**
  - Membersihkan dan menyaring input data sebelum diproses lebih lanjut.
  - Proses pembersihan meliputi:
    - `trim()`: Menghapus spasi di awal dan akhir string.
    - `stripslashes()`: Menghapus backslash.
    - `htmlspecialchars()`: Mencegah serangan XSS dengan mengonversi karakter khusus HTML.
    - `strip_tags()`: Menghapus tag HTML dan PHP.
  
### Tujuan:
- Menjaga keamanan aplikasi dari serangan XSS dan injeksi data.

---

## 3. **konten.php**
File ini bertugas untuk mengatur routing/pengalihan halaman berdasarkan parameter `GET` bernama `page`.

### Fitur Utama:
- **Routing Halaman:**
  - Menggunakan struktur `switch-case` untuk menentukan file yang akan di-include.
- **Halaman yang Didukung:**
  - Halaman utama (home, about, contact).
  - CRUD untuk Makanan (view, add, update, delete).
  - CRUD untuk Minuman (view, add, update, delete).
- **Halaman Tidak Ditemukan:**
  - Jika parameter `page` tidak cocok, akan menampilkan halaman 404.
  - Jika parameter `page` tidak ada, akan default ke halaman home.

---

## 4. **navbar.php**
File ini berisi tampilan dan styling untuk navigasi website.

### Fitur Utama:
- **Styling Navigasi:**
  - Menggunakan CSS untuk memberikan tampilan:
    - Warna latar belakang gelap (`#343a40`).
    - Styling link navigasi (warna, ukuran font, padding).
    - Efek hover dengan warna biru.
    - Indikator halaman aktif dengan warna hijau.
- **Menu Navigasi:**
  - Terdiri dari link berikut:
    - Home
    - Makanan
    - Minuman
    - About# Dokumentasi Form "Add Makanan"

# MakananAdd / MinumanAdd

---

## **Fitur Utama**
### **1. CSS Styling**
#### a. Tata Letak Pusat
- Seluruh elemen form berada di tengah halaman.
- Menggunakan properti `text-align: center` dan margin otomatis untuk memastikan tata letak rapi.

#### b. Desain Tombol
- Tombol `Submit`, `Reset`, dan `Cancel` didesain dengan:
  - Warna latar belakang yang menarik.
  - Padding untuk meningkatkan keterbacaan.
  - Efek hover untuk memberikan respons visual.

#### c. Tabel
- Lebar tabel diatur menjadi 50% dari lebar halaman.
- Properti `border-collapse` digunakan untuk tampilan yang lebih rapi.

### **2. Form HTML**
#### a. Action dan Method
- Atribut `action="?page=makananAddProses"` digunakan untuk mengarahkan data form ke halaman proses penambahan makanan.
- Atribut `method="post"` digunakan untuk mengirimkan data form secara aman.

#### b. Input Fields
- **Nama Makanan:** Input teks dengan lebar penuh (`width: 100%`).
- **Daerah Makanan:** Input teks dengan lebar penuh (`width: 100%`).

#### c. Tombol
- **Submit:** Mengirimkan data form ke server.
- **Reset:** Menghapus semua data yang telah diinputkan.
- **Cancel:** Mengarahkan pengguna kembali ke halaman daftar makanan.

---

## **Struktur Kode**
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: auto;
        }
        input[type="text"], input[type="submit"], input[type="reset"], button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"], button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover, input[type="reset"]:hover, button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="?page=makananAddProses" method="post">
        <table border="1">
            <tr>
                <td>Nama Makanan</td>
                <td><input type="text" name="nama_makanan" required></td>
            </tr>
            <tr>
                <td>Daerah Makanan</td>
                <td><input type="text" name="daerah_makanan" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                    <button type="button" onclick="window.location.href='?page=makananList'">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
```

---

## **Tujuan**
- Mempermudah pengguna dalam menambahkan data makanan ke dalam sistem.
- Menyediakan antarmuka yang intuitif dan responsif untuk pengalaman pengguna yang lebih baik.


# MakananAddProses / MinumanAddProses

---


Script ini bertujuan untuk menambahkan data makanan ke dalam database dengan mekanisme berikut:

## Mekanisme Kerja

### 1. **Cek Tombol Submit**
- Script akan dijalankan hanya jika tombol `submit` ditekan (`isset($_POST['submit'])`).

### 2. **Pengolahan Input**
- Data input `nama_makanan` dan `daerah_makanan` diperoleh dari form dan dibersihkan menggunakan fungsi `inputData`.
- Data tersebut diamankan dari SQL Injection dengan `mysqli_real_escape_string`.

### 3. **Validasi Data**
- **Field kosong:** Jika ada field kosong, pengguna akan diperingatkan.
- **Format input:** Hanya huruf dan spasi yang diperbolehkan, dicek dengan `preg_match`.

### 4. **Cek Duplikasi Data**
- Mengecek apakah `nama_makanan` sudah ada di tabel `tbl_makanan`.
- Jika data duplikat ditemukan, pengguna diperingatkan.

### 5. **Proses Menyimpan Data**
- Jika validasi berhasil dan tidak ada duplikasi, data disimpan ke tabel `tbl_makanan` dengan query `INSERT`.
- Feedback diberikan kepada pengguna dengan notifikasi berhasil atau gagal melalui `alert` dan pengalihan halaman (`window.location`).

## Struktur Logika

1. **Cek tombol submit**
2. **Validasi input**
3. **Cek duplikasi**
4. **Simpan ke database**
5. **Feedback ke pengguna**

## Contoh Kode PHP

```php
<?php
if (isset($_POST['submit'])) {
    $nama_makanan = inputData($_POST['nama_makanan']);
    $daerah_makanan = inputData($_POST['daerah_makanan']);

    // Validasi input
    if (empty($nama_makanan) || empty($daerah_makanan)) {
        echo "<script>alert('Semua field wajib diisi!');</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_makanan) || !preg_match("/^[a-zA-Z ]*$/", $daerah_makanan)) {
        echo "<script>alert('Hanya huruf dan spasi yang diperbolehkan!');</script>";
    } else {
        // Cek duplikasi
        $nama_makanan = mysqli_real_escape_string($conn, $nama_makanan);
        $checkQuery = "SELECT * FROM tbl_makanan WHERE nama_makanan = '$nama_makanan'";
        $result = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Data makanan sudah ada!');</script>";
        } else {
            // Simpan data
            $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan) VALUES ('$nama_makanan', '$daerah_makanan')";
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan!');</script>";
            }
        }
    }
}

function inputData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
```

## Catatan Penting

1. **Koneksi Database:**
   Pastikan koneksi database (`$conn`) sudah dibuat sebelumnya dalam file ini atau file terpisah yang di-include.

2. **Struktur Tabel:**
   Tabel `tbl_makanan` harus memiliki kolom:
   - `nama_makanan`
   - `daerah_makanan`

3. **Keamanan Data:**
   - Gunakan HTTPS untuk mengamankan data saat dikirimkan.
   - Tambahkan validasi sisi client untuk pengalaman pengguna yang lebih baik.


# MakananDelete / MinumanDelete

---


Script PHP ini digunakan untuk menghapus data makanan berdasarkan `id_makanan` yang diterima melalui query string (`$_GET['id']`). Berikut adalah penjelasan langkah-langkah yang dilakukan oleh script ini:

## 1. Koneksi Database
- Koneksi ke database dilakukan dengan menggunakan file `config.php` yang berisi konfigurasi untuk menyambungkan ke database.

## 2. Mengambil ID
- `id_makanan` yang akan dihapus diperoleh melalui query string dengan menggunakan `$_GET['id']`.

## 3. Query Hapus
- Script ini membuat query SQL untuk menghapus data pada tabel `tbl_makanan` berdasarkan `id_makanan`.

## 4. Eksekusi Query
- Query SQL yang telah dibuat kemudian dijalankan menggunakan fungsi `mysqli_query` untuk menghapus data dari database.

## 5. Feedback
- **Jika penghapusan berhasil**, pengguna akan diberi notifikasi dalam bentuk `alert` dan akan diarahkan kembali ke halaman `?page=makanan`.
- **Jika penghapusan gagal**, pengguna akan diberi notifikasi bahwa penghapusan gagal dan tetap diarahkan ke halaman yang sama untuk mencoba lagi.

---

# MakakanUpdate

## Features
- Fetches food data from a database using the provided ID.
- Displays a form with pre-filled data for editing.
- Includes validation to check if the data exists.
- Provides options to submit updates or cancel the operation.

## Code Overview

### 1. **Include Configuration File**
```php
require "includes/config.php";
```
This imports the configuration file to establish a connection with the database.

---

### 2. **Fetch Data by ID**
```php
$id = $_GET['id'];
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
data = mysqli_fetch_assoc($sql);
```
- **`$_GET['id']`**: Retrieves the `id` parameter from the URL.
- **SQL Query**: Fetches food data (`tbl_makanan`) based on the provided `id`.
- **`mysqli_fetch_assoc()`**: Converts the query result into an associative array.

---

### 3. **Data Validation**
```php
if (mysqli_num_rows($sql) < 1) { 
    die("Data tidak ditemukan...");
}
```
If no data is found for the provided ID, the script stops execution and displays the message **"Data tidak ditemukan..."**.

---

### 4. **Update Form**
This form allows users to edit the food data.
```html
<form method="post" action="?page=makananUpdateProses">
    <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_makanan']) ?>" />
```
- **Hidden Input**: Stores the `id_makanan` for processing updates.
- Editable fields are pre-filled with data from the database.

---

### 5. **Update and Cancel Buttons**
```html
<input type="submit" name="update" value="Update"> 
<input type="button" value="Cancel" onClick="document.location='?page=makanan'">
```
- **Update Button**: Submits the updated data to the `makananUpdateProses` page for processing.
- **Cancel Button**: Redirects the user back to the food list page (`?page=makanan`).

---

### 6. **CSS Styling**
```css
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
```
# MakananUpdateProses

Skrip PHP ini digunakan untuk memperbarui data makanan dalam database berdasarkan input dari pengguna. Berikut adalah penjelasan detail tentang cara kerja skrip ini dan cara menggunakannya.

## Fitur
- Memperbarui data makanan (`nama_makanan`, `daerah_makanan`) dalam database.
- Memvalidasi input pengguna untuk memastikan kebenaran dan keamanan data.
- Menampilkan notifikasi keberhasilan atau kegagalan proses update.
- Mencegah SQL Injection menggunakan `mysqli_real_escape_string()`.

## Cara Kerja

### 1. **Pengecekan Tombol Update**
Skrip memeriksa apakah tombol "update" telah diklik menggunakan:
```php
if (isset($_POST['update'])) {
```

### 2. **Pengambilan dan Validasi Input**
- Input `nama_makanan` dan `daerah_makanan` diterima dari form HTML.
- Fungsi `inputData()` digunakan untuk membersihkan input (harus diimplementasikan secara terpisah).
- Input juga dihindari dari serangan SQL Injection menggunakan `mysqli_real_escape_string()`.
- Validasi meliputi:
  - Memastikan field tidak kosong.
  - Hanya memperbolehkan huruf dan spasi menggunakan regular expression.

### 3. **Memperbarui Database**
Jika validasi berhasil, skrip akan membuat query SQL `UPDATE` untuk memperbarui database:
```php
$query = "UPDATE tbl_makanan 
          SET nama_makanan='$nama_makanan', daerah_makanan='$daerah_makanan' 
          WHERE id_makanan='$id';";
```
Query ini dieksekusi menggunakan `mysqli_query()`.

### 4. **Pesan Notifikasi**
- Jika pembaruan berhasil:
  ```php
  echo "<script>
          window.alert('Data berhasil diupdate!');
          window.location='?page=makanan';
        </script>";
  ```
- Jika pembaruan gagal:
  ```php
  echo "<script>
          window.alert('Gagal update data!');
          window.location='?page=makanan';
        </script>";
  ```

### 5. **Pengalihan Halaman**
Setelah menampilkan notifikasi, pengguna akan diarahkan kembali ke halaman utama (`?page=makanan`).

## Cara Menggunakan

1. **Atur Koneksi Database**
   Pastikan variabel `$conn` sudah diinisialisasi dengan koneksi MySQL yang valid.

2. **Sertakan Skrip dalam Proyek Anda**
   Integrasikan skrip ini ke dalam proyek Anda di mana fungsi update diperlukan.

3. **Buat Form HTML**
   Gunakan form HTML untuk menangkap input `nama_makanan`, `daerah_makanan`, dan `id` dari item makanan yang akan diperbarui. Contoh:
   ```html
   <form method="POST" action="">
       <input type="hidden" name="id" value="1">
       <input type="text" name="nama_makanan" placeholder="Nama Makanan">
       <input type="text" name="daerah_makanan" placeholder="Daerah Makanan">
       <button type="submit" name="update">Update</button>
   </form>
   ```

4. **Uji Fungsi**
   Pastikan input tervalidasi dan data berhasil diperbarui di database.

## Catatan
- Pastikan fungsi `inputData()` sudah didefinisikan untuk membersihkan input pengguna.
- Skrip ini mengasumsikan tabel database bernama `tbl_makanan` dengan kolom `id_makanan`, `nama_makanan`, dan `daerah_makanan`.
- Sesuaikan nama tabel atau kolom dalam skrip jika diperlukan agar sesuai dengan skema database Anda.

## Lisensi
Skrip ini bersifat open-source dan dapat digunakan atau dimodifikasi di bawah [MIT License](LICENSE).


