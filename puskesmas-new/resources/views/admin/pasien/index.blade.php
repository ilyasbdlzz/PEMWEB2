<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_title"> List Data Pasien</x-slot>
    <x-slot name="page_content">
        <div style="text-align: end;">
            <a href="{{url ('dashboard/pasien/create')}}" class ="btn btn-success align-center">+ Tambah Pasien baru</a>
        </div>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Gender</th>
                <th>Faskes Kelurahan</th>
                <th>Action</th>
            </tr>
            @foreach ($list_pasien as $pasien)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pasien->kode }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->gender }}</td>
                    <td>{{ $pasien->kel_nama }}</td>
                    <td>
                        <a href="{{url ('dashboard/pasien/show', $pasien->id)}}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{url ('dashboard/pasien/')}}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <a href="#" class="text-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>