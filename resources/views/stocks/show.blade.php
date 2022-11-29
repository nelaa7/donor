@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-8">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Detail Stok Darah</h1>
            </div>
            <div>
                <a href="{{ route('stocks.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>


        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-bordered table-sm">
                        <tr>
                            <td class="fw-bold">Jenis Transfusi</td>
                            <td>{{ $stock->jenis_transfusi }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Golongan Darah</td>
                            <td><span class="badge text-bg-primary">{{ $stock->golongan_darah }}</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Jumlah Stok</td>
                            <td><span class="badge text-bg-success">{{ $stock->jumlah_stok }} Stok Darah</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal Dibuat</td>
                            <td>{{ $stock->created_at }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal diedit</td>
                            <td>{{ $stock->updated_at }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold"></td>
                            <td>
                                <div class="d-block">
                                    <a href="{{ route('stocks.edit', $stock->id) }}" class="badge text-bg-info">Edit</a>
                                    <form action="{{ route('stocks.destroy', $stock->id) }}" method="post"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="badge text-bg-danger border-0">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection