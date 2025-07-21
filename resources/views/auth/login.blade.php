@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background-color: rgb(195, 195, 195);">
    <div class="p-4" style="width: 300px">
        <div class="text-center w-100">
            <div class="card-img">
                <img src="{{ asset('assets/img/kelurahan/logosurabaya.png') }}" alt="logo temprina" class="img-fluid" style="width: 40px">
            </div>
            <p>Selamat Datang Admin Rungkut Tengah</p>

            <!-- Wrapper untuk swipe -->
            <div class="position-relative overflow-hidden" style="width: 100%; height: 250px;">
                <div id="loginForms" class="d-flex transition" style="width: 200%; transform: translateX(0);">
                    
                    <!-- Form Login Admin -->
                    <div class="w-50">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 text-start border-1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 text-start">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>      
                            <button type="submit" class="btn w-100 btn-dark" style="border-radius: 5px;">Login</button>
                        </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk Animasi Swipe -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#operatorBtn").click(function () {
            $("#loginForms").css("transform", "translateX(-50%)");
            $("#operatorBtn").removeClass("btn-light").addClass("btn-dark text-white");
            $("#adminBtn").removeClass("btn-dark text-white").addClass("btn-light");
        });

        $("#adminBtn").click(function () {
            $("#loginForms").css("transform", "translateX(0)");
            $("#adminBtn").removeClass("btn-light").addClass("btn-dark text-white");
            $("#operatorBtn").removeClass("btn-dark text-white").addClass("btn-light");
        });
    });
</script>
@endsection
