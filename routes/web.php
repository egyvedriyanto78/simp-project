<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BorrowController;

// Dashboard Route
Route::get('/dashboard', [AdminController::class, 'index']);

// Book Routes
Route::get('/book/list', [BookController::class, 'index']);
Route::get('/book/list/detail/{id}', [BookController::class, 'show']);
Route::get('/book/table', [BookController::class, 'list']);
Route::get('/book/table/edit/{id}', [BookController::class, 'edit']);
Route::put('/book/table/{id}', [BookController::class, 'update']);
Route::delete('/book/table/{id}', [BookController::class, 'destroy']);
Route::get('/book/table/create', [BookController::class, 'create']);
Route::post('/book/table/store', [BookController::class, 'store']);

// Manajemen Peminjaman Routes
Route::get('/management/borrow', [BorrowController::class, 'borrow_management'])->name('borrow_management');
Route::post('/management/borrow', [BorrowController::class, 'borrow'])->name('borrow.store');

// Manajemen Pengembalian Routes
Route::get('/management/return', [BorrowController::class, 'return_management'])->name('management.return');
Route::get('/management/return/confirmation/{borrowCode}', [BorrowController::class, 'return_confirm'])->name('return.confirmation');
Route::post('/management/return/confirmation', [BorrowController::class, 'confirm_return'])->name('return.confirm');

// Riwayat Peminjaman Routes
Route::get('/management/history', [BorrowController::class, 'history_management'])->name('management.history');
Route::post('/borrowings/update-status/{borrowCode}', [BorrowController::class, 'updateStatus'])->name('management.updateStatus');

// Member Routes
Route::get('/member/list', [MemberController::class, 'index']);
Route::get('/member/list/detail/{uid}', [MemberController::class, 'show']);
Route::get('/member/table', [MemberController::class, 'list']);
Route::get('/member/table/edit/{uid}', [MemberController::class, 'edit']);
Route::put('/member/table/{uid}', [MemberController::class, 'update']);
Route::delete('/member/table/{uid}', [MemberController::class, 'destroy']);
Route::get('/member/table/create', [MemberController::class, 'create']);
Route::post('/member/table/store', [MemberController::class, 'store']);

// Lainnya
Route::get('/information/faq', [AdminController::class, 'faq']);
Route::get('/information/contact', [AdminController::class, 'contact']);

// Profile
Route::get('/profile', [AdminController::class, 'profile']);

// Auth
Route::get('/', [AdminController::class, 'login']);
Route::get('/register', [AdminController::class, 'register']);