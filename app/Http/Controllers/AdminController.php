<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Perpustakaan | Dasbor',
        ];
        return view('admin.home', $data);
    }

    // public function borrow_management()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Peminjaman',
    //     ];
    //     return view('admin.manborrow', $data);
    // }

    // public function return_management()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Pengembalian',
    //     ];
    //     return view('admin.manreturn', $data);
    // }

    // public function return_confirm()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Konfirmasi Pengembalian',
    //     ];
    //     return view('admin.manretcon', $data);
    // }

    // public function history_management()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Riwayat Peminjaman',
    //     ];
    //     return view('admin.history', $data);
    // }

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

}
