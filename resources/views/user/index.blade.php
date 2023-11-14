@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar User</h1>
    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pegawai</th>
                <th>User Name</th>
                <th>Level</th>
                <th>Aktif</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id_user }}</td>
                <td>{{ $user->pegawai->nama_pegawai }}</td>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->level }}</td>
                <td>{{ $user->aktif }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id_user) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('user.destroy', $user->id_user) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
