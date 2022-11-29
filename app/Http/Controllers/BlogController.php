<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index', [
            "title" => "Data Blog",
            "blogs" => Blog::filters(request(['q', 'category']))->paginate(5)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('blogs.create', [
            "title" => "Tambah Data Blog Baru",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'category' => "required|string|max:30",
            "thumbnail" => "required|image|file|max:5120",
            'body' => 'required|max:5000',
        ]);

        Blog::create(array_merge($validatedData, [
            "thumbnail" => $request->file('thumbnail')->store("blog-thumbnails"),
        ]));

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Data Blog baru berhasil ditambahkan.');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', [
            "title" => "Detail Data Blog",
            "blog" => $blog
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', [
            "title" => "Edit Data Blog",
            "blog" => $blog,
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'category' => "required|string|max:30",
            'body' => 'required|max:5000',
            "thumbnail" => "sometimes|required|image|file|max:5120|nullable",
        ]);

        $blog->update(array_merge($validatedData, [
            "thumbnail" => $this->uploadOrReturnDefault("thumbnail", $blog->thumbnail, 'blog-thumbnails'),
        ]));

        return redirect()->route('blogs.index')->with('success', 'Data Blog berhasil diubah.');
    }

    public function destroy(Blog $blog)
    {
        Storage::delete($blog->image);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Data Blog berhasil dihapus.');
    }
}
