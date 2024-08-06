@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</a></li>
                <li class="breadcrumb-item active">Tambah Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Tambah Buku</h3>
        <div class="container mb-3">
            <form id="bookForm" action="{{ url('/book/table/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="bookTitle" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="bookTitle" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="bookCover" class="form-label">Sampul</label>
                    <input class="form-control" type="file" id="bookCover" name="sampul">
                </div>
                <div class="mb-3">
                    <label for="bookYear" class="form-label">Tahun Terbit</label>
                    <select class="form-select" id="bookYear" name="tahun_terbit" required>
                        <option selected disabled value="">Pilih Tahun</option>
                        <?php
                        for ($year = 1990; $year <= 2040; $year++) {
                            echo "<option value='{$year}'>{$year}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bookCategory" class="form-label">Kategori</label>
                    <select class="form-select" id="bookCategory" name="kategori" required>
                        <option selected disabled value="">Pilih Kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->kategori }}">{{ str_replace('_', ' ', $category->kategori) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bookStock" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="bookStock" name="stok" required>
                </div>
                <div class="mb-3">
                    <label for="bookLocation" class="form-label">Lokasi</label>
                    <select class="form-select" id="bookLocation" name="lokasi" required>
                        <option selected disabled value="">Pilih Lokasi</option>
                        <?php
                        $racks = range('A', 'T');
                        foreach ($racks as $rack) {
                            for ($i = 1; $i <= 4; $i++) {
                                echo "<option value='{$rack}{$i}'>Rak {$rack}{$i}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Buku</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection