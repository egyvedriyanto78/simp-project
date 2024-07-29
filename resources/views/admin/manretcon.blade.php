@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Konfirmasi Pengembalian Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Manajemen</li>
                <li class="breadcrumb-item">Pengembalian Buku</li>
                <li class="breadcrumb-item active">Konfirmasi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Konfirmasi Pengembalian Buku</h3>
        <div class="container mb-3">
            <form action="{{ route('return.confirm') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="borrowCode" class="form-label">Kode Peminjaman</label>
                    <input type="text" class="form-control" id="borrowCode" name="borrowCode"
                        value="{{ $borrowing->borrowCode }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="bookId" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" id="bookId" name="bookId" value="{{ $borrowing->book->id }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" name="judul"
                        value="{{ $borrowing->book->judul }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="quantity" name="quantity"
                        value="{{ $borrowing->quantity }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="memberUid" class="form-label">UID Anggota</label>
                    <input type="text" class="form-control" id="memberUid" name="memberUid"
                        value="{{ $borrowing->member->uid }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $borrowing->member->nama }}"
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="borrowDate" class="form-label">Tanggal Peminjaman</label>
                    <input type="text" class="form-control" id="borrowDate" name="borrowDate"
                        value="{{ $borrowing->borrowDate }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="returnDate" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="returnDate" name="returnDate" required>
                </div>
                <button type="submit" class="btn btn-primary">Konfirmasi Pengembalian</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection