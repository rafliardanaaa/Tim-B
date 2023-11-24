@extends('sidebar')

@section('content')
<title>Data Dokter | Create</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Tambah Dokter</h6>
        <form action="{{ route('dokter.store') }}" method="POST">
        @csrf
            <label for="nama_dokter" class="mb-2">Nama Dokter</label>
            <input class="form-control mb-3" type="text" placeholder="Nama dokter" aria-label="default input example" name="nama_dokter" required>

            <label for="jenis_kelamin" class="mb-2">Jenis Kelamin</label>
            <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <label for="telepon" class="mb-2">Telepon</label>
            <input class="form-control mb-3" type="text" placeholder="Telepon" aria-label="default input example" name="telepon" required>

            <label for="alamat" class="mb-2">Alamat</label>
            <input class="form-control mb-3" type="text" placeholder="Alamat" aria-label="default input example" name="alamat" required>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
