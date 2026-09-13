<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa - ITS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-100 font-sans min-h-screen flex flex-col">

    <nav class="bg-gray-900 border-b border-gray-800 p-4 sticky top-0 z-50 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-center gap-6 text-sm font-semibold">
            <a href="{{ route('home') }}"
               class="text-gray-400 hover:text-gray-200 transition">
                Home
            </a>

            <a href="{{ route('mahasiswa', ['nrp' => $nrp]) }}"
               class="text-emerald-400 hover:text-emerald-300 transition">
                Profil Mahasiswa
            </a>

            <a href="{{ route('agent') }}"
               class="text-gray-400 hover:text-gray-200 transition">
                Agentic AI
            </a>
        </div>
    </nav>

    <main class="flex-grow py-16 px-6">
        <div class="max-w-5xl mx-auto space-y-8">

            <div>
                <p class="text-emerald-400 font-bold tracking-widest text-sm uppercase">
                    Student Academic Profile
                </p>

                <h1 class="text-4xl lg:text-5xl font-extrabold mt-2">
                    Profil Mahasiswa
                </h1>

                <p class="text-gray-400 mt-3">
                    Informasi akademik mahasiswa Teknik Informatika ITS.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="md:col-span-1 bg-gray-900 border border-gray-800
                            rounded-2xl p-6 shadow-lg">

                    <div class="w-24 h-24 rounded-full bg-emerald-500/10
                                border border-emerald-500/30
                                flex items-center justify-center mb-6">

                        <span class="text-3xl font-bold text-emerald-400">
                            AA
                        </span>
                    </div>

                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        NRP
                    </p>

                    <p class="font-mono text-emerald-400 text-lg mt-1">
                        {{ $nrp }}
                    </p>

                    <h2 class="text-2xl font-bold mt-5">
                        Addien Zafriyan Al Akhsan
                    </h2>

                    <p class="text-gray-400 mt-2">
                        Teknik Informatika
                    </p>

                    <p class="text-gray-500 text-sm mt-1">
                        Institut Teknologi Sepuluh Nopember
                    </p>
                </div>

                <div class="md:col-span-2 bg-gray-900 border border-gray-800
                            rounded-2xl p-6 shadow-lg">

                    <div class="flex items-center justify-between
                                border-b border-gray-800 pb-4 mb-6">

                        <h2 class="text-xl font-bold">
                            Informasi Akademik
                        </h2>

                        <span class="px-3 py-1 rounded-full
                                     bg-emerald-500/10
                                     border border-emerald-500/20
                                     text-emerald-400 text-xs font-semibold">
                            Active Student
                        </span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <div>
                            <p class="text-xs uppercase tracking-wider
                                      text-gray-500 font-semibold">
                                Nama
                            </p>
                            <p class="text-gray-200 mt-1">
                                Addien Zafriyan Al Akhsan
                            </p>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wider
                                      text-gray-500 font-semibold">
                                NRP
                            </p>
                            <p class="text-emerald-400 font-mono mt-1">
                                {{ $nrp }}
                            </p>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wider
                                      text-gray-500 font-semibold">
                                Program Studi
                            </p>
                            <p class="text-gray-200 mt-1">
                                Teknik Informatika
                            </p>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wider
                                      text-gray-500 font-semibold">
                                Institusi
                            </p>
                            <p class="text-gray-200 mt-1">
                                Institut Teknologi Sepuluh Nopember
                            </p>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wider
                                      text-gray-500 font-semibold">
                                Status
                            </p>
                            <p class="text-gray-200 mt-1">
                                Mahasiswa Aktif
                            </p>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wider
                                      text-gray-500 font-semibold">
                                Tahun Akademik
                            </p>
                            <p class="text-gray-200 mt-1">
                                2026
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-2xl
                        p-6 shadow-lg">

                <h2 class="text-xl font-bold mb-5">
                    Riwayat Studi
                </h2>

                <div class="space-y-4">

                    <div class="flex gap-4">
                        <div class="w-2 rounded-full bg-emerald-500"></div>

                        <div>
                            <p class="font-semibold text-gray-200">
                                Teknik Informatika
                            </p>

                            <p class="text-sm text-gray-500 mt-1">
                                Institut Teknologi Sepuluh Nopember
                            </p>

                            <p class="text-sm text-gray-400 mt-2">
                                Program sarjana dengan fokus pada ilmu komputer,
                                pengembangan perangkat lunak, data, dan
                                kecerdasan buatan.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-2 rounded-full bg-gray-700"></div>

                        <div>
                            <p class="font-semibold text-gray-200">
                                Madrasah Aliyah
                            </p>

                            <p class="text-sm text-gray-500 mt-1">
                                MAN Insan Cendekia
                            </p>

                            <p class="text-sm text-gray-400 mt-2">
                                Pendidikan menengah dengan penekanan pada
                                akademik, sains, dan pengembangan karakter.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">

                <a href="{{ route('home') }}"
                   class="px-6 py-3 bg-gray-900 hover:bg-gray-800
                          border border-gray-700 rounded-lg
                          font-semibold text-center transition">
                    ← Kembali ke Home
                </a>

                <a href="{{ route('agent') }}"
                   class="px-6 py-3 bg-emerald-500 hover:bg-emerald-400
                          text-gray-950 rounded-lg font-bold
                          text-center transition">
                    Lihat Ide Agentic AI →
                </a>

            </div>

        </div>
    </main>

    <footer class="bg-gray-950 border-t border-gray-800
                   p-8 text-center text-gray-500 text-sm">
        <p>
            ITS Academic Profile &copy; 2026
        </p>
    </footer>

</body>
</html>
```
