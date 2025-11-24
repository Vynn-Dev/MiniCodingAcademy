<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCA Admin Dashboard</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .sidebar-open { transform: translateX(0); }
        .sidebar-closed { transform: translateX(-100%); }
    </style>
</head>

<body class="bg-gray-100">

    <!-- ===== HEADER / NAVBAR ===== -->
    <header class="bg-white shadow fixed top-0 left-0 w-full z-40 px-6 py-4 flex justify-between items-center">
        
        <!-- Sidebar Toggle (Mobile) -->
        <button id="toggleSidebar" class="md:hidden text-gray-700 text-2xl">
            ☰
        </button>

        <h1 class="text-xl font-bold text-gray-700">
            <span class="text-cyan-600">Admin</span> Dashboard
        </h1>

        <!-- Logout -->
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Logout
            </button>
        </form>
    </header>

    <!-- ===== SIDEBAR ===== -->
    <aside id="sidebar"
        class="fixed top-0 left-0 w-64 h-full bg-white shadow-md pt-28 pb-6 px-4 z-30
               sidebar-closed md:sidebar-open md:translate-x-0 transition-transform duration-300">

        <nav class="space-y-3">

            <a href="{{ route('admin.dashboard') }}"
               class="block px-4 py-3 rounded hover:bg-cyan-100
                      {{ request()->routeIs('admin.dashboard') ? 'bg-cyan-500 text-white' : 'text-gray-700' }}">
                📊 Dashboard
            </a>

            <a href="{{ route('admin.services.index') }}"
               class="block px-4 py-3 rounded hover:bg-cyan-100
                      {{ request()->routeIs('admin.services.*') ? 'bg-cyan-500 text-white' : 'text-gray-700' }}">
                🛠️ Services
            </a>

            <a href="{{ route('admin.products.index') }}"
               class="block px-4 py-3 rounded hover:bg-cyan-100
                      {{ request()->routeIs('admin.products.*') ? 'bg-cyan-500 text-white' : 'text-gray-700' }}">
                📦 Products
            </a>

        </nav>
    </aside>

    <!-- ===== PAGE CONTENT ===== -->
    <main class="pt-24 md:ml-64 px-6 pb-10 transition-all">

        @yield('content')

    </main>

    <!-- Toggle Sidebar Script -->
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
