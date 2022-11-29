@extends('layouts.dashboard')

@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Blog</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-outline-primary">Tambah</a>
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
                <th scope="col">Thumbnail</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('storage/'.$blog->thumbnail) }}" alt="Thumbnail Blog" width="100">
                </td>
                <td>{{ $blog->judul }}</td>
                <td>
                    <a href="{{ route('blogs.index', ['category' => $blog->category]) }}"
                        class="badge text-bg-primary">{{ $blog->category }}</a>
                </td>
                <td>{{ $blog->created_at }}</td>
                <td>
                    <div class="d-block">
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="badge text-bg-info">Edit</a>
                        <a href="{{ route('blogs.show', $blog->id) }}" class="badge text-bg-dark">Detail</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="post" class="d-inline-block">
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
        {{ $blogs->links() }}
    </div>
</div>
@endsection