<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agentic AI - ITS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-100 font-sans min-h-screen flex flex-col">

    <nav class="bg-gray-900 border-b border-gray-800 p-4 sticky top-0 z-50 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-center gap-6 text-sm font-semibold">

            <a href="{{ route('home') }}"
               class="text-gray-400 hover:text-gray-200 transition">
                Home
            </a>

            <a href="{{ route('mahasiswa', ['nrp' => '5025241058']) }}"
               class="text-gray-400 hover:text-gray-200 transition">
                Profil Mahasiswa
            </a>

            <a href="{{ route('agent') }}"
               class="text-emerald-400 hover:text-emerald-300 transition">
                Agentic AI
            </a>

        </div>
    </nav>

    <main class="flex-grow py-16 px-6">

        <div class="max-w-5xl mx-auto space-y-8">

            <div>
                <p class="text-emerald-400 font-bold tracking-widest
                          text-sm uppercase">
                    Final Semester Project
                </p>

                <h1 class="text-4xl lg:text-5xl font-extrabold mt-2">
                    Ide Platform Agentic AI
                </h1>

                <p class="text-gray-400 mt-3 max-w-3xl">
                    Konsep platform berbasis Agentic AI yang dirancang untuk
                    membantu pengguna menyelesaikan tugas melalui serangkaian
                    proses yang dapat direncanakan dan dijalankan secara
                    otomatis.
                </p>
            </div>

            <div class="bg-gray-900 border border-gray-800
                        rounded-2xl p-6 shadow-lg">

                <div class="flex items-center justify-between
                            border-b border-gray-800 pb-4 mb-6">

                    <div>
                        <p class="text-xs uppercase tracking-wider
                                  text-gray-500 font-semibold">
                            Selected Theme
                        </p>

                        <h2 class="text-2xl font-bold mt-1">
                            {{ $tema ?? 'General Assistant Agent' }}
                        </h2>
                    </div>

                    <div class="px-3 py-1 rounded-full
                                bg-emerald-500/10
                                border border-emerald-500/20
                                text-emerald-400 text-xs font-semibold">
                        Agentic AI
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                    <div class="bg-gray-950 border border-gray-800
                                rounded-xl p-5">

                        <div class="text-emerald-400 font-mono text-sm mb-3">
                            01 / PERCEIVE
                        </div>

                        <h3 class="font-bold text-lg">
                            Memahami Input
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mt-2">
                            Agent menerima kebutuhan pengguna dan memahami
                            konteks, tujuan, serta informasi yang tersedia.
                        </p>

                    </div>

                    <div class="bg-gray-950 border border-gray-800
                                rounded-xl p-5">

                        <div class="text-emerald-400 font-mono text-sm mb-3">
                            02 / PLAN
                        </div>

                        <h3 class="font-bold text-lg">
                            Menyusun Rencana
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mt-2">
                            Agent memecah tujuan menjadi beberapa langkah
                            yang diperlukan untuk menghasilkan solusi.
                        </p>

                    </div>

                    <div class="bg-gray-950 border border-gray-800
                                rounded-xl p-5">

                        <div class="text-emerald-400 font-mono text-sm mb-3">
                            03 / ACT
                        </div>

                        <h3 class="font-bold text-lg">
                            Menjalankan Aksi
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mt-2">
                            Agent menjalankan tools atau proses yang diperlukan
                            dan mengevaluasi hasil sebelum melanjutkan.
                        </p>

                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-gray-900 border border-gray-800
                            rounded-2xl p-6 shadow-lg">

                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        Platform Concept
                    </p>

                    <h2 class="text-2xl font-bold mt-2">
                        Academic Agent
                    </h2>

                    <p class="text-gray-400 leading-relaxed mt-4">
                        Platform Agentic AI yang membantu mahasiswa dalam
                        mengelola aktivitas akademik. Agent dapat membantu
                        menyusun rencana belajar, mengorganisasi tugas,
                        merangkum informasi, dan memberikan rekomendasi
                        berdasarkan konteks akademik pengguna.
                    </p>

                </div>

                <div class="bg-gray-900 border border-gray-800
                            rounded-2xl p-6 shadow-lg">

                    <p class="text-xs uppercase tracking-wider
                              text-gray-500 font-semibold">
                        Potential Features
                    </p>

                    <ul class="mt-4 space-y-3 text-gray-400">

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Academic task planning
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Intelligent study scheduling
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Document and material summarization
                        </li>

                        <li class="flex gap-3">
                            <span class="text-emerald-400">✓</span>
                            Personalized recommendations
                        </li>

                    </ul>

                </div>

            </div>

            <div class="bg-gray-900 border border-gray-800
                        rounded-2xl p-6 shadow-lg">

                <div class="flex items-center gap-3 mb-5">

                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex
                                     h-full w-full rounded-full
                                     bg-emerald-400 opacity-75"></span>

                        <span class="relative inline-flex rounded-full
                                     h-3 w-3 bg-emerald-500"></span>
                    </span>

                    <h2 class="font-bold">
                        Agent Workflow
                    </h2>

                </div>

                <div class="bg-gray-950 border border-gray-800
                            rounded-xl p-5 font-mono text-sm
                            text-gray-400 space-y-2">

                    <p>
                        <span class="text-emerald-400">&gt;</span>
                        receive user goal
                    </p>

                    <p>
                        <span class="text-emerald-400">&gt;</span>
                        analyze context
                    </p>

                    <p>
                        <span class="text-emerald-400">&gt;</span>
                        generate action plan
                    </p>

                    <p>
                        <span class="text-emerald-400">&gt;</span>
                        execute available tools
                    </p>

                    <p>
                        <span class="text-emerald-400">&gt;</span>
                        evaluate result
                    </p>

                    <p>
                        <span class="text-emerald-400">&gt;</span>
                        return final response
                    </p>

                </div>

            </div>

            <div class="flex flex-col sm:flex-row gap-4">

                <a href="{{ route('home') }}"
                   class="px-6 py-3 bg-gray-900 hover:bg-gray-800
                          border border-gray-700 rounded-lg
                          font-semibold text-center transition">
                    ← Kembali ke Home
                </a>

                <a href="{{ route('mahasiswa', ['nrp' => '5025241058']) }}"
                   class="px-6 py-3 bg-emerald-500 hover:bg-emerald-400
                          text-gray-950 rounded-lg font-bold
                          text-center transition">
                    Lihat Profil Mahasiswa →
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
