@extends('layout-app')
@section('content')
    <h3>Data Sertifikasi</h3>
    <a href="{{ route('user-management   .create') }}">
        <button type="button" class="btn bg-gradient-success mt-3 ">Create</button>
    </a>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gaji Pokok</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gaji Bersih</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">tanggal penerimaan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($gaji as $key => $value)
                        <tr>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $key + 1 }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $value->nama }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $value->gaji_pokok }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $value->gaji_bersih }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0">{{ $value->tanggal_penerimaan }}</p>
                            </td>
                            <td class="align-middle text-center">
                                <a href="/keluarga/{{ $value->id }}/edit" class="btn bg-gradient-warning mt-3 ">Edit</a>
                                <form action="{{ route('user-management   .destroy', $value->id) }}" method="post"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-gradient-danger mt-3 "
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        @empty
                        <tr>
                            <td class="text-xs text-secondary text-center font-weight-bold mb-0">Tidak Ada Data.</td>
                        </tr>
                        </tr>
                    @endforelse


                </tbody>
            @endsection
