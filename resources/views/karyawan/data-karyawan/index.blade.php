@extends('layout-app')
@section('content')
    <h3>Data Karyawan</h3>
    <a href="{{ route('karyawan.create') }}">
        <button type="button" class="btn bg-gradient-success mt-3 ">Create</button>
    </a>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Jabatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telepon
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyawan as $karyawan)
                        <tr>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $karyawan->nama }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $karyawan->jabatan }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $karyawan->alamat }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $karyawan->telepon }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $karyawan->email }}</p>
                            </td>
                            <td class="align-middle text-center">
                                <a href="{{ route('karyawan.edit', $karyawan->id) }}"
                                    class="btn bg-gradient-warning mt-3 ">Edit</a>
                                <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="post"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-gradient-danger mt-3 "
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endsection
