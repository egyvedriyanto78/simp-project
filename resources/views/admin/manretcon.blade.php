@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Konfirmasi Pengembalian Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Manajemen</a></li>
                <li class="breadcrumb-item">Pengembalian Buku</a></li>
                <li class="breadcrumb-item active">Konfirmasi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Konfirmasi Pengembalian Buku</h3>
        <div class="container mb-3">
            <form id="borrowForm">
                <div class="mb-3">
                    <label for="borrowCode" class="form-label">Kode Peminjaman</label>
                    <input type="text" class="form-control" id="borrowCode" name="borrowCode" value="240718001" required
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="bookId" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" id="bookId" name="bookId" value="PAG001" required readonly>
                </div>
                <div class="mb-3">
                    <label for="memberUid" class="form-label">UID Anggota</label>
                    <input type="text" class="form-control" id="memberUid" name="memberUid" value="24010115" required readonly>
                </div>
                <div class="mb-3">
                    <label for="borrowDate" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="borrowDate" name="borrowDate" value="2024-07-18" required readonly>
                </div>
                <div class="mb-3">
                    <label for="returnDate" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="returnDate" name="returnDate" required>
                </div>
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection