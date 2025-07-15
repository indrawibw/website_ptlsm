<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Kerjasama
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                @if(session('success'))
                    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Tombol Export PDF -->
                <div class="mb-4">
                    <a href="{{ route('kerjasama.export-pdf') }}" target="_blank" 
                       class="inline-block px-4 py-2 bg-green-500 text-white font-semibold rounded hover:bg-green-600 transition">
                        Export PDF
                    </a>
                </div>

                <table class="table-auto w-full text-left">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Dibuat</th>
                            <th>Aksi</th> <!-- Tambah kolom aksi -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kerjasama as $k)
                            <tr>
                                <td>{{ $k->nama }}</td>
                                <td>{{ $k->email }}</td>
                                <td>{{ $k->pesan }}</td>
                                <td>{{ $k->created_at->format('d-m-Y H:i') }}</td>
                                <td class="flex space-x-2">
                                    <a href="{{ route('kerjasama.edit', $k->id) }}" class="px-2 py-1 bg-yellow-400 text-black rounded">Edit</a>
                                    <form action="{{ route('kerjasama.destroy', $k->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2 py-1 bg-red-500 text-black rounded">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $kerjasama->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
