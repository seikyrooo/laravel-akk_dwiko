@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-25 mt-5 rounded p-4 shadow-lg">
            <h1 class="text-center mb-5">Login</h1>
            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input name="nis" type="number" class="form-control" id="nis" placeholder="Input NIS">
                    @error('nis') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Input Password">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-dark w-100 mb-3 mt-3">Login</button>
                <p class="text-center mb-0">Don't have an Account? <a href="{{ route('register.index') }}"
                        class="text-decoration-none">Register</a>
                </p>
            </form>
        </div>
    </div>
@endsection
