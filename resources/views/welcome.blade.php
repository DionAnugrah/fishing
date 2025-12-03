<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FishingGear System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">
    
    <nav class="bg-white dark:bg-gray-800 shadow-lg fixed w-full z-10 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">FishingGear</div>
                
                <div class="hidden md:flex space-x-6">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 dark:hover:bg-blue-500 transition">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="pt-24 pb-12 bg-blue-600 dark:bg-blue-800 text-white text-center transition-colors duration-300">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Temukan Peralatan Pancing Terbaik</h1>
        <p class="text-lg mb-8 text-blue-100 dark:text-blue-200">Lengkap, Berkualitas, dan Siap Menemani Hobi Anda.</p>
        <a href="#katalog" class="bg-white text-blue-600 dark:bg-gray-300 dark:text-blue-400 px-8 py-3 rounded-full font-bold hover:bg-gray-100 dark:hover:bg-gray-300 transition shadow-lg">Lihat Katalog</a>
    </div>

    <div id="katalog" class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-gray-300 dark:text-white mb-8 text-center">Koleksi Terbaru</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl dark:hover:shadow-gray-700 transition duration-300 border border-transparent dark:border-gray-700">
                
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                
                <div class="p-6">
                    <span class="text-sm text-blue-500 dark:text-blue-400 font-bold uppercase tracking-wider">{{ $product->category }}</span>
                    
                    <h3 class="text-xl font-bold mb-2 text-gray-100 dark:text-white">{{ $product->name }}</h3>
                    
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">{{ Str::limit($product->description, 50) }}</p>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900 dark:text-gray-200">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <button class="px-4 py-2 bg-blue-600 dark:bg-blue-500 text-white text-sm rounded hover:bg-blue-700 dark:hover:bg-blue-400 transition">Detail</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        @if($products->isEmpty())
            <div class="text-center py-10">
                <p class="text-gray-500 dark:text-gray-400 text-lg">Belum ada produk yang ditampilkan saat ini.</p>
            </div>
        @endif
    </div>

    <footer class="bg-gray-800 dark:bg-gray-950 text-white py-8 text-center mt-12 border-t border-gray-700 dark:border-gray-900">
        <p>&copy; 2024 FishingGear System. All rights reserved.</p>
    </footer>
</body>
</html>