<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Member') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 border-l-4 border-indigo-500">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold">Halo, {{ Auth::user()->name }}! 👋</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Selamat datang kembali di FishingGear System. Siap untuk petualangan memancing berikutnya?</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-indigo-100 dark:bg-indigo-900 text-indigo-500 dark:text-indigo-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-800 dark:text-white">Status Member</h4>
                            <span class="px-2 py-1 text-xs font-bold text-green-800 bg-green-200 rounded-full">Active</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-pink-100 dark:bg-pink-900 text-pink-500 dark:text-pink-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-800 dark:text-white">Favorit Saya</h4>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">0 Item disimpan</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-500 dark:text-blue-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-800 dark:text-white">Email Terdaftar</h4>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
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

        </div>
    </div>
</x-app-layout>