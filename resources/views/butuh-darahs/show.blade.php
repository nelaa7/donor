@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-8">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Detail Butuh Darah</h1>
            </div>
            <div>
                <a href="{{ route('butuh-darahs.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>


        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="col mb-4">
                    <table class="table table-striped table-bordered table-sm">
                        <tr>
                            <td class="fw-bold">Subjek</td>
                            <td>{{ $butuh_darah->subject }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Golongan Darah</td>
                            <td><span class="badge text-bg-primary">{{ $butuh_darah->golongan_darah }}</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Jumlah Darah</td>
                            <td><span class="badge text-bg-success">{{ $butuh_darah->jumlah_darah }}</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Berat Badan</td>
                            <td>{{ $butuh_darah->berat_badan }} KG</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Jenis Kelamin</td>
                            <td><span class="badge text-bg-primary">
                                    @if ($butuh_darah->gender == 'L')
                                    Laki-Laki
                                    @else
                                    Perempuan
                                    @endif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Alamat</td>
                            <td>{!! nl2br($butuh_darah->alamat) !!}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">No. Telepon</td>
                            <td>{{ $butuh_darah->no_telp }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal Koleksi</td>
                            <td>{{ $butuh_darah->tanggal_koleksi }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal Dibuat</td>
                            <td>{{ $butuh_darah->created_at }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal diedit</td>
                            <td>{{ $butuh_darah->updated_at }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold"></td>
                            <td>
                                <div class="d-block">
                                    <a href="{{ route('butuh-darahs.edit', $butuh_darah->id) }}"
                                        class="badge text-bg-info">Edit</a>
                                    <form action="{{ route('butuh-darahs.destroy', $butuh_darah->id) }}" method="post"
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