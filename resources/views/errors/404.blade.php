<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-100 font-sans min-h-screen
             flex items-center justify-center px-6">

    <div class="text-center max-w-lg">

        <p class="text-emerald-400 font-mono text-sm mb-4">
            ERROR 404
        </p>

        <h1 class="text-7xl font-extrabold text-white">
            404
        </h1>

        <h2 class="text-2xl font-bold mt-4">
            Halaman Tidak Ditemukan
        </h2>

        <p class="text-gray-400 mt-3 leading-relaxed">
            Halaman yang kamu cari tidak tersedia atau URL yang dimasukkan
            tidak sesuai dengan route yang tersedia.
        </p>

        <a href="{{ route('home') }}"
           class="inline-block mt-8 px-6 py-3
                  bg-emerald-500 hover:bg-emerald-400
                  text-gray-950 rounded-lg font-bold transition">
            ← Kembali ke Home
        </a>

    </div>

</body>
</html>
```
