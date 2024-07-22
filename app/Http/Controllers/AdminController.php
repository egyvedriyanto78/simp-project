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

    // public function list_book()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Katalog',
    //     ];
    //     return view('admin.booklist', $data);
    // }

    // public function detail_book()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Detail Buku',
    //     ];
    //     return view('admin.detail', $data);
    // }

    // public function table_book()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Daftar Buku',
    //     ];
    //     return view('admin.bookedit', $data);
    // }

    // public function edit_book()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Ubah Data',
    //     ];
    //     return view('admin.bookupdate', $data);
    // }

    // public function update_book()
    // {
    //     //
    // }

    // public function delete_book()
    // {
    //     //
    // }

    // public function create_book()
    // {
    //     $data = [
    //         'title' => 'Perpustakaan | Tambah Buku',
    //     ];
    //     return view('admin.bookadd', $data);
    // }

    // public function store_book()
    // {
    //     //
    // }

    public function borrow_management()
    {
        $data = [
            'title' => 'Perpustakaan | Peminjaman',
        ];
        return view('admin.manborrow', $data);
    }

    public function return_management()
    {
        $data = [
            'title' => 'Perpustakaan | Pengembalian',
        ];
        return view('admin.manreturn', $data);
    }

    public function return_confirm()
    {
        $data = [
            'title' => 'Perpustakaan | Konfirmasi Pengembalian',
        ];
        return view('admin.manretcon', $data);
    }

    public function history_management()
    {
        $data = [
            'title' => 'Perpustakaan | Riwayat Peminjaman',
        ];
        return view('admin.history', $data);
    }

    public function list_member()
    {
        $data = [
            'title' => 'Perpustakaan | Anggota',
        ];
        return view('admin.memberlist', $data);
    }

    public function table_member()
    {
        $data = [
            'title' => 'Perpustakaan | Daftar Anggota',
        ];
        return view('admin.memberedit', $data);
    }

    public function edit_member()
    {
        $data = [
            'title' => 'Perpustakaan | Ubah Data',
        ];
        return view('admin.memberupdate', $data);
    }

    public function update_member()
    {
        //
    }

    public function delete_member()
    {
        //
    }

    public function create_member()
    {
        $data = [
            'title' => 'Perpustakaan | Tambah Anggota',
        ];
        return view('admin.memberadd', $data);
    }

    public function store_member()
    {
        //
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

}
