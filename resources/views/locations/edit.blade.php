@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-7">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Ubah Data Lokasi</h1>
            </div>
            <div>
                <a href="{{ route('locations.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form action="{{ route('locations.update', $location->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                        value="{{ old('nama_lokasi', $location->nama_lokasi) }}">
                    @error('nama_lokasi')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" cols="30"
                        rows="10">{{ old('alamat', $location->alamat) }}</textarea>
                    @error('alamat')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>


                <button type="submit" class="mt-4 btn px-3 btn-primary py-2 d-block">Edit</button>
            </form>

        </div>
    </div>
</div>
@endsection