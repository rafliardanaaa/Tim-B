@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('user.update', $user->id_user) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="id_pegawai_user">Pegawai</label>
            <select name="id_pegawai_user" class="form-control">
                @foreach($pegawais as $pegawai)
                    <option value="{{ $pegawai->id_pegawai }}" {{ $pegawai->id_pegawai == $user->id_pegawai_user ? 'selected' : '' }}>{{ $pegawai->nama_pegawai }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="user_name">User Name</label>
            <input type="text" name="user_name" class="form-control" value="{{ $user->user_name }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="{{ $user->password }}">
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <input type="text" name="level" class="form-control" value="{{ $user->level }}">
        </div>
        <div class="form-group">
            <label for="aktif">Aktif</label>
            <input type="text" name="aktif" class="form-control" value="{{ $user->aktif }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
