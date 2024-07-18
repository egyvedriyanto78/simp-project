<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('admin.home');
// });

// Dashboard Route
Route::get('/dashboard', [AdminController::class, 'index']);

// Book Routes
Route::get('/book/list', [AdminController::class, 'list_book']);
Route::get('/book/table', [AdminController::class, 'table_book']);
Route::get('/book/table/edit', [AdminController::class, 'edit_book']);
Route::put('/book/table', [AdminController::class, 'update_book']);
Route::delete('/book/table', [AdminController::class, 'delete_book']);
Route::get('/book/table/create', [AdminController::class, 'create_book']);
Route::get('/book/table/store', [AdminController::class, 'store_book']);

// Manajemen Peminjaman Routes
Route::get('/management/borrow', [AdminController::class, 'borrow_management']);

// Manajemen Pengembalian Routes
Route::get('/management/return', [AdminController::class, 'return_management']);
Route::get('/management/return/confirmation', [AdminController::class, 'return_confirm']);

// Riwayat Peminjaman Routes
Route::get('/management/history', [AdminController::class, 'history_management']);

// Member Routes
Route::get('/member/list', [AdminController::class, 'list_member']);
Route::get('/member/table', [AdminController::class, 'table_member']);
Route::get('/member/table/edit', [AdminController::class, 'edit_member']);
Route::put('/member/table', [AdminController::class, 'update_member']);
Route::delete('/member/table', [AdminController::class, 'delete_member']);
Route::get('/member/table/create', [AdminController::class, 'create_member']);
Route::get('/member/table/store', [AdminController::class, 'store_member']);

// Lainnya
Route::get('/information/faq', [AdminController::class, 'faq']);
Route::get('/information/contact', [AdminController::class, 'contact']);