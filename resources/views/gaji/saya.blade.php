@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="card mb-5">
                <div class="card-header">Pilih tahun</div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <select name="tahun" id="tahun" class="form-control">
                                        @foreach($tahun as $key => $t)
                                        <option @if(request()->query('tahun') == $t) selected="selected" @endif value="{{ $t }}">{{ $t }}</option>
                                        @endforeach
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Lihat</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if(request()->query('bulan') && request()->query('tahun'))
            <div class="alert alert-info">
                Menampilkan gaji pada tahun {{ request()->query('tahun') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Data Gaji Saya
                </div>
                <div class="card-body">
                    @if(count($data)>0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Bulan</th>
                                <th>Gaji Bersih</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nama_bulan }}</td>
                                <td>{{ number_format($d->jumlah_bersih, 0, ',', '.') }}</td>
                                <td>
                                    <a target="_blank" href="{{ route('slip', [$d->id]) }}" class="btn btn-sm btn-danger">Cetak Slip</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="alert alert-danger">
                        Tidak ada gaji
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
