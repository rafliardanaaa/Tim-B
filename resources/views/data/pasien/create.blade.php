@extends('sidebar')

@section('content')
<title>Data Pasien | Create</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Tambah Pasien</h6>
        <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
            <label for="nama_pasien" class="mb-2">Nama pasien</label>
            <input class="form-control mb-3" type="text" placeholder="Nama pasien" aria-label="default input example" name="nama_pasien" required>

            <label for="jenis_kelamin" class="mb-2">Jenis Kelamin</label>
            <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <label for="tempat_lahir" class="mb-2">Tempat Lahir</label>
            <input class="form-control mb-3" type="text" placeholder="Tempat Lahir" aria-label="default input example" name="tempat_lahir" required>

            <label for="tanggal_lahir" class="mb-2">Tanggal Lahir</label>
            <input class="form-control mb-3" type="date" placeholder="Tanggal Lahir" aria-label="default input example" name="tanggal_lahir" required>

            <label for="telepon" class="mb-2">Telepon</label>
            <input class="form-control mb-3" type="text" placeholder="Telepon" aria-label="default input example" name="telepon" required>

            <label for="alamat" class="mb-2">Alamat</label>
            <input class="form-control mb-3" type="text" placeholder="Alamat" aria-label="default input example" name="alamat" required>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
