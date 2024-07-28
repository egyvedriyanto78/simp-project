@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</li>
                <li class="breadcrumb-item">Katalog</li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Detail Buku</h3>

        <div class="container">
            <div class="row">
                <!-- Book Cover -->
                <div class="col-lg-4 text-center mb-3">
                    <img src="{{ $book->sampul ? asset($book->sampul) : asset('assets/img/book/puhsepuh.jpg') }}"
                        class="img-fluid rounded shadow book-cover" alt="Sampul Buku">
                </div>
                <!-- Book Details -->
                <div class="col-lg-8">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Judul:</strong>
                            <span>{{ $book->judul }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>ID:</strong>
                            <span>{{ $book->id }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Tahun Terbit:</strong>
                            <span>{{ $book->tahun_terbit }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Kategori:</strong>
                            <span>{{ $book->kategori }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Stok:</strong>
                            <span>{{ $book->stok }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Lokasi (Rak):</strong>
                            <span>{{ $book->lokasi }}</span>
                        </li>

                        <div class="row mt-4">
                            <div class="col-6 text-start">
                                <a href="{{ url('/book/list') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ url('/management/borrow') }}" class="btn btn-success">Pinjam Buku</a>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>


        </div>

    </section>

</main><!-- End #main -->

@endsection