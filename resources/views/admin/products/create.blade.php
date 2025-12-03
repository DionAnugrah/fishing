<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Produk Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded-lg">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Alat Pancing</label>
                        <input type="text" name="name" class="w-full border-gray-300 rounded mt-1" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Kategori</label>
                        <select name="category" class="w-full border-gray-300 rounded mt-1">
                            <option value="Joran">Joran</option>
                            <option value="Reel">Reel</option>
                            <option value="Umpan">Umpan</option>
                            <option value="Aksesoris">Aksesoris</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Harga (Rp)</label>
                        <input type="number" name="price" class="w-full border-gray-300 rounded mt-1" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Deskripsi</label>
                        <textarea name="description" class="w-full border-gray-300 rounded mt-1" rows="3"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Gambar Produk</label>
                        <input type="file" name="image" class="w-full mt-1">
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Simpan Produk</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>