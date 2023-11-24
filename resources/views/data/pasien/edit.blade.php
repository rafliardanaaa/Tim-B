@extends('sidebar')

@section('content')
<title>Data Pasien | Edit</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Tambah Pasien</h6>
        <form action="{{ route('pasien.update', $pasien->id_pasien) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nama_pasien">Nama pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ $pasien->nama_pasien }}">
        </div>
        <select name="jenis_kelamin" required>
            <option value="L" {{ $pasien->jenis_kelamin === 'L' ? 'selected' : '' }}>L</option>
            <option value="P" {{ $pasien->jenis_kelamin === 'P' ? 'selected' : '' }}>P</option>
        </select>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ $pasien->tempat_lahir }}">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pasien->tanggal_lahir }}">
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $pasien->telepon }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $pasien->alamat }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</div>
@endsection

