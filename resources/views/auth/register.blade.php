@extends('layouts.auth')

@section('content')
<div class="row m-0">
    <div class="col-md-6 mx-auto bg-white p-5">
        <h3 class="pb-3">Registrasi Form</h3>
        <form action="{{ route('auth.register') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com"
                    value="{{ old('name') }}">
                <label for="floatingInput">Nama</label>
                @error('name')
                <small class="text-danger mt-2 d-block fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                    value="{{ old('email') }}">
                <label for="floatingInput">Email</label>
                @error('email')
                <small class="text-danger mt-2 d-block fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <small class="text-danger mt-2 d-block fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password_confirmation"
                    placeholder="Password_confirmation">
                <label for="floatingPassword_confirmation">Ulangi Password</label>
                @error('password_confirmation')
                <small class="text-danger mt-2 d-block fw-bold">{{ $message }}</small>
                @enderror
            </div>
            <div class="mt-4">
                <button class="w-100 btn btn-primary py-2 d-block">Daftar</button>
            </div>
            <div class="mt-3 w-100">
                <a class="btn btn-light border w-100" href="{{ route('auth.login') }}">Login disini!</a>
            </div>
        </form>
    </div>
</div>
@endsection