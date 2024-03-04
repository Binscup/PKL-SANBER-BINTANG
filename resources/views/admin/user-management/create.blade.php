@extends('layout-app')

@section('content')
    <div class="container">
        <div class="alert alert-info font-weight-bold  text-white " role="alert">
            <strong>Create</strong> Data Sertifikasi
        </div>
        <form action="{{ route('user-management   .store') }}" method="POST" class="card mb-3 px-3 pt-4 pb-4">
            @csrf
            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" required>
                <div id="emailHelp" class="form-text">Masukan Masukan Nama Anda</div>
            </div>

            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Gaji pokok</label>
                <input name="gaji_pokok" type="number" class="form-control" required>
                <div id="emailHelp" class="form-text">Gaji Pokok Karyawan</div>
            </div>

            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Gaji Berish</label>
                <input name="gaji_bersih" type="number" class="form-control" required>
                <div id="emailHelp" class="form-text">Gaji Bersih Karywan</div>
            </div>

            <div class=" mb-3 ">
                <label for="exampleInputEmail1" class="form-label">tanggal penerimaan gaji</label>
                <input name="tanggal_penerimaan" type="date" class="form-control" required>
                <div id="emailHelp" class="form-text">Tanggal Penerima Gaji Karyawan</div>
            </div>

         
            <button type="submit" class="btn btn-info bg-gradient-primary">Simpan</button>
        </form>
    </div>
@endsection
