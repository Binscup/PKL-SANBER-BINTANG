@extends('layout-app')

@section('content')
    <div class="container">
        <div class="alert alert-info font-weight-bold  text-white " role="alert">
            <strong>Create</strong> Data pendidikan
        </div>
        <form action="{{ route('pendidikan.store') }}" method="POST" class="card mb-3 px-3 pt-4 pb-4">
            @csrf
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan nama anda</div>
            </div>
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Tingkat Pendidikan</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="tingkat_pendidikan" id="inputGroupSelect01" style="height: 50px">
                        <option>SD</option>
                        <option>SMP</option>
                        <option>SMA</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>

                </div>
                <div id="emailHelp" class="form-text">Pendidikan terakhir</div>
            </div>


            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Institusi</label>
                <input name="institusi" type="text" class="form-control" required>
                <div id="institusi" class="form-text">Nama Institusi</div>
            </div>


            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <input name="jurusan" type="text" class="form-control" required>
                <div id="jurusan" class="form-text">Jurusan Porgram Studi</div>
            </div>


            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Tahun Mulai</label>
                <input name="tahun_mulai" type="date" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan tanggal anda</div>
            </div>


            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Tahun Selesai</label>
                <input name="tahun_selesai" type="date" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan tanggal anda</div>
            </div>
            <button type="submit" class="btn btn-info bg-gradient-primary">Simpan</button>
        </form>
    </div>
@endsection
