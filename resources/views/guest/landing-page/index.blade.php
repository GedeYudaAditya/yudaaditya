<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Yuda Aditya</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a111b]" x-data="{ sidebarOpen: false }">

    <!-- Toggle button (mobile) -->
    <button @click="sidebarOpen = !sidebarOpen"
        class="md:hidden fixed top-4 left-4 z-50 p-2 rounded-lg bg-slate-400/20 text-gray-800 dark:text-gray-200 backdrop-blur-md">
        ☰
    </button>

    <!-- Sidebar -->
    <aside
        class="fixed top-0 left-0 h-screen w-56 bg-slate-400/10 backdrop-blur-md border-r border-slate-400/15
         transform transition-transform duration-300 ease-in-out z-40 flex flex-col items-center py-10 space-y-8"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'">


        <!-- Profile -->
        <div class="flex flex-col items-center text-center">
            <img src="{{ asset('assets/image/lilith.png') }}" alt="Profile"
                class="w-20 h-20 rounded-full border-2 border-white/30 mb-3">
            <h1 class="text-xl font-bold text-gray-800 dark:text-gray-100">Yuda Aditya</h1>
            <p class="text-sm text-gray-500 dark:text-gray-400">Web Developer</p>
        </div>

        <!-- Nav -->
        <nav class="flex flex-col space-y-4 text-center w-full px-4">
            <a href="#about" class="py-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-slate-400/20">About</a>
            <a href="#skills" class="py-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-slate-400/20">Skills</a>
            <a href="#projects"
                class="py-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-slate-400/20">Projects</a>
            <a href="#contact"
                class="py-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-slate-400/20">Contact</a>
        </nav>

        <!-- Social -->
        <div class="mt-auto flex space-x-4">
            <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">🌐</a>
            <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-blue-400">🐦</a>
            <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-pink-500">📸</a>
        </div>
    </aside>

    <!-- Overlay for mobile -->
    <div class="fixed inset-0 bg-black/40 z-30 md:hidden" x-show="sidebarOpen" @click="sidebarOpen = false"
        x-transition.opacity>
    </div>

    <img src="{{ asset('assets/image/lilith_transparant.png') }}" alt="Profile"
        class="w-full object-cover object-left-top absolute top-0 left-0 -z-10 opacity-10 bg-gradient-to-b from-black dark:from-white to-transparent"
        style="
        mask-image: linear-gradient(to bottom, black 80%, transparent 100%);
        -webkit-mask-image: linear-gradient(to bottom, black 80%, transparent 100%);
    "
        x-data x-init="let lastScrollY = 0;
        const update = () => {
            const scrollY = window.scrollY;
            if (Math.abs(scrollY - lastScrollY) > 1) {
                $el.style.transform = `translateY(${scrollY * 0.2}px)`;
                lastScrollY = scrollY;
            }
            requestAnimationFrame(update);
        };
        update();" />


    <!-- Main content -->
    <main class="flex-1 p-6 md:ml-56 space-y-20">
        <section id="about" class="min-h-screen flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">About Me</h2>
            <p class="text-gray-500 dark:text-gray-300 leading-relaxed max-w-xl">
                Halo, saya Yuda Aditya! Saya seorang Web Developer yang suka membangun aplikasi web modern
                dengan Laravel, Tailwind, dan teknologi lainnya. Saya juga punya sedikit bakat menggambar :)
            </p>

            <p class="text-sm text-gray-500 dark:text-gray-400 mt-4 italic">
                “its always <code class="text-red-400">else</code> case in any action you take” ~ Me
            </p>
        </section>

        <section id="skills" class="min-h-screen flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">Programming Skills</h2>

            <div class="mb-10 max-w-md mx-auto w-1/2">
                <canvas id="skillsChart"></canvas>
            </div>

            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-gray-700 dark:text-gray-200">
                <li
                    class="flex items-center gap-2 p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <i class="devicon-laravel-plain text-red-500 text-xl"></i> Laravel
                </li>
                <li
                    class="flex items-center gap-2 p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <i class="devicon-codeigniter-plain text-red-500 text-xl"></i> CodeIgniter
                </li>
                <li
                    class="flex items-center gap-2 p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <i class="devicon-tailwindcss-plain text-sky-400 text-xl"></i> Tailwind
                </li>
                <li
                    class="flex items-center gap-2 p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <i class="devicon-javascript-plain text-yellow-400 text-xl"></i> JavaScript
                </li>
                <li
                    class="flex items-center gap-2 p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <i class="devicon-flutter-plain text-blue-400 text-xl"></i> Flutter
                </li>
            </ul>

            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4 mt-10">Other Skills</h2>

            <p class="text-gray-500 dark:text-gray-300 leading-relaxed max-w-xl">
                Selain programming, saya juga punya sedikit bakat menggambar. Terutama menggambar <code
                    class="text-red-400">karakter</code> dan <code class="text-red-400">ilustrasi</code>.
            </p>

            <p class="text-sm text-gray-500 dark:text-gray-400 mt-4 italic">
                Hey, i am not a professional artist. Its just a hobby. And i am not a gooner!!
            </p>

            {{-- grid card image --}}
            <!-- Gallery Grid -->
            <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div
                    class="relative group overflow-hidden rounded-2xl shadow-md bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <img src="{{ asset('assets/image/art/lilith.png') }}" alt="Artwork 1"
                        class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <p class="text-white text-sm font-semibold">“Character Practice Lilith”</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="relative group overflow-hidden rounded-2xl shadow-md bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <img src="{{ asset('assets/image/art/miku.png') }}" alt="Artwork 2"
                        class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <p class="text-white text-sm font-semibold">“Character Practice Miku”</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="relative group overflow-hidden rounded-2xl shadow-md bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <img src="{{ asset('assets/image/art/who.png') }}" alt="Artwork 3"
                        class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <p class="text-white text-sm font-semibold">“Fanart Sketch”</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="relative group overflow-hidden rounded-2xl shadow-md bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 transition">
                    <img src="{{ asset('assets/image/art/kubo.png') }}" alt="Artwork 4"
                        class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <p class="text-white text-sm font-semibold">“Fanart Kubo”</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="min-h-screen flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">Projects</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="relative p-4 rounded-xl bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 hover:scale-105 hover:shadow-xl transition-all duration-300">

                    <!-- Icon di pojok kanan atas -->
                    <div class="absolute top-3 right-3 flex items-center gap-2">
                        <i class="devicon-laravel-plain text-red-500 text-xl bg-gray-800 rounded-full p-2"></i>
                    </div>

                    <!-- Gambar -->
                    <img src="{{ asset('assets/image/project/project1.png') }}" alt="Project 1"
                        class="rounded-lg mb-3 w-full h-40 object-cover">

                    <!-- Judul & Deskripsi -->
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mt-2">Project 1</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">
                        Website sistem absensi berbasis CodeIgniter.
                    </p>
                    <a href="#" class="inline-block text-sm font-semibold text-blue-500 hover:text-blue-400">
                        Lihat Detail →
                    </a>
                </div>

                <div
                    class="relative p-4 rounded-xl bg-slate-400/10 backdrop-blur-sm hover:bg-slate-400/20 hover:scale-105 hover:shadow-xl transition-all duration-300">

                    <!-- Icon di pojok kanan atas -->
                    <div class="absolute top-3 right-3 flex items-center gap-2">
                        <i class="devicon-laravel-plain text-red-500 text-xl bg-gray-800 rounded-full p-2"></i>
                    </div>

                    <!-- Gambar -->
                    <img src="{{ asset('assets/image/project/project1.png') }}" alt="Project 1"
                        class="rounded-lg mb-3 w-full h-40 object-cover">

                    <!-- Judul & Deskripsi -->
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mt-2">Project 1</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">
                        Website sistem absensi berbasis CodeIgniter.
                    </p>
                    <a href="#" class="inline-block text-sm font-semibold text-blue-500 hover:text-blue-400">
                        Lihat Detail →
                    </a>
                </div>


            </div>
        </section>

        <section id="contact" class="min-h-screen flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">Contact</h2>
            <form class="max-w-md space-y-4">
                <input type="text" placeholder="Name"
                    class="w-full px-4 py-2 rounded-lg bg-slate-400/10 backdrop-blur-sm text-gray-800 dark:text-gray-200 focus:outline-none">
                <input type="email" placeholder="Email"
                    class="w-full px-4 py-2 rounded-lg bg-slate-400/10 backdrop-blur-sm text-gray-800 dark:text-gray-200 focus:outline-none">
                <textarea placeholder="Message" rows="4"
                    class="w-full px-4 py-2 rounded-lg bg-slate-400/10 backdrop-blur-sm text-gray-800 dark:text-gray-200 focus:outline-none"></textarea>
                <button class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Send</button>
            </form>
        </section>
    </main>
</body>

<script>
    const ctx = document.getElementById('skillsChart');

    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['Laravel', 'CodeIgniter', 'Tailwind', 'JavaScript', 'Flutter'],
            datasets: [{
                label: 'Skill Level',
                data: [90, 75, 85, 80, 70], // nilai tiap skill (0–100)
                backgroundColor: 'rgba(56, 189, 248, 0.2)', // bg-sky-400/20
                borderColor: 'rgb(56, 189, 248)', // sky-400
                borderWidth: 2,
                pointBackgroundColor: 'rgb(56, 189, 248)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(56, 189, 248)',
            }]
        },
        options: {
            scales: {
                r: {
                    angleLines: {
                        color: 'rgba(148, 163, 184, 0.3)' // slate-400/30
                    },
                    grid: {
                        color: 'rgba(148, 163, 184, 0.3)'
                    },
                    suggestedMin: 0,
                    suggestedMax: 100,
                    ticks: {
                        display: false
                    },
                    pointLabels: {
                        color: 'rgb(148, 163, 184)',
                        font: {
                            size: 14
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>

</html>
