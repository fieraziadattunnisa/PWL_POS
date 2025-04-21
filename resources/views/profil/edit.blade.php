@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow-lg mx-auto" style="max-width: 500px; border-radius: 20px;">
        <h4 class="mb-4 text-center">Edit Foto Profil</h4>

        <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Tampilkan Foto Sekarang --}}
            <div class="text-center mb-3">
                <img src="{{ $profil && $profil->foto ? asset('storage/foto/' . $profil->foto) : asset('storage/foto/default.png') }}"
                    class="rounded-circle"
                    style="width: 180px; height: 180px; object-fit: cover; border: 3px solid #ccc;">
            </div>

            {{-- Input Upload Foto --}}
            <div class="mb-3">
                <label for="foto" class="form-label">Unggah Foto Baru</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                @error('foto')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Tombol Simpan --}}
            <div class="d-flex justify-content-center gap-2">
                <button type="submit" class="btn btn-success px-4">Simpan</button>
                <a href="{{ route('profil.index') }}" class="btn btn-secondary px-4">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
