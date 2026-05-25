<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'MCA') }} Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/MCA_Logo-removebg-preview (1) (1).png') }}" />
    <style>
        .sidebar-open { transform: translateX(0); }
        .sidebar-closed { transform: translateX(-100%); }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 min-h-screen">

    <aside id="sidebar"
        class="fixed inset-y-0 left-0 z-40 w-72 overflow-y-auto bg-white border-r border-slate-200 shadow-xl pt-6 px-5
               sidebar-closed md:translate-x-0 transition-transform duration-300">

        <div class="mb-8 flex items-center gap-3 px-1">
            <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-cyan-600 text-xl font-semibold text-white">
                M
            </div>
            <div>
                <p class="text-sm text-slate-500">MiniCoding Academy</p>
                <h2 class="text-xl font-semibold text-slate-900">Admin Panel</h2>
            </div>
        </div>

        <nav class="space-y-2">
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-medium transition hover:bg-cyan-50
                      {{ request()->routeIs('admin.dashboard') ? 'bg-cyan-500 text-white' : 'text-slate-700' }}">
                <span class="text-lg">📊</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.services.index') }}"
               class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-medium transition hover:bg-cyan-50
                      {{ request()->routeIs('admin.services.*') ? 'bg-cyan-500 text-white' : 'text-slate-700' }}">
                <span class="text-lg">🛠️</span>
                <span>Services</span>
            </a>

            <a href="{{ route('admin.products.index') }}"
               class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-medium transition hover:bg-cyan-50
                      {{ request()->routeIs('admin.products.*') ? 'bg-cyan-500 text-white' : 'text-slate-700' }}">
                <span class="text-lg">📦</span>
                <span>Products</span>
            </a>
        </nav>
    </aside>

    <div class="md:pl-72">
        <header class="fixed inset-x-0 top-0 z-30 flex items-center justify-between gap-4 border-b border-slate-200 bg-white/95 px-6 py-4 backdrop-blur-md shadow-sm">
            <div class="flex items-center gap-3">
                <button id="toggleSidebar" class="md:hidden inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-700 shadow-sm">
                    ☰
                </button>
                <div>
                    <h1 class="text-xl font-semibold text-slate-900">@yield('page_title', 'Dashboard')</h1>
                    <p class="text-sm text-slate-500">Overview of your admin panel and metrics.</p>
                </div>
            </div>

            <div class="flex flex-1 items-center justify-end gap-3">
                <div class="hidden sm:flex flex-1 max-w-md items-center rounded-2xl border border-slate-200 bg-slate-100 px-3 py-2 text-slate-500">
                    <span class="mr-2">🔍</span>
                    <input type="search" placeholder="Search..." class="w-full bg-transparent text-sm outline-none" />
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="inline-flex">
                    @csrf
                    <button class="rounded-2xl bg-red-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-red-600">
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <main class="min-h-screen bg-slate-50 px-6 pt-32 pb-10">
            @yield('content')
        </main>
    </div>

    <script>
        const sidebar = document.getElementById("sidebar");
        const toggleBtn = document.getElementById("toggleSidebar");

        toggleBtn.addEventListener("click", () => {
            if (sidebar.classList.contains("sidebar-closed")) {
                sidebar.classList.remove("sidebar-closed");
                sidebar.classList.add("sidebar-open");
            } else {
                sidebar.classList.remove("sidebar-open");
                sidebar.classList.add("sidebar-closed");
            }
        });
    </script>

</body>
</html>
