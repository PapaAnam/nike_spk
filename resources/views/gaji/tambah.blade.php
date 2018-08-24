@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header">Silakan pilih karyawan dan periode penggajian</div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
                                    <select name="bulan" id="bulan" class="form-control">
                                        @foreach($bulan as $key => $b)
                                        <option @if(request()->query('bulan') == $key + 1 ) selected="selected" @endif value="{{ $key+1 }}">{{ $b }}</option>
                                        @endforeach
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <select name="tahun" id="tahun" class="form-control">
                                        @foreach($tahun as $key => $t)
                                        <option @if(request()->query('tahun') == $t) selected="selected" @endif value="{{ $t }}">{{ $t }}</option>
                                        @endforeach
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="karyawan">Karyawan</label>
                                    <select name="karyawan" id="karyawan" class="form-control">
                                        @foreach($karyawan as $key => $t)
                                        <option @if(request()->query('karyawan') == $t) selected="selected" @endif value="{{ $t->id }}">[{{ $t->nip }}] {{ $t->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-12">
                                <button onclick="gaji(event)" type="submit" class="btn btn-primary">Gaji</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if(count($errors->all()) > 0)
            <div class="alert alert-danger">
                GAGAL !!! Form tidak diisi dengan benar
            </div>
            @endif
            <div id="cek-gaji-view">
                @if(count($errors->all()) > 0)
                @include('gaji.cek')
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@include('import-jquery')

@push('script')
<script>
    function gaji(e){
        e.preventDefault();
        $('#cek-gaji-view').html('<div class="alert alert-info">Memproses</div>')
        var karyawan = $('#karyawan').val();
        var bulan = $('#bulan').val();
        var tahun = $('#tahun').val();
        $.ajax({
            url : '{{ url('/cek-gaji') }}?karyawan='+karyawan+'&bulan='+bulan+'&tahun='+tahun,
            success : function(response, status){
                $('#cek-gaji-view').html(response)
            }
        }); 
    }
</script>
@endpush