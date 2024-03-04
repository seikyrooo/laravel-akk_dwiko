@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-25 mt-5 rounded p-4 shadow-lg">
            <h1 class="text-center mb-5">Register</h1>
            <form action="{{ route('register.process') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="Input Nama">
                    @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input name="nis" type="number" class="form-control" id="nis" placeholder="Input NIS">
                        @error('nis') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Input Email">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Input Password">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mb-3 mt-3">Register</button>
                    <p class="text-center mb-0">Already have an Account? <a href="{{ route('login.index') }}"
                            class="text-decoration-none">Login</a></p>
                </form>
            </div>
        </div>
    @endsection
