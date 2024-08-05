<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Perpustakaan | Katalog',
            'books' => Book::all(),
        ];
        return view('admin.booklist', $data);
    }

    public function show($id)
    {
        $data = [
            'title' => 'Perpustakaan | Detail Buku',
            'book' => Book::find($id),
        ];
        return view('admin.detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Perpustakaan | Tambah Buku',
            'categories' => Category::all(),
        ];
        return view('admin.bookadd', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|string|unique:books',
            'judul' => 'required|string|max:255',
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tahun_terbit' => 'required|integer',
            'kategori' => 'required|string',
            'stok' => 'required|integer',
            'lokasi' => 'required|string',
        ]);

        if ($request->hasFile('sampul')) {
            $imageName = time() . '.' . $request->sampul->extension();
            //$request->sampul->move(public_path('assets/img/book'), $imageName);
            $request->file('sampul')->storeAs('public/book', $imageName);
            $validatedData['sampul'] = 'storage/book/' . $imageName;
        }

        $book = new Book($validatedData);
        $book->save();

        return redirect('/book/list');
    }

    public function list()
    {
        $data = [
            'title' => 'Perpustakaan | Daftar Buku',
            'books' => Book::all(),
        ];
        return view('admin.bookedit', $data);
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $data = [
            'title' => 'Perpustakaan | Ubah Data',
            'book' => $book,
            'categories' => Category::all(),
        ];
        return view('admin.bookupdate', $data);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tahun_terbit' => 'required|integer',
            'kategori' => 'required|string',
            'stok' => 'required|integer',
            'lokasi' => 'required|string',
        ]);

        $book = Book::find($id);

        if ($request->hasFile('sampul')) {
            // Hapus sampul lama jika ada
            if ($book->sampul && file_exists(storage_path('app/public/' . str_replace('storage/', '', $book->sampul)))) {
                unlink(storage_path('app/public/' . str_replace('storage/', '', $book->sampul)));
            }

            // Simpan sampul baru
            $imageName = time() . '.' . $request->sampul->extension();
            //$request->sampul->move(public_path('assets/img/book'), $imageName);
            $request->file('sampul')->storeAs('public/book', $imageName);
            $validatedData['sampul'] = 'storage/book/' . $imageName;
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
        if ($book->sampul && file_exists(storage_path('app/public/' . str_replace('storage/', '', $book->sampul)))) {
            unlink(storage_path('app/public/' . str_replace('storage/', '', $book->sampul)));
        }

        //$book->delete();

        // Hapus sampul dari public path jika ada
        //if ($book->sampul && file_exists(public_path($book->sampul))) {
        //    unlink(public_path($book->sampul));
        //}

        $book->delete();

        return redirect('/book/table');
    }
}
