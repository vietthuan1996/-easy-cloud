@extends('layouts.app')
@section('content')
    <div class="container login mt-5 mb-5">
        <div class="row">
            <h3>Reset password</h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="col-12 col-sm-6 mt-5" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="input-group input-group-lg mb-4{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required aria-label="Large" placeholder="Email" aria-describedby="inputGroup-sizing-sm">
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>
                <div class="text-right mt-5 mb-5">
                    <button type="submit" class="btn btn-red btn-block">Send Password Reset Link</button>
                </div>
            </form>
        </div>
    </div>
@endsection