<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Kerjasama
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-4">
                <form method="POST" action="{{ route('kerjasama.update', $kerjasama->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label>Nama</label>
                        <input type="text" name="nama" value="{{ $kerjasama->nama }}" class="border p-2 w-full rounded">
                    </div>

                    <div class="mb-4">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ $kerjasama->email }}" class="border p-2 w-full rounded">
                    </div>

                    <div class="mb-4">
                        <label>Pesan</label>
                        <textarea name="pesan" class="border p-2 w-full rounded">{{ $kerjasama->pesan }}</textarea>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

