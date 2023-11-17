@extends('sidebar')

@section('content')
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Tambah Pegawai</h6>
        <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
            <label for="nama_pegawai" class="mb-2">Nama Pegawai</label>
            <input class="form-control mb-3" type="text" placeholder="Nama Pegawai" aria-label="default input example" name="nama_pegawai">

            <label for="jabatan" class="mb-2">Jabatan</label>
            <input type="text" name="jabatan" class="form-control mb-3" placeholder="Jabatan Pegawai" aria-label="default input example" name="jabatan">

            <label for="jenis_kelamin" class="mb-2">Jenis Kelamin</label>
            <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis_kelamin">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>

            <label for="tempat_lahir" class="mb-2">Tempat Lahir</label>
            <input class="form-control mb-3" type="text" placeholder="Tempat Lahir" aria-label="default input example" name="tempat_lahir">

            <label for="tanggal_lahir" class="mb-2">Tanggal Lahir</label>
            <input class="form-control mb-3" type="date" placeholder="Tanggal Lahir" aria-label="default input example" name="tanggal_lahir">

            <label for="telepon" class="mb-2">Telepon</label>
            <input class="form-control mb-3" type="text" placeholder="Telepon" aria-label="default input example" name="telepon">

            <label for="alamat" class="mb-2">Alamat</label>
            <input class="form-control mb-3" type="text" placeholder="Alamat" aria-label="default input example" name="alamat">

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
