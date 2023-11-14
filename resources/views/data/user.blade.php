@extends('sidebar')

@section('content')

<div>
    <button type="button" name="tambah" class="btn btn-outline-info h-100 m-3 mt-5">
        Tambah
    </button>
</div>
<div class="bg-secondary rounded h-full p-4">
    <h6 class="mb-4">Table Admin</h6>
    <table class="table table-hover border-1">
        <thead class="text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Level</th>
                <th scope="col">Aktif</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center align-items-center">
            <tr>
                <th scope="row">1</th>
                <td>Irfan Cantik</td>
                <td>Suster</td>
                <td>Aktif</td>
                <td>
                    <a href=""><button type="button" class="btn btn-outline-warning m-1">Update</button></a>
                    <a href=""><button type="button" class="btn btn-outline-danger m-1">Hapus</button></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
