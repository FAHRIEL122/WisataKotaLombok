@extends('layouts.app')
@section('content')
<div class="p-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Data Wisata</h2>
        <a href="{{ route('admin.wisata.create') }}" class="bg-blue-600 text-white px-5 py-2 rounded font-bold">+ Tambah Data</a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="p-4">Nama Tempat</th>
                    <th class="p-4">Kategori</th>
                    <th class="p-4">Harga Tiket</th>
                    <th class="p-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wisatas as $w)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4 font-semibold">{{ $w->nama_tempat }}</td>
                    <td class="p-4">{{ $w->kategori }}</td>
                    <td class="p-4">Rp {{ number_format($w->harga_tiket) }}</td>
                    <td class="p-4 flex gap-3">
                        <a href="{{ route('admin.wisata.edit', $w->id) }}" class="text-yellow-600 font-bold">Edit</a>
                        <form action="{{ route('admin.wisata.destroy', $w->id) }}" method="POST" class="form-hapus">
                            @csrf @method('DELETE')
                            <button type="button" class="text-red-600 font-bold btn-hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
document.querySelectorAll('.btn-hapus').forEach(button => {
    button.addEventListener('click', function(e) {
        let form = this.closest('form');
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data wisata ini akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    });
});
</script>
@endsection