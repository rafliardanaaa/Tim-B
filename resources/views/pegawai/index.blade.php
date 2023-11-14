@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pegawai</h1>
    <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawais as $pegawai)
            <tr>
                <td>{{ $pegawai->id_pegawai }}</td>
                <td>{{ $pegawai->nama_pegawai }}</td>
                <td>{{ $pegawai->jabatan }}</td>
                <td>{{ $pegawai->jenis_kelamin }}</td>
                <td>{{ $pegawai->tempat_lahir }}</td>
                <td>{{ $pegawai->tanggal_lahir }}</td>
                <td>{{ $pegawai->telepon }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>
                    <a href="{{ route('pegawai.index', $pegawai->id_pegawai) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

               
