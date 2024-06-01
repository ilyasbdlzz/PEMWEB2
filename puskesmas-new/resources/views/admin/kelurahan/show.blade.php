<x-layout>
    <x-slot name="page_name">Detail Pasien</x-slot>
    <x-slot name="page_title">Berikut adalah tampilan Detail Pasien yang dipilih :</x-slot>
        <x-slot name="page_content">
                <table class="table table-bordered ">
                    <tr class="table-danger">
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama Kelurahan</th>
                        <th>Nama Kecamatan</th>
                        <th>Data dibuat pada</th>
                        <th>Data diupdate pada</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{ $kelurahan->id }}</td>
                        <td>{{ $kelurahan->nama }}</td>
                        <td>{{ $kelurahan->kecamatan_nama }}</td>
                        <td>{{ $kelurahan->created_at }}</td>
                        <td>{{ $kelurahan->updated_at }}</td>
                        
                    </tr>
                </table>
        </x-slot>
</x-layout>