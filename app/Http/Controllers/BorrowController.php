<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Support\Str;

class BorrowController extends Controller
{
    public function borrow_management()
    {
        $data = [
            'title' => 'Perpustakaan | Peminjaman',
        ];
        return view('admin.manborrow', $data);
    }

    public function borrow(Request $request)
    {
        $request->validate([
            'bookId' => 'required|exists:books,id',
            'memberUid' => 'required|exists:members,uid',
            'borrowDate' => 'required|date',
            'quantity' => 'required|integer|min:1',
        ]);

        $book = Book::find($request->bookId);
        if ($book->stok < $request->quantity) {
            return back()->withErrors(['Stok buku tidak mencukupi.']);
        }

        $borrowCode = strtoupper(Str::random(8));
        Borrowing::create([
            'borrowCode' => $borrowCode,
            'bookId' => $request->bookId,
            'memberUid' => $request->memberUid,
            'borrowDate' => $request->borrowDate,
            'quantity' => $request->quantity,
        ]);

        $book->decrement('stok', $request->quantity);

        return redirect()->route('management.return');
    }

    public function return_management()
    {
        $borrowings = Borrowing::with('book', 'member')
            ->whereNull('returnDate')
            ->orderBy('borrowDate', 'asc')
            ->get();

        $data = [
            'title' => 'Perpustakaan | Pengembalian',
            'borrowings' => $borrowings,
        ];

        return view('admin.manreturn', $data);
    }

    public function return_confirm($borrowCode)
    {
        $borrowing = Borrowing::find($borrowCode);
        if (!$borrowing) {
            return redirect()->route('management.return')->withErrors(['Data peminjaman tidak ditemukan.']);
        }

        $data = [
            'title' => 'Perpustakaan | Konfirmasi Pengembalian',
            'borrowing' => $borrowing,
        ];
        return view('admin.manretcon', $data);
    }

    public function confirm_return(Request $request)
    {
        $request->validate([
            'borrowCode' => 'required|exists:borrowings,borrowCode',
            'returnDate' => 'required|date',
        ]);

        $borrowing = Borrowing::find($request->borrowCode);
        $borrowing->update(['returnDate' => $request->returnDate]);

        $book = Book::find($borrowing->bookId);
        $book->increment('stok', $borrowing->quantity);

        // Hitung denda jika ada
        $borrowDate = new \DateTime($borrowing->borrowDate);
        $returnDate = new \DateTime($request->returnDate);
        $interval = $borrowDate->diff($returnDate);
        $daysLate = $interval->days - 7; // Asumsi 7 hari adalah batas waktu peminjaman
        $fine = max(0, $daysLate) * 1000;

        // Simpan denda pada model Borrowing
        $borrowing->fine = $fine;
        $borrowing->save();

        return redirect()->route('management.history')->with('fine', $fine);
    }


    public function updateStatus($borrowCode)
    {
        $borrowing = Borrowing::where('borrowCode', $borrowCode)->first();
        if (!$borrowing) {
            return redirect()->route('management.history')->withErrors(['Data peminjaman tidak ditemukan.']);
        }

        $borrowing->status = 'Lunas';
        $borrowing->save();

        return redirect()->route('management.history')->with('success', 'Status pembayaran berhasil diperbarui.');
    }

    public function history_management()
    {
        $borrowings = Borrowing::with('book', 'member')
            ->orderBy('borrowDate', 'desc')
            ->get();

        $data = [
            'title' => 'Perpustakaan | Riwayat Peminjaman',
            'borrowings' => $borrowings,
        ];
        return view('admin.history', $data);
    }
}
