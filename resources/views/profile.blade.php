<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #fdf2f4; /* Latar belakang pink sangat muda */
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 320px;
            background-color: #ffffff;
            padding: 30px 20px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(255, 182, 193, 0.3); /* Bayangan soft pink */
        }

        .avatar {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background-color: #fce4ec; /* Lingkaran luar pink soft */
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
            border: 3px solid #f8bbd0;
            overflow: hidden;
        }

        .avatar svg {
            width: 100%;
            height: 100%;
        }

        .info-box {
            width: 100%;
            background-color: #f8bbd0; /* Kotak teks soft pink */
            padding: 12px;
            margin-bottom: 12px;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            color: #880e4f; /* Warna teks magenta tua/gelap agar kontras */
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <!-- Foto / Icon Profil -->
        <div class="avatar">
            <svg viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="50" fill="#f8bbd0" />
                <circle cx="50" cy="40" r="20" fill="#ffffff" />
                <path d="M 15 85 A 38 38 0 0 1 85 85 Z" fill="#ffffff" />
            </svg>
        </div>

        <!-- Box Informasi -->
        <div class="info-box">
            {{ $nama ?: 'Nama' }}
        </div>
        
        <div class="info-box">
            {{ $kelas ?: 'Kelas' }}
        </div>

        <div class="info-box">
            {{ $npm ?: 'NPM' }}
        </div>
    </div>

</body>
</html>