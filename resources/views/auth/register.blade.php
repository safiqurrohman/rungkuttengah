@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background-color: rgb(195, 195, 195);">
    <div class="p-4" style="width: 300px">
        <div class="text-center w-100">
            <div class="card-img">
                <img src="{{ asset('assets/img/unnamed.png') }}" alt="logo temprina" class="img-fluid" style="width: 160px">
            </div>
            <p>Human Machine Interface</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3  text-start">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3  text-start">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3  text-start">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3 text-start">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ulangi Password" required autocomplete="new-password">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn text-white w-100" style="background-color: black;">
                        {{ __('Sign Up') }}
                    </button>
                </div>
                <div class="mt-3">Sudah memiliki punya akun?
                    @if (Route::has('password.request'))
                    <a class="text-decoration-none fw-semibold" href="{{ route('login') }}" style="color:rgb(16, 98, 192);">Login</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection