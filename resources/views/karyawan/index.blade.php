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
            <a class="mb-2 btn btn-primary btn-sm" href="{{ route('karyawan.create') }}">Tambah Karyawan</a>
        </div>
        @php
        $i = 1;
        @endphp
        @foreach($data->split(2) as $data2)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Data Karyawan</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data2 as $d)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $d->nip }}</td>
                                <td>{{ $d->nama }}</td>
                                <td><a href="{{ route('edit-password', [$d->id]) }}" class="btn btn-sm btn-primary">Ubah Password</a></td>
                            </tr>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
