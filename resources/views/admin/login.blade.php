<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="max-w-md mx-auto mt-28 bg-white p-8 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Admin Login</h2>
    @if(session('error')) <div class="text-red-600 mb-2">{{ session('error') }}</div> @endif
    <form method="POST" action="{{ route('admin.login.post') }}">
      @csrf
      <input name="username" placeholder="Username" class="w-full border p-2 rounded mb-3" required>
      <input name="password" type="password" placeholder="Password" class="w-full border p-2 rounded mb-3" required>
      <button class="w-full bg-cyan-600 text-white py-2 rounded">Login</button>
    </form>
  </div>
</body>
</html>
