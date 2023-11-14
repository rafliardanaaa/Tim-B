@extends('sidebar')

@section('content')

<div>
    <button type="button" name="tambah" class="btn btn-outline-info h-100 m-3 mt-5">
        Tambah
    </button>
</div>
<div class="bg-secondary rounded h-100 p-4">
    <h6 class="mb-4">Responsive Table</h6>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">No Telephone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center align-items-center">
                <tr>
                    <th scope="row">1</th>
                    <td>Irfan Cantik</td>
                    <td>Suster</td>
                    <td>L</td>
                    <td>Bogor</td>
                    <td>12-21-2020</td>
                    <td>087877364101</td>
                    <td>Griya</td>
                    <td>
                        <a href=""><button type="button" class="btn btn-outline-warning m-1">Update</button></a>
                        <a href=""><button type="button" class="btn btn-outline-danger m-1">Hapus</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
