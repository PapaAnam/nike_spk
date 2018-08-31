@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header">Silakan pilih periode dan unggah excel penggajian</div>
                <div class="card-body">
                    <form action="{{ route('impor-excel.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
                                    <select name="bulan" id="bulan" class="form-control">
                                        @foreach($bulan as $key => $b)
                                        <option @if(request()->query('bulan') == $key + 1 ) selected="selected" @endif value="{{ $key+1 }}">{{ $b }}</option>
                                        @endforeach
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <select name="tahun" id="tahun" class="form-control">
                                        @foreach($tahun as $key => $t)
                                        <option @if(request()->query('tahun') == $t) selected="selected" @endif value="{{ $t }}">{{ $t }}</option>
                                        @endforeach
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="excel">Berkas Excel</label>
                                    <input accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel" name="excel" id="excel" class="form-control{{ $errors->has('excel') ? ' is-invalid' : '' }}" type="file"> 
                                    @if ($errors->has('excel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('excel') }}</strong>
                                    </span>
                                @endif
                                </div>  
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kalimat_bijak">Kalimat Bijak</label>
                                    <textarea name="kalimat_bijak" id="kalimat_bijak" class="form-control{{ $errors->has('kalimat_bijak') ? ' is-invalid' : '' }}">{{ old('kalimat_bijak') }}</textarea>
                                    @if ($errors->has('kalimat_bijak'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kalimat_bijak') }}</strong>
                                    </span>
                                @endif
                                </div>  
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-info">Contoh template impor excel bisa diunduh <a href="{{ asset('contoh-template.xlsx') }}">disini</a></div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Impor</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @include('import-jquery') --}}