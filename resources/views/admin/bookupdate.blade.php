@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ubah Data Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</a></li>
                <li class="breadcrumb-item">Daftar Buku</a></li>
                <li class="breadcrumb-item active">Ubah Data Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Ubah Data Buku</h3>
        <div class="container mb-3">
            <form id="bookForm" action="{{ url('/book/table/' . $book->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="bookTitle" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="bookTitle" name="judul" value="{{ $book->judul }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="bookCover" class="form-label">Sampul</label>
                    <input class="form-control" type="file" id="bookCover" name="sampul" value="{{ $book->sampul }}">
                </div>
                <div class="mb-3">
                    <label for="bookYear" class="form-label">Tahun Terbit</label>
                    <select class="form-select" id="bookYear" name="tahun_terbit" required>
                        <option selected disabled value="">Pilih Tahun</option>
                        @for ($year = 2000; $year <= 2024; $year++)
                            <option value="{{ $year }}" {{ $book->tahun_terbit == $year ? 'selected' : '' }}>{{ $year }}
                            </option>
                        @endfor
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bookCategory" class="form-label">Kategori</label>
                    <select class="form-select" id="bookCategory" name="kategori" required>
                        <option selected disabled value="">Pilih Kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->kategori }}" {{ $book->kategori == $category->kategori ? 'selected' : '' }}>
                                {{ str_replace('_', ' ', $category->kategori) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bookStock" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="bookStock" name="stok" value="{{ $book->stok }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="bookLocation" class="form-label">Lokasi</label>
                    <select class="form-select" id="bookLocation" name="lokasi" required>
                        <option selected disabled value="">Pilih Lokasi</option>
                        <?php
                        $racks = range('A', 'T');
                        foreach ($racks as $rack) {
                            for ($i = 1; $i <= 4; $i++) {
                                $value = "{$rack}{$i}";
                                $selected = $book->lokasi == $value ? 'selected' : '';
                                echo "<option value='{$value}' {$selected}>Rak {$value}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui Buku</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection