<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="{{ asset('asset/css/profile.css') }}">
</head>
<body>
    <div class="profile-page">
        <div class="profile-header">
            <div class="profile-image">
                <img src="{{ asset('asset/images/profile.jpg') }}" alt="Gambar Profil">
            </div>
        </div>
        
        <div class="profile-container">
            <div class="profile-info">
                <h1>Profil</h1>
                <div class="input-box">
                    <label>Nama</label>
                    <input type="text" value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>" readonly>
                </div>
                <div class="input-box">
                    <label>Kelas</label>
                    <input type="text" value="<?= htmlspecialchars($kelas, ENT_QUOTES, 'UTF-8') ?>" readonly>
                </div>
                <div class="input-box">
                    <label>NPM</label>
                    <input type="text" value="<?= htmlspecialchars($npm, ENT_QUOTES, 'UTF-8') ?>" readonly>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
