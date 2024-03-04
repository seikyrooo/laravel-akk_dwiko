@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-25 my-5 rounded p-4 shadow-lg">
            <h2 class="text-center mb-5">Create Album</h2>
            <form action="{{ route('album.create_album_post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_album" class="form-label">Name</label>
                    <input type="text" class="form-control" name="nama_album" id="nama_album" placeholder="Album Name">
                    @error('nama_album')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Description</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="10"></textarea>
                    @error('deskripsi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <button type="submit" class="btn btn-primary w-100">Confirm</button>
                </div>

            </form>
        </div>
    </div>
@endsection
