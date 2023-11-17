@extends('sidebar')

@section('content')
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Tambah Pegawai</h6>
        <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai</label>
            <input type="text" name="nama_pegawai" class="form-control" value="{{ $pegawai->nama_pegawai }}">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="{{ $pegawai->jabatan }}">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $pegawai->jenis_kelamin }}">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ $pegawai->tempat_lahir }}">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pegawai->tanggal_lahir }}">
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $pegawai->telepon }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $pegawai->alamat }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</div>
@endsection

