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
                    <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                        class="img-fluid rounded shadow book-cover" alt="Sampul Buku">
                </div>
                <!-- Book Details -->
                <div class="col-lg-8">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Judul:</strong>
                            <span>Pendidikan Agama Islam Kelas X</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>ID:</strong>
                            <span>PAG001</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Tahun Terbit:</strong>
                            <span>2023</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Kategori:</strong>
                            <span>Pendidikan Agama</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Stok:</strong>
                            <span>400</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Lokasi (Rak):</strong>
                            <span>D-1</span>
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