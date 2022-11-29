@extends('layouts.dashboard')

@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Stok Darah</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('stocks.create') }}" class="btn btn-sm btn-outline-primary">Tambah</a>
        </div>
    </div>
</div>

<div class="my-3">
    <form action="" method="get">
        <label for="q" class="form-label">Cari</label>
        <input type="text" class="form-control" id="q" name="q" value="{{ request('q') }}">
    </form>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jenis Transfusi</th>
                <th scope="col">Golongan Darah</th>
                <th scope="col">Jumlah Stok</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stocks as $stock)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stock->jenis_transfusi }}</td>
                <td>{{ $stock->golongan_darah }}</td>
                <td>{{ $stock->jumlah_stok }}</td>
                <td>
                    <div class="d-block">
                        <a href="{{ route('stocks.edit', $stock->id) }}" class="badge text-bg-info">Edit</a>
                        <a href="{{ route('stocks.show', $stock->id) }}" class="badge text-bg-dark">Detail</a>
                        <form action="{{ route('stocks.destroy', $stock->id) }}" method="post" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="badge text-bg-danger border-0">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="py-3">
        {{ $stocks->links() }}
    </div>
</div>
@endsection