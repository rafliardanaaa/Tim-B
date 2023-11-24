@extends('sidebar')

@section('content')
<title>Data User | Create</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Tambah Pegawai</h6>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_pegawai_user">Pegawai</label>
            <select name="id_pegawai_user" class="form-control">
                @foreach($pegawais as $pegawai)
                    <option value="{{ $pegawai->id_pegawai }}">{{ $pegawai->nama_pegawai }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="user_name">User Name</label>
            <input type="text" name="user_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <input type="text" name="level" class="form-control">
        </div>
        <div class="form-group">
            <label for="aktif">Aktif</label>
            <input type="text" name="aktif" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</div>
@endsection
