@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-8">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Detail Blog</h1>
            </div>
            <div>
                <a href="{{ route('blogs.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>


        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="col mb-4">
                    <div class="mb-4">
                        <img src="{{ asset('storage/'.$blog->thumbnail) }}" alt="Thumbnail Blog"
                            class="img-thumbnail d-block">
                    </div>

                    <h1 class="mb-2">{{ $blog->judul }}</h1>

                    <div>
                        <span class="badge text-bg-primary">{{ $blog->category }}</span>
                        <span class="badge text-bg-warning">Dibuat pada: {{ $blog->created_at }}</span>
                        <span class="badge text-bg-success">Diubah pada: {{ $blog->updated_at }}</span>
                    </div>

                    <div class="py-3">
                        {!! $blog->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection