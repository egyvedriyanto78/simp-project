<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Book::where('judul', 'LIKE', "%{$query}%")
            ->orWhere('kategori', 'LIKE', "%{$query}%")
            ->get();

        // Mengembalikan hasil dalam format JSON
        return response()->json(['results' => $results]);
    }
}


