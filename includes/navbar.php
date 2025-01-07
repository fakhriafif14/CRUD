<style>
    nav {
        background-color: #343a40; /* Warna latar belakang gelap */
        padding: 10px 20px;
        border-radius: 8px;
        display: flex;
        justify-content: center;
    }

    nav a {
        color: #f8f9fa; /* Warna teks terang */
        text-decoration: none;
        margin: 0 15px;
        font-size: 18px;
        font-weight: bold;
        padding: 8px 15px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s; /* Efek transisi */
    }

    nav a:hover {
        background-color: #007bff; /* Warna biru pada hover */
        color: #ffffff; /* Warna teks putih pada hover */
    }

    nav a.active {
        background-color: #28a745; /* Warna hijau untuk halaman aktif */
        color: #ffffff;
    }
</style>

<nav>
    <a href="?page=home" class="active">Home</a>
    <a href="?page=makanan">Makanan</a>
    <a href="?page=minuman">Minuman</a>
    <a href="?page=about">About</a>
    <a href="?page=contact">Contact</a>
</nav>
