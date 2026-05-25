<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - MiniCoding Academy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/MCA_Logo-removebg-preview (1) (1).png') }}" />
</head>

<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <!-- Card Container -->
        <div class="rounded-3xl bg-white shadow-2xl ring-1 ring-slate-200/70 overflow-hidden">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-8 py-12 text-center">
                <div class="inline-flex h-16 w-16 items-center justify-center rounded-3xl bg-white text-2xl font-bold text-cyan-600 mb-4">
                    M
                </div>
                <h1 class="text-3xl font-bold text-white">MiniCoding Academy</h1>
                <p class="text-cyan-100 mt-2">Admin Access Portal</p>
            </div>

            <!-- Form Section -->
            <div class="px-8 py-10">
                <!-- Error Message -->
                @if(session('error'))
                <div class="mb-6 rounded-2xl bg-red-50 border border-red-200 px-4 py-3">
                    <p class="text-sm font-medium text-red-800">{{ session('error') }}</p>
                </div>
                @endif

                <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
                    @csrf

                    <!-- Username Field -->
                    <div>
                        <label for="username" class="block text-sm font-semibold text-slate-700 mb-2">Username</label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Enter your username"
                            class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600/20 transition"
                            required>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600/20 transition"
                            required>
                    </div>

                    <!-- Login Button -->
                    <button
                        type="submit"
                        class="w-full rounded-2xl bg-gradient-to-r from-cyan-600 to-cyan-500 px-4 py-3 text-center font-semibold text-white shadow-lg hover:from-cyan-700 hover:to-cyan-600 transition duration-200 mt-8">
                        Login
                    </button>
                </form>

                <!-- Footer Text -->
                <p class="text-center text-sm text-slate-500 mt-8">
                    Admin login required to access this area
                </p>
            </div>
        </div>

        <!-- Security Notice -->
        <div class="mt-6 text-center text-sm text-slate-300">
            <p>🔒 This is a secure area. Only authorized administrators may log in.</p>
        </div>
    </div>
</body>
</html>
