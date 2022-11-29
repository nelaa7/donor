@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-8">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Detail Lokasi</h1>
            </div>
            <div>
                <a href="{{ route('locations.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>


        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-bordered table-sm">
                        <tr>
                            <td class="fw-bold">Nama Lokasi</td>
                            <td>{{ $location->nama_lokasi }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Alamat</td>
                            <td>{!! nl2br($location->alamat) !!}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal Dibuat</td>
                            <td>{{ $location->created_at }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal diedit</td>
                            <td>{{ $location->updated_at }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold"></td>
                            <td>
                                <div class="d-block">
                                    <a href="{{ route('locations.edit', $location->id) }}"
                                        class="badge text-bg-info">Edit</a>
                                    <form action="{{ route('locations.destroy', $location->id) }}" method="post"
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