<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#bbdefb]">

    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-center text-2xl font-bold mb-6">Profile</h2>
            <table class="min-w-full">
                <tbody>
                    <tr class="border-b">
                        <td class="text-sm font-medium text-gray-700">Nama</td>
                        <td class="text-sm text-gray-500">:</td>
                        <td class="text-sm text-gray-500">{{ $nama }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-sm font-medium text-gray-700">Kelas</td>
                        <td class="text-sm text-gray-500">:</td>
                        <td class="text-sm text-gray-500">{{ $nama_kelas }}</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-medium text-gray-700">NPM</td>
                        <td class="text-sm text-gray-500">:</td>
                        <td class="text-sm text-gray-500">{{ $npm }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

=======
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
