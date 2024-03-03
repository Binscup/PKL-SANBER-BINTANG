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
              
                        <tr>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0"></p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0"></p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0"></p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0"></p>
                            </td>
                            <td>
                                <p class="text-xs text-center font-weight-bold mb-0"></p>
                            </td>
                            
                        </tr>
                  
                </tbody>
            @endsection
