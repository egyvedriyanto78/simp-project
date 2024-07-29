@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Peminjaman Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Manajemen</li>
                <li class="breadcrumb-item active">Pinjam Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Formulir Peminjaman Buku</h3>
        <div class="container mb-3">
            <form id="borrowForm" method="POST" action="{{ route('borrow.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="bookId" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" id="bookId" name="bookId" required>
                </div>
                <div class="mb-3">
                    <label for="memberUid" class="form-label">UID Anggota</label>
                    <input type="text" class="form-control" id="memberUid" name="memberUid" required>
                </div>
                <div class="mb-3">
                    <label for="borrowDate" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="borrowDate" name="borrowDate" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Jumlah Buku</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
                <div class="mb-3">
                    <label for="returnDate" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="returnDate" name="returnDate" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection