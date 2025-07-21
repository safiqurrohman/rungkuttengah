<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center bg-white p-10 rounded-lg shadow-lg">
        <h1 class="text-6xl font-bold text-red-600">403</h1>
        <h2 class="text-2xl font-semibold mt-4">Akses Dilarang</h2>
        <p class="text-gray-600 mt-2">Maaf, Anda tidak memiliki izin untuk mengakses halaman ini.</p>
        <img src="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif" alt="403 Forbidden" class="w-64 mx-auto mt-6">
        <a href="{{ route('home')}}" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">Kembali ke Dashboard</a>
    </div>
    
</body>

</html>