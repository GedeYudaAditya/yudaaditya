<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Yuda Aditya</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs"></script>
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

    <!-- Main content -->
    <main class="flex-1 p-6 md:ml-56 space-y-20">
        <section id="about" class="min-h-screen flex flex-col justify-start">
            <div class="bg-slate-400/10 backdrop-blur-md rounded-lg p-4 mb-10">
                <img src="{{ asset('assets/image/lilith.png') }}" alt="Profile"
                    class="w-full h-96 object-cover rounded-lg">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">About Me</h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-xl">
                    Halo, saya Yuda Aditya! Saya seorang Web Developer yang suka membangun aplikasi web modern
                    dengan Laravel, Tailwind, dan teknologi lainnya.
                </p>
            </div>
        </section>

        <section id="skills" class="min-h-screen flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">Skills</h2>
            <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-gray-700 dark:text-gray-200">
                <li class="p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm">Laravel</li>
                <li class="p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm">Tailwind</li>
                <li class="p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm">JavaScript</li>
                <li class="p-3 rounded-lg bg-slate-400/10 backdrop-blur-sm">Flutter</li>
            </ul>
        </section>

        <section id="projects" class="min-h-screen flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">Projects</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-4 rounded-xl bg-slate-400/10 backdrop-blur-sm">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Project 1</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Deskripsi singkat project.</p>
                </div>
                <div class="p-4 rounded-xl bg-slate-400/10 backdrop-blur-sm">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Project 2</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Deskripsi singkat project.</p>
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

</html>
