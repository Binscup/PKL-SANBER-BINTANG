@extends('layout-app')

@section('content')
    <div class="container">
        <div class="alert alert-info font-weight-bold  text-white " role="alert">
            <strong>Create</strong> Data pendidikan
        </div>
        <form action="{{ route('pekerjaan.store') }}" method="POST" class="card mb-3 px-3 pt-4 pb-4">
            @csrf
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan nama anda</div>
            </div>

            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <input name="jabatan" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Jabatan di perusahaan</div>
            </div>

            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Peran</label>
                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="peran"></textarea>
                    <label for="floatingTextarea2" class="form-text text-secondary "></label>
                <div id="emailHelp" class="form-text">Peran di perusahaan</div>
                  </div>
            </div>
            <button type="submit" class="btn btn-info bg-gradient-primary">Simpan</button>
        </form>
    </div>
@endsection
