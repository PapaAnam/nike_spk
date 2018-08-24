@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Username</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (count($errors->all()) > 0)
                    <div class="alert alert-danger" role="alert">
                        GAGAL!!!
                    </div>
                    @endif

                    <form action="{{ route('update-username') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input required="required" id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ $errors->has('username') ? old('username') : Auth::user()->username }}" name="username" placeholder="Masukkan username">
                            @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
