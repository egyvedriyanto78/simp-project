<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $totalBooks = DB::table('books')->count();
        $totalMembers = DB::table('members')->count();
        $totalBorrowings = DB::table('borrowings')->count();
        $totalFines = DB::table('borrowings')->sum('fine');

        // Statistik peminjaman buku per tanggal, diurutkan dari tanggal paling lama ke paling terbaru
        $borrowingsByDate = DB::table('borrowings')
            ->select(DB::raw('DATE(borrowDate) as date'), DB::raw('count(*) as total'))
            ->groupBy('date')
            ->orderBy('date') // Urutkan berdasarkan tanggal
            ->get();

        // Jumlah buku per kategori
        $booksByCategory = DB::table('books')
            ->select('kategori', DB::raw('count(*) as total'))
            ->groupBy('kategori')
            ->get();

        // Statistik anggota berdasarkan jenis kelamin
        $memberGenderCounts = DB::table('members')
            ->select('jenis_kelamin', DB::raw('count(*) as total'))
            ->groupBy('jenis_kelamin')
            ->get();

        // Top buku yang paling sering dipinjam
        $topBorrowedBooks = DB::table('borrowings')
            ->join('books', 'borrowings.bookId', '=', 'books.id')
            ->select('books.judul', 'books.sampul', DB::raw('count(borrowings.bookId) as borrow_count'))
            ->groupBy('borrowings.bookId', 'books.judul', 'books.sampul')
            ->orderByDesc('borrow_count')
            ->limit(5)
            ->get();

        // Recently Added Books
        $recentBooks = DB::table('books')
            ->select('id', 'judul', 'kategori')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // Recent Member Activity
        $recentActivities = DB::table('borrowings')
            ->join('books', 'borrowings.bookId', '=', 'books.id')
            ->join('members', 'borrowings.memberUId', '=', 'members.uid')
            ->select('books.judul', 'members.nama', 'borrowings.borrowDate')
            ->orderBy('borrowings.borrowDate', 'desc')
            ->limit(5)
            ->get();

        // Top Anggota yang Paling Aktif
        $topActiveMembers = DB::table('borrowings')
            ->join('members', 'borrowings.memberUId', '=', 'members.uid')
            ->select('members.uid', 'members.nama', DB::raw('count(borrowings.memberUId) as borrow_count'))
            ->groupBy('borrowings.memberUId', 'members.uid', 'members.nama')
            ->orderByDesc('borrow_count')
            ->limit(5)
            ->get()
            ->map(function ($member) {
                $member->displayName = $member->nama . " (" . $member->uid . ")";
                return $member;
            });

        $data = [
            'title' => 'Perpustakaan | Dasbor',
            'totalBooks' => $totalBooks,
            'totalMembers' => $totalMembers,
            'totalBorrowings' => $totalBorrowings,
            'totalFines' => $totalFines,
            'borrowingsByDate' => $borrowingsByDate,
            'booksByCategory' => $booksByCategory,
            'memberGenderCounts' => $memberGenderCounts,
            'topBorrowedBooks' => $topBorrowedBooks,
            'recentBooks' => $recentBooks,
            'recentActivities' => $recentActivities,
            'topActiveMembers' => $topActiveMembers,
        ];

        return view('admin.home', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'Perpustakaan | F.A.Q',
        ];
        return view('admin.faq', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Perpustakaan | Kontak',
        ];
        return view('admin.contact', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Perpustakaan | Profil',
        ];
        return view('admin.profile', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Perpustakaan | Login',
        ];
        return view('admin.auth.login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Perpustakaan | Register',
        ];
        return view('admin.auth.register', $data);
    }

}
