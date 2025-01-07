<?php
// about.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Daftar Kuliner</title>
    <link rel="stylesheet" href="styles.css"> <!-- Gaya CSS -->
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(240, 240, 234);
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background: linear-gradient(145deg, #ffffff, #f0f0f3);
            box-shadow: 20px 20px 60px #d9d9db, -20px -20px 60px #ffffff;
            border-radius: 12px;
        }

        h1 {
            text-align: center;
            color:rgb(32, 30, 30);
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        h3 {
            color: #34495e;
            font-size: 1.5em;
            margin-top: 30px;
        }

        p {
            line-height: 1.8;
            font-size: 1.1em;
            text-align: justify;
            color: #555;
        }

        ul {
            margin-top: 20px;
            padding: 0;
        }

        ul li {
            display: flex;
            align-items: center;
            margin: 10px 0;
            background-color: #e8f7fa;
            border: 1px solid #b2e0e8;
            border-radius: 8px;
            padding: 12px 15px;
            font-weight: bold;
            color: #2c3e50;
            font-size: 1.1em;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        ul li::before {
            content: "🍴";
            margin-right: 15px;
            font-size: 1.2em;
        }

        .highlight {
            background-color: #ffedcc;
            padding: 5px 10px;
            border-radius: 6px;
            color: #e67e22;
            font-weight: bold;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            padding: 15px;
            background-color: #2c3e50;
            color: #fff;
            border-radius: 0 0 12px 12px;
            font-size: 0.9em;
        }

        footer a {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.1em;
            color: #fff;
            background-color: #e74c3c;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Tentang Kami</h1>
        <p><span class="highlight">Selamat datang di Daftar Kuliner!</span> Kami adalah panduan terpercaya untuk menemukan berbagai macam kuliner tradisional dan modern yang menggugah selera. Nikmati pengalaman eksplorasi rasa dari berbagai daerah di Indonesia dengan sentuhan budaya yang autentik.</p>
        
        <h3>Apa yang Kami Tawarkan:</h3>
        <ul>
            <li>Daftar restoran dan tempat makan terbaik</li>
            <li>Resep autentik untuk dicoba di rumah</li>
            <li>Ulasan jujur dan terpercaya dari pengunjung</li>
            <li>Panduan kuliner lokal dari berbagai daerah</li>
        </ul>
        
        <p>Kami berdedikasi untuk melestarikan tradisi kuliner nusantara. Dengan menjelajahi situs kami, Anda akan menemukan hidangan favorit untuk setiap momen istimewa.</p>
        
        <div style="text-align: center;">
            <a href="contact.php" class="button">Hubungi Kami</a>
        </div>
    </div>

    <footer>
        © 2025 Daftar Kuliner | <a href="https://www.instagram.com/fakhriafif14" target="_blank">Instagram</a> | <a href="contact.php">Kontak</a>
    </footer>

</body>
</html>
