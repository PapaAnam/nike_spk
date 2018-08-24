@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data2 as $d)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $d->nip }}</td>
                                <td>{{ $d->nama }}</td>
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
