@extends('layout-app')
@section('content')
    <div class="container">
        <div class="alert alert-info font-weight-bold  text-white " role="alert">
            <strong>Edit</strong> Data Keluarga
        </div>
        <form action="{{ route('keluarga.update', $keluarga->id) }}" method="POST" class="card mb-3 px-3 pt-4 pb-4">
            @csrf
            @method('PUT')
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan nama anda</div>
            </div>
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="jenis_kelamin" id="inputGroupSelect01" style="height: 50px"
                        name="jenis_kelamin">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>

                </div>
                <div id="emailHelp" class="form-text">Masukan gender anda</div>
            </div>
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">status</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="status" id="inputGroupSelect01" style="height: 50px">
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Janda">Janda</option>
                        <option value="Duda">Duda</option>
                    </select>

                </div>
                <div id="emailHelp" class="form-text">Masukan gender anda</div>
            </div>
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Tangggal lahir</label>
                <input name="tanggal_lahir" type="date" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan tanggal anda</div>
            </div>
            <button type="submit" class="btn btn-info bg-gradient-primary">Simpan</button>
        </form>
    </div>
@endsection
