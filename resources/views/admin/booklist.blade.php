@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Katalog</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</li>
                <li class="breadcrumb-item active">Katalog</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Kategori Buku</h3>

        <!-- Dynamically generate category buttons -->
        <div class="d-flex flex-wrap mb-3">
            @php
                $categories = $books->pluck('kategori')->unique()->sort();
            @endphp

            @foreach ($categories as $kategori)
                <button type="button" class="btn btn-outline-secondary me-2 mb-2"
                    onclick="document.getElementById('{{ strtolower(str_replace(' ', '', $kategori)) }}').scrollIntoView();">
                    {{ $kategori }}
                </button>
            @endforeach
        </div>

        <!-- Loop through categories dynamically -->
        @foreach ($categories as $kategori)
            <div class="container mb-3" id="{{ strtolower(str_replace(' ', '', $kategori)) }}">
                <h5>{{ $kategori }}</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach ($books->where('kategori', $kategori) as $book)
                        <div class="col">
                            <div class="card mb-3" style="width: 420px">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ $book->sampul ? asset($book->sampul) : asset('assets/img/book/puhsepuh.jpg') }}"
                                            class="img-fluid rounded-start" alt="Sampul Buku">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-header">{{ $book->judul }}</div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex">
                                                <div class="me-auto">ID</div>
                                                <div>{{ $book->id }}</div>
                                            </li>
                                            <li class="list-group-item d-flex">
                                                <div class="me-auto">Stok</div>
                                                <div>{{ $book->stok }}</div>
                                            </li>
                                            <li class="list-group-item d-flex">
                                                <div class="me-auto">Detail</div>
                                                <div>
                                                    <a href="{{ url('/book/list/detail/' . $book->id) }}">
                                                        <i class="bi bi-info-circle"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </section>

</main><!-- End #main -->

@endsection