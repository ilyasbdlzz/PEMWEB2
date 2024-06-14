<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_title"> List Data Pasien</x-slot>
    <x-slot name="page_content">
        <div style="text-align:start">
            @if (session('pesan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('pesan')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('update'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{session('update')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session('delete')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                <a href="{{url ('dashboard/pasien/create')}}" class ="btn btn-success">+ Tambah Pasien</a>
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
                        <a href="{{url ('dashboard/pasien/show', $pasien->id)}}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{url ('dashboard/pasien/edit', $pasien->id)}}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                        <form action="{{url ('dashboard/pasien/destroy', $pasien->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Apakah Anda yakin ingin menghapus data pasien ini?')" type="submit" class="btn btn-danger"> <i class="far fa-trash-alt"></i>Hapus </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>