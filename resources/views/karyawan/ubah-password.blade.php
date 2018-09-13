@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Password</div>

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

                    <form action="{{ route('perbarui-password', [$d->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input required="required" id="username" type="text" readonly="readonly" class="form-control" value="{{ $d->username }}" name="username" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input required="required" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" name="password" placeholder="Masukkan password">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
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
