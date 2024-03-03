@extends('layout-app')

@section('content')
    <div class="container">
        <div class="alert alert-info font-weight-bold  text-white " role="alert">
            <strong>Create</strong> Data Karyawan
            </div>
        <form action="{{ route('karyawan.store') }}" method="POST" class="card mb-3 px-3 pt-4 pb-4">
            @csrf
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan nama anda</div>
            </div>
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <input name="jabatan" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Jabatan Sekarang</div>
            </div>
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input name="alamat" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan alamat yang anda huni sekarang</div>
            </div>

            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">No telephone</label>
                <input name="telepon" type="number" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan nomor telephone anda</div>
            </div>
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan email anda</div>
            </div>
            <button type="submit" class="btn btn-info bg-gradient-primary">Simpan</button>
        </form>
    </div>
@endsection
