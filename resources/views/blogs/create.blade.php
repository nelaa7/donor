@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-7">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Tambah Data Blog</h1>
            </div>
            <div>
                <a href="{{ route('blogs.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
                    @error('judul')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                        value="{{ old('thumbnail') }}">
                    @error('thumbnail')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
                    @error('category')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Konten</label>
                    <input name="body" class="form-control d-none" id="body" value="{{ old('body') }}">
                    <div id="editor" style="min-height: 160px;">
                        {!! old('body') !!}
                    </div>
                    @error('body')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="mt-4 btn px-3 btn-primary py-2 d-block">Tambah</button>
            </form>

        </div>
    </div>
</div>
@endsection

@push('script')
<script src="{{ asset('quilljs/quill.min.js') }}"></script>
<script>
    var quill = new Quill('#editor', {
      theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
      document.querySelector("input[name='body']").value = quill.root.innerHTML;
    });
</script>
@endpush