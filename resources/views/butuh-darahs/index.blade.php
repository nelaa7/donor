@extends('layouts.dashboard')

@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Butuh Darah</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('butuh-darahs.create') }}" class="btn btn-sm btn-outline-primary">Tambah</a>
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
                <th scope="col">Subjek</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Berat Badan</th>
                <th scope="col">Golongan Darah</th>
                <th scope="col">Jumlah Darah</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($butuh_darahs as $butuh_darah)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $butuh_darah->subject }}</td>
                <td>
                    <span class="badge text-bg-primary">
                        @if ($butuh_darah->gender == 'L')
                        <a href="{{ route('butuh-darahs.index', ['gender' => 'L']) }}" class="text-white">Laki-Laki</a>
                        @else
                        <a href="{{ route('butuh-darahs.index', ['gender' => 'P']) }}" class="text-white">Perempuan</a>
                        @endif
                    </span>
                </td>
                <td>{{ $butuh_darah->berat_badan }} KG</td>
                <td>
                    <a href="{{ route('butuh-darahs.index', ['goldar' => $butuh_darah->golongan_darah]) }}">{{
                        $butuh_darah->golongan_darah }}</a>
                </td>
                <td>{{ $butuh_darah->jumlah_darah }}</td>
                <td>{{ $butuh_darah->created_at }}</td>
                <td>
                    <div class="d-block">
                        <a href="{{ route('butuh-darahs.edit', $butuh_darah->id) }}" class="badge text-bg-info">Edit</a>
                        <a href="{{ route('butuh-darahs.show', $butuh_darah->id) }}"
                            class="badge text-bg-dark">Detail</a>
                        <form action="{{ route('butuh-darahs.destroy', $butuh_darah->id) }}" method="post"
                            class="d-inline-block">
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
        {{ $butuh_darahs->links() }}
    </div>
</div>
@endsection