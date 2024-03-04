@extends('layout-app')

@section('content')
    <div class="container">
        <div class="alert alert-info font-weight-bold  text-white " role="alert">
            <strong>Edit</strong> Data Sertifikasi
        </div>
        <form action="{{ route('sertifikasi.update', $sertifikasi->id ) }}" method="POST" class="card mb-3 px-3 pt-4 pb-4">
            @csrf
            @method('PUT')
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan Masukan Nama Anda</div>
            </div>

            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Jenis Sertifikasi</label>
                <input name="jenis_sertifikasi" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Jenis Sertifikasi Yang Anda Ikuta</div>
            </div>

            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Jenis Sertifikasi</label>
                <input name="sertifikasi" type="file" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan Kredinsial Sertifikasi Anda</div>
            </div>

         
            <button type="submit" class="btn btn-info bg-gradient-primary">Simpan</button>
        </form>
    </div>
@endsection
