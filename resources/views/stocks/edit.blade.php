@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-7">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Ubah Data Stok Darah</h1>
            </div>
            <div>
                <a href="{{ route('stocks.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form action="{{ route('stocks.update', $stock->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="jenis_transfusi" class="form-label">Jenis Transfusi</label>
                    <input type="text" class="form-control" id="jenis_transfusi" name="jenis_transfusi"
                        value="{{ old('jenis_transfusi', $stock->jenis_transfusi) }}">
                    @error('jenis_transfusi')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="golongan_darah" class="form-label">Golongan Darah</label>
                    <input type="text" class="form-control" id="golongan_darah" name="golongan_darah"
                        value="{{ old('golongan_darah', $stock->golongan_darah) }}">
                    @error('golongan_darah')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                    <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok"
                        value="{{ old('jumlah_stok', $stock->jumlah_stok) }}">
                    @error('jumlah_stok')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>


                <button type="submit" class="mt-4 btn px-3 btn-primary py-2 d-block">Edit</button>
            </form>

        </div>
    </div>
</div>
@endsection