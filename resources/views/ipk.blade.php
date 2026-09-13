<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator IPK - ITS Academic Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 text-gray-100 font-sans min-h-screen">

    <nav class="border-b border-gray-800 bg-gray-950">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}"
               class="text-xl font-bold text-emerald-400">
                ITS Academic Profile
            </a>

            <div class="flex gap-6 text-sm">
                <a href="{{ route('home') }}"
                   class="text-gray-400 hover:text-emerald-400 transition">
                    Home
                </a>

                <a href="{{ route('mahasiswa', ['nrp' => '5025241058']) }}"
                   class="text-gray-400 hover:text-emerald-400 transition">
                    Mahasiswa
                </a>

                <a href="{{ route('agent') }}"
                   class="text-gray-400 hover:text-emerald-400 transition">
                    Agent
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-16">

        <div class="text-center mb-10">
            <p class="text-emerald-400 font-mono text-sm mb-3">
                ACADEMIC CALCULATOR
            </p>

            <h1 class="text-4xl font-extrabold text-white">
                Kalkulator IPK
            </h1>

            <p class="text-gray-400 mt-3">
                Menghitung jumlah dan rata-rata IP dari dua semester.
            </p>
        </div>

        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-xl">

            <div class="grid md:grid-cols-2 gap-6">

                <div class="bg-gray-950 border border-gray-800 rounded-xl p-6">
                    <p class="text-gray-500 text-sm">
                        IP Semester 1
                    </p>

                    <p class="text-3xl font-bold text-emerald-400 mt-2">
                        {{ number_format((float) $ip1, 2) }}
                    </p>
                </div>

                <div class="bg-gray-950 border border-gray-800 rounded-xl p-6">
                    <p class="text-gray-500 text-sm">
                        IP Semester 2
                    </p>

                    <p class="text-3xl font-bold text-emerald-400 mt-2">
                        {{ number_format((float) $ip2, 2) }}
                    </p>
                </div>

            </div>

            <div class="border-t border-gray-800 my-8"></div>

            <div class="bg-emerald-500/10 border border-emerald-500/30 rounded-xl p-6">

                <div class="flex justify-between items-center">
                    <span class="text-gray-300">
                        Jumlah IP
                    </span>

                    <span class="text-2xl font-bold text-emerald-400">
                        {{ number_format((float) $jumlah, 2) }}
                    </span>
                </div>

                <div class="flex justify-between items-center mt-5">
                    <span class="text-gray-300">
                        Rata-rata IPK
                    </span>

                    <span class="text-3xl font-extrabold text-white">
                        {{ number_format((float) $rataRata, 2) }}
                    </span>
                </div>

            </div>

            <div class="mt-8 bg-gray-950 border border-gray-800 rounded-xl p-5">
                <p class="text-gray-500 text-xs font-mono mb-2">
                    CALCULATION
                </p>

                <p class="font-mono text-gray-300">
                    ({{ number_format((float) $ip1, 2) }}
                    +
                    {{ number_format((float) $ip2, 2) }})
                    /
                    2
                    =
                    <span class="text-emerald-400">
                        {{ number_format((float) $rataRata, 2) }}
                    </span>
                </p>
            </div>

            <div class="mt-8 flex gap-4">
                <a href="{{ route('home') }}"
                   class="px-5 py-3 bg-gray-800 hover:bg-gray-700
                          rounded-lg font-semibold transition">
                    ← Home
                </a>

                <a href="{{ route('agent') }}"
                   class="px-5 py-3 bg-emerald-500 hover:bg-emerald-400
                          text-gray-950 rounded-lg font-semibold transition">
                    Agentic AI →
                </a>
            </div>

        </div>

    </main>

    <footer class="border-t border-gray-800 mt-10">
        <div class="max-w-6xl mx-auto px-6 py-6 text-center text-gray-500 text-sm">
            ITS Academic Profile · Laravel Local Sandbox
        </div>
    </footer>

</body>
</html>