<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi - E-Parkir XII</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-image: linear-gradient(rgba(15, 23, 42, 0.4), rgba(15, 23, 42, 0.4)), url('{{ asset('images/parkir.jpg') }}'); background-size: cover; background-position: center;" 
      class="flex items-center justify-center min-h-screen p-4">

    <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md border border-slate-200 text-center">
        <!-- Icon Kunci -->
        <div class="text-4xl mb-4">🔑</div>
        
        <h2 class="text-2xl font-extrabold text-slate-800">Lupa Kata Sandi?</h2>
        <p class="text-slate-600 mt-4 text-sm leading-relaxed">
            Untuk menjaga keamanan data sistem parkir, fitur reset mandiri dinonaktifkan. Silakan hubungi <strong class="font-semibold text-slate-800">Administrator IT / Guru Pembimbing</strong> untuk melakukan reset password akun Anda.
        </p>

        <!-- Tombol Kembali ke Halaman Login (Menggunakan URL langsung '/login' agar anti-error) -->
        <div class="mt-8">
            <a href="{{ url('/login') }}" 
               class="inline-block w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg transition transform active:scale-95">
                Kembali ke Login
            </a>
        </div>
    </div>

</body>
</html>