<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Wisata Lombok</title>
    <!-- Pakai CDN biar gampang -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-slate-50">
    @if(Auth::check())
    <nav class="bg-blue-800 text-white p-4 shadow-md flex justify-between items-center px-10">
        <h1 class="text-xl font-bold">Admin Panel Wisata Lombok</h1>
        <div class="space-x-4">
            <a href="{{ route('dashboard') }}" class="hover:text-blue-200">Dashboard</a>
            <a href="{{ route('admin.wisata.index') }}" class="hover:text-blue-200">Data Wisata</a>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="hover:text-red-300">Logout</button>
            </form>
        </div>
    </nav>
    @endif

    @yield('content')
    
    @if(session('success'))
        <script>Swal.fire('Berhasil!', "{{ session('success') }}", 'success')</script>
    @endif
</body>
</html>