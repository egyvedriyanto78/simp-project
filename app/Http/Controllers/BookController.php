<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $data = [
            'title' => 'Perpustakaan | Katalog',
        ];
        return view('admin.booklist', ['books' => $books], $data);
    }

    public function show($id)
    {
        $book = Book::find($id);
        $data = [
            'title' => 'Perpustakaan | Detail Buku',
        ];
        return view('admin.detail', ['book' => $book], $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Perpustakaan | Tambah Buku',
        ];
        return view('admin.bookadd', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|string|unique:books',
            'judul' => 'required|string|max:255',
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // sampul tidak wajib, tapi jika diisi harus berupa gambar
            'tahun_terbit' => 'required|integer',
            'kategori' => 'required|string',
            'stok' => 'required|integer',
            'lokasi' => 'required|string',
        ]);

        if ($request->hasFile('sampul')) {
            $imageName = time() . '.' . $request->sampul->extension();
            $request->sampul->move(public_path('assets/img/book'), $imageName);
            $validatedData['sampul'] = 'assets/img/book/' . $imageName;
        }

        $book = new Book($validatedData);
        $book->save();

        return redirect('/book/list');
    }

    public function list()
    {
        $books = Book::all();
        $data = [
            'title' => 'Perpustakaan | Daftar Buku',
        ];
        return view('admin.bookedit', ['books' => $books], $data);
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $data = [
            'title' => 'Perpustakaan | Ubah Data',
        ];
        return view('admin.bookupdate', ['book' => $book], $data);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // sampul tidak wajib, tapi jika diisi harus berupa gambar
            'tahun_terbit' => 'required|integer',
            'kategori' => 'required|string',
            'stok' => 'required|integer',
            'lokasi' => 'required|string',
        ]);

        $book = Book::find($id);

        if ($request->hasFile('sampul')) {
            $imageName = time() . '.' . $request->sampul->extension();
            $request->sampul->move(public_path('assets/img/book'), $imageName);
            $validatedData['sampul'] = 'assets/img/book/' . $imageName;
        } else {
            unset($validatedData['sampul']);
        }

        $book->update($validatedData);

        return redirect('/book/table');
    }

    public function destroy($id)
    {
        $book = Book::find($id);

        // Hapus sampul jika ada
        if ($book->sampul && file_exists(public_path($book->sampul))) {
            unlink(public_path($book->sampul));
        }

        $book->delete();

        return redirect('/book/table');
    }
}
