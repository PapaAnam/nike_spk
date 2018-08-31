@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(session('success_msg'))
        <div class="col-md-12">
            <div class="alert alert-success">{{ session('success_msg') }}</div>
        </div>
        @endif
        <div class="col-md-12">
            {{-- <a class="mb-2 btn btn-primary btn-sm" href="{{ route('karyawan.create') }}">Tambah Karyawan</a> --}}
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kalimat Bijak</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Kalimat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d['bulan'] }}</td>
                                <td>{{ $d['tahun'] }}</td>
                                <td>{{ $d['kalimat_bijak'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
